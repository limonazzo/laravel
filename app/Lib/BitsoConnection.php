<?php

namespace App\Lib;

use App\Models\BitcointModel;
use GuzzleHttp\Client;

class BitsoConnection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function getBitcointPrice()
    {
        $client = new Client();
        try {
            $response = $client->request('GET', $this->config['url']['orderbook']);
            $body = $response->getBody();
            $data = json_decode($body, true);
            if (isset($data['payload']['bids'][0]['price'])) {
                return $data['payload']['bids'][0]['price'];
            }
        } catch (\Exception $exception) {
            return null;
        }
    }

    public function saveBitcointPrice($price)
    {
        return BitcointModel::create([
            'price' => (float) $price
        ]);
    }
}
