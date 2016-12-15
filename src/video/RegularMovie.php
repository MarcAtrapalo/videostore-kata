<?php

namespace video;

/**
 * Class RegularMovie
 */
class RegularMovie extends Movie
{
    const BASE_AMOUNT = 2;
    const MINIMUM_DAYS = 2;
    const AMOUNT_EXTRA_INCREMENT = 1.5;

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
     * @return int
     */
    public function determineFrequentRenterPoints(int $daysRented) : int
    {
        return 1;
    }
}
