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
    public function getMovieTitle() : string
    {
        return $this->movie->getTitle();
    }

    /**
     * Movie's amount accessor.
     * @return float
     */
    public function determineMovieAmount() : float
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
