<?php

namespace App\Services;

use App\Content;
use Carbon\Carbon;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use PHPExcel_Cell;
use PHPExcel_IOFactory;

/**
 * Class ImportService
 *
 */
class ImportService
{

    /**
     * Статьи
     *
     * @var array
     */
    //protected $apiUrl = 'http://advertisers.leadia.ru/scripts/lead';
    protected $apiUrl = 'http://cloud1.leadia.ru/lead.php';

    /**
     * Тестовый метод вывода информации по листам из файла excel
     * @throws \PHPExcel_Exception
     */
    protected function exampleExcelParsing()
    {
        $objPHPExcel = PHPExcel_IOFactory::load(storage_path('app')."/keys.xlsx");
        //pred($objPHPExcel->getSheetNames());
        $i = 0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            // Ограничитель на 3 страницы, на случай, если много данных
            if ($i == 4) {
                die;
            }
            $worksheetTitle     = $worksheet->getTitle();
            $highestRow         = $worksheet->getHighestRow(); // например, 10
            $highestColumn      = $worksheet->getHighestColumn(); // например, 'F'
            $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
            $nrColumns = ord($highestColumn) - 64;

            echo "<br>В таблице ".$worksheetTitle." ";
            echo $nrColumns . ' колонок (A-' . $highestColumn . ') ';
            echo ' и ' . $highestRow . ' строк.';
            echo '<br>Данные:';
            echo '<table border="1">';
            for ($row = 4; $row <= $highestRow; ++$row)
            {
                echo '<tr>';
                for ($col = 0; $col < $highestColumnIndex; ++ $col)
                {
                    $cell = $worksheet->getCellByColumnAndRow($col, $row);
                    $val = $cell->getValue();
                    echo '<td>'.$val.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
            $i++;
            //die;
        }
    }

    /**
     * Метод парсинга excel файл с листами(worksheet) ключей
     * в папке storage/app/ должен быть файл keys.xlsx
     */
    public function parseExcelFile()
    {
        $objPHPExcel = PHPExcel_IOFactory::load(storage_path('app')."/keys.xlsx");
        //pred($objPHPExcel->getSheetNames());

        $i = 0;
        foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
        {
            if ($i == 0) {
                $i++;
                continue;
            }

            $worksheetTitle     = $worksheet->getTitle();
            $highestRow         = $worksheet->getHighestRow(); // например, 10

            $oneCategoryCollection = [];
            // $row = 4, потому что категории начинаются с 4 строки
            for ($row = 4; $row <= $highestRow; ++$row)
            {
                $cell = $worksheet->getCellByColumnAndRow(0, $row);
                $val = $cell->getValue();
                $oneCategoryCollection[] = $val;
            }

            $keywordsGroup = new Collection($oneCategoryCollection);
            $this->insertKeywordsGroup($keywordsGroup);
            $i++;
        }
    }

    /**
     * Метод вставки пачки записей ключей
     * @param \Illuminate\Support\Collection $keywordsGroup
     */
    protected function insertKeywordsGroup(Collection $keywordsGroup)
    {
        $keywordData = [];
        $cat_id = null;
        foreach($keywordsGroup as $keyword)
        {
            // Если первая запись в массиве, значит это категория
            // Вставляем категорию в БД и получаем id, далее его используем для ключей этой категории
            if ($keyword == $keywordsGroup->first()) {
                $preparedKD = $this->prepareKeyword($keyword, 0, 1);
                $cat_id = Content::insertGetId($preparedKD);
            } else {
                $keywordData[] = $this->prepareKeyword($keyword, $cat_id, 0);
            }
        }
        Content::insert($keywordData);
    }

    /**
     * Метод возврата массива с данными ключа
     * @param string $keyword Ключ
     * @param null|int $cat_id
     * @param bool|int $is_category
     * @return array
     */
    protected function prepareKeyword($keyword, $cat_id = null, $is_category = 0)
    {
        return [
            'keyword' => $keyword,
            'cat_id' => $cat_id,
            'is_category' => $is_category,
            'url' => rus_slug($keyword),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}