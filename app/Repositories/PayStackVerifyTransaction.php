<?php

namespace App\Repositories;


use GuzzleHttp\Client;

class PayStackVerifyTransaction
{

    /**
     *
     * @var [type]
     */
    protected $client;


    /**
     * PayStackVerifyTransaction Constructor
     */
    public function __construct()
    {
        //Initialize new guzzle http client
        $this->client = (new Client);
    }

    /**
     * Make request to payStack endpoint to verify
     * transaction using the reference ID.
     *
     * @param $reference
     * @return float
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function verify($reference,$all)
    {
        $response = $this->makeRequest($reference);

        //return $response;
        return $this->filterResponse($response,$all);
    }


    /**
     * Make request to paystack endpoint
     * with authorization using Guzzle Http Client
     * and return a json parsed response
     *
     * @param $reference
     * @return mixed|\Psr\Http\Message\ResponseInterface|string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function makeRequest($reference)
    {
        $requestUrl = env('PAYSTACK_ENDPOINT') . "transaction/verify/" . $reference;
        try {
            $response = $this->client->request("GET", $requestUrl, ['headers' => ['Authorization' => 'Bearer ' . env('PAYSTACK_SECRET_LIVE')]]);
            $response = json_decode($response->getBody()->getContents(), true);
        } catch (\Exception $e) {
            //just return the error message
            return $e->getMessage();
        }

        return $response;
    }

    /**
     * Filter response to get needed parameters.
     *
     * @param [type] $response
     * @return float
     */

    public function filterResponse($response, $all = 1)
    {
        if ($all <> 1)
            return ($response['data']['fees'] / 100);
        return $response;
    }


}
