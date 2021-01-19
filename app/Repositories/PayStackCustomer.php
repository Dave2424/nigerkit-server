<?php

namespace App\Repositories;


use GuzzleHttp\Client;

class PayStackCustomer
{

    /**
     *
     * @var [type]
     */
    protected $client;


    /**
     * FetchBanks Constructor
     */
    public function __construct()
    {
        //Initialize new guzzle http client
        $this->client = (new Client);
    }

    /**
     * Make request to payStack endpoint to verify account number
     *
     * @param [type] $reference
     * @return mixed
     */
    public function create($payload)
    {
        $requestUrl = env('PAYSTACK_ENDPOINT') . "customer";
        try{
            $response = $this->client->request("POST", $requestUrl, ['headers' => ['Authorization' => 'Bearer '. env('PAYSTACK_SECRET_LIVE')], 'form_params' => $payload]);
            $response = json_decode($response->getBody()->getContents(), true);
        }catch (\Exception $e){
            //just return the error message
            return $e->getMessage();
        }

        return $response;

        return $this->filterResponse($response);
    }


    /**
     * Filter response to get needed parameters.
     *
     * @param [type] $response
     * @return void
     */
    private function filterResponse($response)
    {
        if($response['status']) {
            return $response['data'];
        }
        return [];
    }


}
