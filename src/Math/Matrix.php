<?php

/**
 * Matrix Class
 */
class Matrix {
    /**
     * @var int
     */
    private $rows;

    /**
     * @var int
     */
    private $cols;

    /**
     * @var array
     */
    private $matrix;

    /**
     * Constructor method to initialize matrix
     *
     * @param array $matrix
     */
    public function __construct(array $matrix) {
        // Set matrix rows
        $this->rows = count($matrix);
        // Set matric columns
        $this->cols = count($matrix[0]);
        // Set matrix
        $this->matrix = $matrix;
    }

    /**
     * Add method
     *
     * @param $num
     * @return void
     */
    public function add($n) {
        if($n instanceof Matrix) {
            for ($i = 0; $i < $this->rows; $i++) { 
                for ($j = 0; $j < $this->cols; $j++) { 
                    $this->matrix[$i][$j] += $n->matrix[$i][$j];
                }
            }
        } else {
            for ($i = 0; $i < $this->rows; $i++) { 
                for ($j = 0; $j < $this->cols; $j++) { 
                    $this->matrix[$i][$j] += $n;
                }
            }
        }
    }

    /**
     * Array of matrix
     * 
     * @return array
     */
    public function toArray() : array {
        return $this->matrix;
    }

    /**
     * @return int
     */
    function getRows() : int {
        return $this->rows;
    }

    /**
     * @return int
     */
    function getColumns() : int {
        return $this->cols;
    }

    /**
     * Get values from column of matrix
     *
     * @param int $col
     * @return array
     */
    function getColumnValues(int $col) : array {
        return array_column($this->matrix, $col);
    } 

}