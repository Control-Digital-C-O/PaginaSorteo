<?php
namespace Models;

class MercadoPago {
    private $accessToken;

    public function __construct($accessToken) {
        $this->accessToken = $accessToken;
    }

    public function obtenerSaldo() {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://api.mercadopago.com/v1/account/balance");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: Bearer " . $this->accessToken,
            "Content-Type: application/json"
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        curl_close($ch);

        return json_decode($response, true);
    }
}
