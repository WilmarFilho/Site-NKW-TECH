<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WebhookController extends Controller
{
    public function webhook() {

        $endpoint_secret = 'whsec_5c65dda71f6ca297de07a6f5490325706a852b5a1202e15d8c6c65b38412d7cf';

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
        $event = \Stripe\Webhook::constructEvent(
            $payload, $sig_header, $endpoint_secret
        );
        } catch(\UnexpectedValueException $e) {
        // Invalid payload
        http_response_code(400);
        exit();
        } catch(\Stripe\Exception\SignatureVerificationException $e) {
        // Invalid signature
        http_response_code(400);
        exit();
        }

        // Handle the event
        switch ($event->type) {
        case 'customer.subscription.deleted':
            $evento = $event->data->object;

            User::where('idcliente', $evento->customer)->update(['assinatura' => 'visitante']);
            echo 'Desativada';
          
        case 'customer.subscription.updated':
            $evento = $event->data->object;

            if($evento->cancel_at_period_end == true) {
                User::where('idcliente', $evento->customer)->update(['cancelada' => 'sim']);
                echo 'Cancelada';
            }

            if($evento->cancel_at_period_end == false) {
                User::where('idcliente', $evento->customer)->update(['cancelada' => '']);
                echo 'Renovado';
            }

            
        default:
           echo 'Evento diferente'; 
        }

        
        http_response_code(200);

    }
}
