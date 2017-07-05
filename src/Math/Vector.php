<?php

class Vector {

    /**
     * @var int
     */
    private $count;

    /**
     * @var array
     */
    private $vector;

    /**
     * Constuctor to create vector from array
     *
     * @param array $vector
     */
    public function __construct(array $vector) {
        $this->count = count($vector);
        $this->vector = $vector;
    }

    /**
     * Add method gives sum of two vectors
     *
     * @param Vector $v
     * @return Vector
     */
    public function add(Vector $v) : Vector {
        return array_map(function($x1, $x2) {
            return $x1 + $x2;
        }, $this->vector, $v);
    }

    /**
     * Return vector as array
     *
     * @return array
     */
    public function getArray() : array {
        return $this->vector;
    } 

}