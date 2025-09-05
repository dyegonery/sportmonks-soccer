<?php

namespace Sportmonks\Soccer\Endpoint;

use Sportmonks\Soccer\Exception\ApiRequestException;
use Sportmonks\Soccer\SoccerClient;
use stdClass;

/**
 * Class PreMatchOdds
 * @package Sportmonks\Soccer\Endpoint
 */
class PreMatchOdds extends SoccerClient {
    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getAll() {
        $url = "odds/pre-match";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureId(int $fixtureId) {
        $url = "odds/pre-match/fixtures/{$fixtureId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $bookmakerId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndBookmakerId(int $fixtureId, int $bookmakerId) {
        $url = "odds/pre-match/fixtures/{$fixtureId}/bookmakers/{$bookmakerId}";
        return $this->call($url);
    }

    /**
     * @param int $fixtureId
     * @param int $marketId
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getByFixtureAndMarketId(int $fixtureId, int $marketId) {
        $url = "odds/pre-match/fixtures/{$fixtureId}/markets/{$marketId}";
        return $this->call($url);
    }

    /**
     * @return stdClass
     * @throws ApiRequestException
     */
    public function getLastUpdated() {
        $url = "odds/pre-match/latest";
        return $this->call($url);
    }
}