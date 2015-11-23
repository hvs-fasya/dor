<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 25.09.2014
 * Time: 1:55
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Class Content
 * @package App
 */
class Content extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['has_content', 'has_mail_otvet', 'status', 'keyword', 'url', 'data'];


    /************* BEGIN RELATIONS *************/

    public function category()
    {
        return $this->belongsTo('App\Content', 'cat_id');
    }

    public function keywords()
    {
        return $this->hasMany('App\Content', 'cat_id');
    }

    /************* END RELATIONS *************/



    /************* BEGIN SCOPES *************/

    /**
     * Скоуп получения случайных ссылок на ключевики
     * @param $query
     * @param int $count
     * @return mixed
     */
    public function scopeRandom($query, $count=20)
    {
        return $query->whereStatus('published')
            ->where('is_category', '!=', 1)
            ->orderByRaw('RAND()')
            ->take($count)
            ->get(['keyword', 'url', 'cat_id']);
    }

    /************* END SCOPES *************/


    /**
     * Опубликовывает ключевые слова
     *
     * @param int $number
     */
    public static function publishKeywords($number = 500)
    {
        $q = static::query()->whereStatus('disabled')->take($number);
        $ids = $q->get(['id']);
        $q->update(['status' => 'published']);

        return $ids;
    }

    /**
     * Получить ключевое слово из базы без контента
     * из mail.ru
     *
     */
    public static function getKeywordWithoutContent()
    {
        return static::whereStatus('published')
            ->where('has_content', '=', false)
            ->where('has_mail_otvet', '=', true)
            ->where('is_category', '!=', 1)
            ->take(1)
            ->first();
    }

    /**
     * Получить ключи категории
     *
     * @param $size
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getCatKeyws($size = 10)
    {
        return static::query()->where('status', '=', 'published')
            ->where('is_category', '=', true)
            ->limit($size)
            ->get(['keyword', 'url']);
    }

    /**
     * Получает ключевые слова, постранично
     *
     * @param $number
     * @param $pageCount
     * @param int $perPage
     * @return mixed
     */
    public static function paginate($number, &$pageCount, $perPage = 100)
    {
        $pageCount = ceil(static::whereStatus('published')->count() / 100);
        return static::whereStatus('published')
            ->where('is_category', '=', 1)
            ->orderBy('updated_at', 'desc')
            ->skip($number * 100)->take(100)
            ->get(['keyword', 'url']);
    }

    public static function customPaginate($page = 1, $perPage = 100, $columns = ['*'])
    {
        $query = static::whereStatus('published')
            ->orderBy('updated_at', 'desc');
        $total = $query->count();

        $pquery = $query->forPage($page, $perPage);

        return new LengthAwarePaginator($pquery->get($columns), (int)$total, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
        ]);
    }


    /*public function scopePaginatee($query, $page = 1, $perPage = 100, $columns = ['*'])
    {
        $total = $query->getCountForPagination();

        vred($total);

        $pquery = $query->forPage($page, $perPage);

        return new LengthAwarePaginator($pquery->get($columns), (int)$total, $perPage, $page, [
            'path' => Paginator::resolveCurrentPath(),
        ]);
    }*/

    /**
     *
     * @param $array
     */
    public static function insertIgnore($array){
        $a = new static();
        if($a->timestamps){
            $now = Carbon::now();
            $array['created_at'] = $now;
            $array['updated_at'] = $now;
        }
        DB::insert('INSERT IGNORE INTO '.$a->table.' ('.implode(',',array_keys($array)).') values (?'.str_repeat(',?',count($array) - 1).')',array_values($array));
    }
}