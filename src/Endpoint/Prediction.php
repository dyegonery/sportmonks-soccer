<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class Prediction
 * @package Sportmonks\Soccer\Endpoint
 */
class Prediction extends SoccerClient
{
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLeagues()
    {
        $url = "predictions/leagues";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilities()
    {
        $url = "predictions/probabilities";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getProbabilitiesByFixtureId(int $fixtureId)
    {
        $url = "predictions/probabilities/fixtures/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBets()
    {
        $url = "predictions/value-bets/next";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getValueBetsByFixtureId(int $fixtureId)
    {
        $url = "predictions/value-bets/fixtures/{$fixtureId}";
        return $this->call($url);
    }
}
