<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\CoreClient;
use stdClass;

/**
 * Class Country
 * @package Sportmonks\Soccer\Endpoint
 */
class Country extends CoreClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "countries";
        return $this->call($url);
    }

    /**
     * @param $countryId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById($countryId)
    {
        $url = "countries/{$countryId}";
        return $this->call($url);
    }
}
