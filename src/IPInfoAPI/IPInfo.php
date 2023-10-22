<?php

namespace IPInfoAPI;

use ipinfo\ipinfo\IPinfo as ExternalIPinfo;

class IPInfo
{
    private $accessToken;

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function getDetails($ipAddress): IPInfoResponse
    {
        $ipinfo = new ExternalIPinfo($this->accessToken);
        $response = $ipinfo->getDetails($ipAddress);

        if (empty($response->city) && empty($response->region) && empty($response->country)) {
            exit("Couldn't retrieve data for IP address: $ipAddress");
        }
        return new IPInfoResponse($response);
    }
}
