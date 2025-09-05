<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\OddsClient;
use stdClass;

/**
 * Class Bookmaker
 * @package Sportmonks\Soccer\Endpoint
 */
class Bookmaker extends OddsClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll()
    {
        $url = "bookmakers";
        return $this->call($url);
    }

    /**
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getById(int $bookmakerId)
    {
        $url = "bookmakers/{$bookmakerId}";
        return $this->call($url);
    }

    /**
     * @param string $name
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBookmakersSearchByName(string $name)
    {
        $url = "bookmakers/search/{$name}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId)
    {
        $url = "bookmakers/fixtures/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getBookmakerEventIdsByFixtureId(int $fixtureId)
    {
        $url = "bookmakers/events/fixtures/{$fixtureId}";
        return $this->call($url);
    }
}
