<?php

namespace App\Repositories;


use GuzzleHttp\Client;

class GuzzleCall
{
    protected $client;

    public $requestType;

    public $requestUrl;

    public $params;


    public function __construct($type, $url, $params = [])
    {
        $this->requestType = strtoupper($type);

        $this->requestUrl = $url;

        $this->client = (new Client);

        $this->params = $params;
    }


    public function run()
    {
        if ($this->requestType == 'GET') {
            return $this->makeGetRequest();
        }

        return $this->makePostRequest();
    }

    private function makeGetRequest()
    {
        try{
            $response = $this->client->request($this->requestType, $this->requestUrl);
            $response = json_decode($response->getBody()->getContents(), true);
        }catch (\Exception $e){
            //just return the error message
            return $e->getMessage();
        }

        return $response;
    }


    private function makePostRequest()
    {

        try{
            $response = $this->client->request($this->requestType, $this->requestUrl, ['form_params' => $this->params]);
            $response = json_decode($response->getBody()->getContents(), true);
        }catch (\Exception $e){
            return $e->getMessage();
        }

        return $response;
    }



}
