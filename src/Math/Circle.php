<?php

// Declaring it myslef since my memory is to more places
const PI = 3.14159265358979323846264338327950288;

class Circle {

    /**
     * @var float
     */
    private $radius;

    /**
     * Constructor to create a circle object from a specified radius
     *
     * @param float $radius
     */
    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    /**
     * Get the diameter of the circle
     *
     * @return float
     */
    public function getDiameter() : float {
        return $this->radius * 2;
    }

    /**
     * Get the circumference of the circle
     * using 2PIr^2
     *
     * @return float
     */
    public function gerCircumference() : float {
        return (2 * PI) * $this->radius;
    }

    public function getArea() : float {
        return PI * pow($this->radius, 2);
    }

}