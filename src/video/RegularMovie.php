<?php

namespace video;

/**
 * Class RegularMovie
 */
class RegularMovie extends Movie
{
    /**
     * RegularMovie constructor.
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
        $thisAmount = 2;

        if ($daysRented > 2) {
            $thisAmount += ($daysRented - 2) * 1.5;
        }

        return $thisAmount;
    }

    /**
     * @param $daysRented
     * @return int
     */
    public function determineFrequentRenterPoints(int $daysRented) : int
    {
        return 1;
    }
}
