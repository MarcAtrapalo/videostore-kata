<?php

namespace video;

/**
 * Class NewReleaseMovie
 */
class NewReleaseMovie extends Movie
{
    const BASE_AMOUNT = 0;
    const MINIMUM_DAYS = 0;
    const AMOUNT_EXTRA_INCREMENT = 3.0;

    /**
     * NewReleaseMovie constructor.
     * @param $title
     */
    public function __construct(string $title)
    {
        parent::__construct($title);
    }

    /**
     * @param $daysRented
     * @return int
     */
    public function determineFrequentRenterPoints(int $daysRented) : int
    {
        return ($daysRented > 1) ? 2 : 1;
    }
}
