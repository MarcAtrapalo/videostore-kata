<?php

namespace video;

/**
 * Class ChildrensMovie
 */
class ChildrensMovie extends Movie
{
    /**
     * ChildrensMovie constructor.
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
        $thisAmount = 1.5;

        if ($daysRented > 3) {
            $thisAmount += ($daysRented - 3) * 1.5;
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
