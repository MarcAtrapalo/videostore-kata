<?php

namespace video;

/**
 * Class Movie
 */
abstract class Movie
{
    /**
     * The amount (whatever that is) if MINIMUM_DAYS is not reached in a rental
     */
    const BASE_AMOUNT = 0;

    /**
     * The number of days after which the amount (whatever that is) increments at AMOUNT_EXTRA_INCREMENT times per day.
     */
    const MINIMUM_DAYS = 0;

    /**
     * The multiply factor for the amount (whatever that is) after MINIMUM_DAYS.
     */
    const AMOUNT_EXTRA_INCREMENT = 1.0;



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
     * Determines amount (whatever that is) for this movie for the number of rented days.
     *
     * @param int $daysRented
     * @return float
     */
    public function determineAmount(int $daysRented,
                                    float $baseAmount = self::BASE_AMOUNT,
                                    int $minimumDays = self::MINIMUM_DAYS,
                                    float $amountExtraIncrement = self::AMOUNT_EXTRA_INCREMENT) : float {
        $thisAmount = $baseAmount;

        if ($daysRented > $minimumDays) {
            $thisAmount += ($daysRented - $minimumDays) * $amountExtraIncrement;
        }

        return $thisAmount;
    }

    /**
     * TODO comment this
     * @param int $daysRented
     * @return int
     */
    abstract public function determineFrequentRenterPoints(int $daysRented) : int;
}
