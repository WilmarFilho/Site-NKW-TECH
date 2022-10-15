<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagamentoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function checkout() {

        
        \Stripe\Stripe::setApiKey('sk_test_51LsYCqHCT0bYlJFqcTG8ZP72VfWqIZEgAJlHFUvCMDDf76b2OtYROKo8r2LXBTiGaHYe0o9qGLVNQ5x5Zw3iE8k200OWvffTaE');

        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        try {

            $checkout_session = \Stripe\Checkout\Session::create([
                'line_items' => [[
                    'price' => 'price_1LsefVHCT0bYlJFqwL852CN3',
                    'quantity' => 1,
                ]],
                'mode' => 'subscription',
                'success_url' => $YOUR_DOMAIN . '/sucess?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => $YOUR_DOMAIN . '/',
            ]);
           
            header("HTTP/1.1 303 See Other");
            $link = "<script>location.href='" . $checkout_session->url . "';</script>";
            echo $link;

        } catch (Error $e) {
            http_response_code(500);
                
            echo json_encode(['error' => $e->getMessage()]);
          
        }
    }

    public function pagamentoSucesso() {

        User::where('id', auth()->user()->id)->update(['assinatura' => 'premium']);

        return redirect()->route('home');

    }

}
