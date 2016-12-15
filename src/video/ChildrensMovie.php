<?php

namespace video;

/**
 * Class ChildrensMovie
 */
class ChildrensMovie extends Movie
{
    const BASE_AMOUNT = 1.5;
    const MINIMUM_DAYS = 3;
    const AMOUNT_EXTRA_INCREMENT = 1.5;

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
     * @return int
     */
    public function determineFrequentRenterPoints(int $daysRented) : int
    {
        return 1;
    }
}
