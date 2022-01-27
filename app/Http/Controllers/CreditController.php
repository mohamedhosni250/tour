<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class CreditController extends Controller
{
    public function credit(Request $request)
    {

      $total = $request->total*100 ;
      $package_name = $request->package_name;
        $token = $this->getToken();
        $items = [
            [
                "name" => $package_name,
                "amount_cents" => "500000",
                "description" => "tour package",
                "quantity" => "1"
            ]
        ];
        $order = $this->createOrder($token, $items,$total);
        $paymentToken = $this->getPaymentToken($order, $token ,$total);

        return Redirect::away('https://accept.paymob.com/api/acceptance/iframes/161164' . '?payment_token=' . $paymentToken);
    }

    public function getToken()
    {
        $response = Http::post('https://accept.paymob.com/api/auth/tokens', [
            'api_key' => "ZXlKMGVYQWlPaUpLVjFRaUxDSmhiR2NpT2lKSVV6VXhNaUo5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TmpReE5qUXNJbTVoYldVaU9pSnBibWwwYVdGc0luMC5SMEFUT1hQT0ZDTkJhdWRnWmJNQUFNVkhCQ3RYZHp4Y2xlYzJFRlg4Z0JybnU2bll2SEVzenJwS2h2bVJMQUs3eWFTMDN2Wm5aTnRzVzgxR0xid2NMdw=="
        ]);
        return $response->object()->token;
    }

    public function createOrder($token, $items ,$total)
    {


        $data = [
            "auth_token" =>   $token,
            "delivery_needed" => "false",
            "amount_cents" => $total,
            "currency" => "EGP",
            "items" => $items,

        ];
        $response = Http::post('https://accept.paymob.com/api/ecommerce/orders', $data );
        return $response->object();
    }

    public function getPaymentToken($order, $token ,$total)
    {
        $billingData = [
            "apartment" => "803",
            "email" => Auth::user()->email,
            "floor" => "42",
            "first_name" => Auth::user()->name,
            "street" => "Ethan Land",
            "building" => "8028",
            "phone_number" => "+86(8)9135210487",
            "shipping_method" => "PKG",
            "postal_code" => "01898",
            "city" => "Jaskolskiburgh",
            "country" => "CR",
            "last_name" => "Nicolas",
            "state" => "Utah"
        ];
        $data = [
            "auth_token" => $token,
            "amount_cents" => $total,
            "expiration" => 3600,
            "order_id" => $order->id,
            "billing_data" => $billingData,
            "currency" => "EGP",
            "integration_id" => '165538'
        ];
        $response = Http::post('https://accept.paymob.com/api/acceptance/payment_keys', $data);
        return $response->object()->token;
    }
    public function callback(Request $request)
    {
       
        $data = $request->all();
        
        ksort($data);
        $hmac = $data['hmac'];
        $array = [
            'amount_cents',
            'created_at',
            'currency',
            'error_occured',
            'has_parent_transaction',
            'id',
            'integration_id',
            'is_3d_secure',
            'is_auth',
            'is_capture',
            'is_refunded',
            'is_standalone_payment',
            'is_voided',
            'order',
            'owner',
            'pending',
            'source_data_pan',
            'source_data_sub_type',
            'source_data_type',
            'success',
        ];
        $connectedString = '';
        foreach ($data as $key => $element) {
            if (in_array($key, $array)) {
                $connectedString .= $element;
            }
        }
        $secret = "E588C3D7D22BA4ACAE48AEF756613ECB";
        $hased = hash_hmac('sha512', $connectedString, $secret);
       
        if ($hased == $hmac) {
            echo "secure";
            
            exit;
        }
        echo 'not secure';
        exit;
    }
}
