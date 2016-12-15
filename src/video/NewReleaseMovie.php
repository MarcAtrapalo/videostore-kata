<?php

namespace video;

/**
 * Class NewReleaseMovie
 */
class NewReleaseMovie extends Movie
{
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
     * @return float
     */
    public function determineAmount(int $daysRented) : float
    {
        return $daysRented * 3.0;
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
