<?php

namespace IPInfoAPI;

class IPInfoResponse
{
    private $response;

    public function __construct($response)
    {
        $this->response = $response;
    }

    public function getIP(): string
    {
        return $this->response->ip;
    }

    public function getCity(): string
    {
        return $this->response->city;
    }

    public function getRegion(): string
    {
        return $this->response->region;
    }

    public function getCountry(): string
    {
        return $this->response->country;
    }
}