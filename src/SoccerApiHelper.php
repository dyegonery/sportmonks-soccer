<?php

namespace Sportmonks\Soccer;

use DateTime;
use Sportmonks\Soccer\Exception\InvalidDateFormatException;

/**
 * Class SoccerApiHelper
 * @package Sportmonks\Soccer
 */
class SoccerApiHelper
{
    /**
     * @param string $date
     * @param string $format
     * @return string
     * @throws InvalidDateFormatException
     */
    public static function verifyDate(string $date, $format = "Y-m-d")
    {
        // Create DateTime from input string & format
        $dateTime = DateTime::createFromFormat($format, $date);

        // Check for errors
        $dateTimeErrors = DateTime::getLastErrors();

        // Validate DateTime
        if (!$dateTime || $dateTimeErrors !== false) {
            throw new InvalidDateFormatException();
        }

        // Date is Valid - Return Formatted String
        return $dateTime->format($format);
    }
}
