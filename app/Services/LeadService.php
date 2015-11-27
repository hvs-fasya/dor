<?php

namespace App\Services;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

/**
 * Класс отправки лида по api
 */
class LeadService
{

    /**
     * Статьи
     *
     * @var array
     */
    //protected $apiUrl = 'http://advertisers.leadia.ru/scripts/lead';
    protected $apiUrl = 'http://cloud1.leadia.ru/lead.php';

    /**
     * Метод отправки лида
     *
     * @param \Illuminate\Http\Request $request
     * @param string $type
     * @return bool
     */
    protected function sendLead(Request $request, $type = 'lawyer')
    {
    }

    /**
     * Метод отправки лида юристов
     * @param \Illuminate\Http\Request $request
     * @return \GuzzleHttp\Message\FutureResponse|\GuzzleHttp\Message\ResponseInterface|\GuzzleHttp\Ring\Future\FutureInterface|null
     */
    public function sendLawyerLead(Request $request)
    {
        $client = new Client();
        $response = $client->post($this->apiUrl, [
            'form_params' => [
                'form_page' => $request->getHost(),
                'referer' => $request->server('HTTP_REFERER'),
                'client_ip' => $request->ip(),
                'userid' => 7590,
                'subaccount' => config('custom_app.subaccount', 'ofispravo'),
                'product' => 'lawyer',
                'template' => 'default',
                'region' => $request->get('region'),
                'first_last_name' => $request->get('first_last_name'),
                'phone' => $request->get('phone'),
                'question' => $request->get('question')
            ]
        ]);

        return $response;
    }
}
