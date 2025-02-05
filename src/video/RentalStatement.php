<?php

namespace video;

/**
 * Class RentalStatement
 */
class RentalStatement
{
    /** @var  string */
    private $name;
    /** @var  float */
    private $totalAmount;
    /** @var  int */
    private $frequentRenterPoints;
    /** @var  array */
    private $rentals;

    /**
     * RentalStatement constructor.
     * @param $customerName
     */
    public function __construct(string $customerName)
    {
        $this->name = $customerName;
    }

    /**
     * @param Rental $rental
     */
    public function addRental(Rental $rental)
    {
        $this->rentals[] = $rental;
    }

    /**
     * @return string
     */
    public function makeRentalStatement() : string
    {
        $this->clearTotals();

        return $this->makeHeader() . $this->makeRentalLines() . $this->makeSummary();
    }

    /**
     * Reset amount and points.
     */
    private function clearTotals()
    {
        $this->totalAmount = 0;
        $this->frequentRenterPoints = 0;
    }

    /**
     * @return string
     */
    private function makeHeader() : string
    {
        return "Rental Record for " . $this->getName() . "\n";
    }

    /**
     * @return string
     */
    private function makeRentalLines() : string
    {
        $rentalLines = "";

        foreach($this->rentals as $rental) {
            $rentalLines .= $this->makeRentalLine($rental);
        }

        return $rentalLines;
    }

    /**
     * @param Rental $rental
     * @return string
     */
    private function makeRentalLine(Rental $rental) : string
    {
        /** @var float $thisAmount */
        $thisAmount = $rental->determineMovieAmount();

        $this->frequentRenterPoints += $rental->determineFrequentRenterPoints();
        $this->totalAmount += $thisAmount;

        return $this->formatRentalLine($rental, $thisAmount);
    }

    /**
     * @param Rental $rental
     * @param float $thisAmount
     * @return string
     */
    private function formatRentalLine(Rental $rental, float $thisAmount) : string
    {
        return "\t" . $rental->getMovieTitle() . "\t" . $thisAmount . "\n";
    }

    /**
     * @return string
     */
    private function makeSummary() : string
    {
        return "You owed " . $this->totalAmount . "\n" . "You earned " . $this->frequentRenterPoints . " frequent renter points\n";
    }

    /**
     * Name accessor.
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Amount owed accessor.
     * @return float
     */
    public function getTotalAmount() : float
    {
        return $this->totalAmount;
    }

    /**
     * Frequent renter points accessor.
     * @return int
     */
    public function getFrequentRenterPoints() : int
    {
        return $this->frequentRenterPoints;
    }
}
