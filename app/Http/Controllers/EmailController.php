<?php namespace App\Http\Controllers;

use FastRoute\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class Controller
 * @package App\Http\Controllers
 */
class EmailController extends Controller
{
    /**
     *
     * @param Request $request
     * @return View
     */
    public function send(Request $request)
    {
        $data = $request->only('name', 'mail', 'text_question');

        $message = "ФИО: {$data['name']}\nEmail: {$data['mail']}\nСообщение:{$data['text_question']}";

        $result = Mail::raw($message, function($message) {
            $message->subject('Вопрос с Кашалота');
            $message->from('kashalotfinance@gmail.com', 'Kashalot');
            $message->to('mihailgologan@gmail.com')->cc(['vitsw86@gmail.com', '0x6fwhite@gmail.com', 'mitea.gologan@gmail.com']);
        });

        return view('feedback')->withSuccess($result);
    }

}
