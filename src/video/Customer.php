<?php

namespace video;

/**
 * Class Customer
 */
class Customer
{
    /** @var  string */
    private $name;

    /** @var array  */
    private $rentals = [];

    /**
     * Customer constructor.
     * @param $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
     * TODO OMG this function. Split it, reduce cyclomatic complexity. Declare constants. Implement missing methods.
     * @return string
     */
    public function getStatement() : string
    {
        /** @var float $totalAmount */
        $totalAmount = 0;
        /** @var int $frequentRenterPoints */
        $frequentRenterPoints = 0;
        /** @var string $result */
        $result = "Rental Record for " . $this->getName() . "\n";

        /** @var Rental $rental */
        foreach ($this->rentals as $rental) {
            $thisAmount = 0;

            switch ($rental->movie()->priceCode()) {
                case REGULAR:
                    $thisAmount += 2;
                    if ($rental->daysRented() > 2) {
                        $thisAmount += ($rental->daysRented() - 2) * 1.5;
                    }
                    break;

                case NEW_RELEASE:
                    $thisAmount += ($rental->daysRented()) * 3;
                    break;

                case CHILDRENS:
                    $thisAmount += 1.5;
                    if ($rental->daysRented() > 3) {
                        $thisAmount += ($rental->daysRented() - 3) * 1.5;
                    }
                    break;
            }

            $frequentRenterPoints++;
            if ($rental->movie()->priceCode() == NEW_RELEASE && $rental->daysRented() > 1) {
                $frequentRenterPoints++;
            }

            $result .= "\t" . $rental->movie()->title() . "\t" . $thisAmount . "\n";
            $totalAmount += $thisAmount;
        }

        $result .= "You owed " . $totalAmount . "\n";
        $result .= "You earned " . $frequentRenterPoints . " frequent renter points\n";

        return $result;
    }
}
