<?php
/**
 * Created by PhpStorm.
 * User: Vitalik
 * Date: 04.05.2015
 * Time: 0:25
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Страницы с формой
 *
 * Class FormController
 * @package App\Http\Controllers
 */
class FormController extends Controller{

    /**
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $amount = (int) $request->get('amount', 10000);
        $term = (int) $request->get('term', 30);
        $ag = (int) $request->get('ag', 0);

        return view('form', compact('amount', 'term', 'ag'));
    }


    /**
     *
     * @return \Illuminate\View\View
     */
    public function realty()
    {
        return view('realty_credit');
    }

}