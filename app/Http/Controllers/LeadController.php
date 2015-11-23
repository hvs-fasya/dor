<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
class LeadController extends BaseController
{

    /**
     * Отправка лида по ипотечному кредиту
     *
     * @param Request $request
     */
    public function send_realty_lead(Request $request)
    {
        # Default data

        $data = array(
            'form_page' => $request->getHost(),
            'referer' => $request->server('HTTP_REFERER'),
            'client_ip' => $request->getClientIp(),
            'userid' => $request->get('wmid', 2), /* Id под недвижимость */
            'product' => $request->get('product', 'mortgage'),
            'subaccount' => $request->get('sub', ''),
            'template' => 'default'
        );

        $data['region'] = $request->get('region');
        $data['first_last_name'] = $request->get('first_last_name');
        $data['phone'] = $request->get('phone');
        $data['question'] = $request->get('question', '');
        $data['realty_type'] = $request->get('realty_type');
        $data['desc'] = $request->get('desc');

        $url = "http://advertisers.leadia.ru/scripts/lead";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url); // set url to post to
        curl_setopt($ch, CURLOPT_FAILONERROR, 1);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// allow redirects
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
        curl_setopt($ch, CURLOPT_TIMEOUT, 15); // times out after 4s
        curl_setopt($ch, CURLOPT_POST, 1); // set POST method
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // add POST fields
        $result = curl_exec($ch); // run the whole process
        print_r($result);
        curl_close($ch);
    }

}
