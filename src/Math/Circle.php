<?php

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
        return (2 * M_PI) * $this->radius;
    }

    public function getArea() : float {
        return M_PI * pow($this->radius, 2);
    }

}