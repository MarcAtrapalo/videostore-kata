<?php

namespace video;

/**
 * Class Rental
 */
class Rental
{
    /** @var  Movie */
    private $movie;

    /** @var  int */
    private $daysRented;

    /**
     * Rental constructor.
     * @param Movie $movie
     * @param int $daysRented
     */
    public function __construct(Movie $movie, int $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    /**
     * Movie's title accessor.
     * @return string
     */
    public function title() : string
    {
        return $this->movie->title();
    }

    /**
     * Movie's amount accessor.
     * @return float
     */
    public function determineAmount() : float
    {
        return $this->movie->determineAmount($this->daysRented);
    }

    /**
     * TODO comment this
     * @return int
     */
    public function determineFrequentRenterPoints() : int
    {
        return $this->movie->determineFrequentRenterPoints($this->daysRented);
    }
}
