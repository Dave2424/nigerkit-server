<?php

namespace App\Repositories;


use GuzzleHttp\Client;

class VerifyAccountNumber
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
    public function verify($accountNumber, $bankCode)
    {
        $response = $this->makeRequest($accountNumber, $bankCode);
        return $this->filterResponse($response);
    }

    private function makeRequest($accountNumber, $bankCode)
    {
        $requestUrl = env('PAYSTACK_ENDPOINT') . "bank/resolve?account_number={$accountNumber}&bank_code={$bankCode}";
        try{
            $response = $this->client->request("GET", $requestUrl, ['headers' => ['Authorization' => 'Bearer '. env('PAYSTACK_SECRET_LIVE')]]);
            $response = json_decode($response->getBody()->getContents(), true);
        }catch (\Exception $e){
            //just return the error message
            return $e->getMessage();
        }

        return $response;
    }


    private function filterResponse($response)
    {
        if(isset($response['status'])&&$response['status']) {
            return $response['data'];
        }
        return [$response];
    }


}
