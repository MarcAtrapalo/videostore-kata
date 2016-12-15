<?php

namespace video;

/**
 * Class Movie
 */
abstract class Movie
{
    /** @var  string */
    private $title;

    /**
     * Movie constructor.
     * @param $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }

    /**
     * Title accessor.
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * TODO comment this
     * @param int $daysRented
     * @return float
     */
    abstract public function determineAmount(int $daysRented) : float;

    /**
     * TODO comment this
     * @param int $daysRented
     * @return int
     */
    abstract public function determineFrequentRenterPoints(int $daysRented) : int;
}
