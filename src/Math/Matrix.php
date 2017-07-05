<?php

namespace Math;

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
     * @param bool $validate default true
     */
    function __construct(array $matrix, bool $validate = true) {
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

    public function getDeterminant() : int {

    }

    /**
     * Remove specified column and row from matrix
     *
     * @param int $col
     * @param int $row
     * @return Matrix
     */
    public function crossOut(int $col, int $row) : Matrix {
        return $this->matrix;
    }

    public function transpose() : Matrix {
        // If only one row
        if($this->rows == 1) {
            // Then create a row for each col
            $matrix = array_map(function ($el) {
                return [$el];
            }, $this->matrix[0]);
        } else {
            // If more than 1 row
            // Not sure how to do this yet
        }

        return (new self($matrix, false));
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
    public function getRows() : int {
        return $this->rows;
    }

    /**
     * @return int
     */
    public function getColumns() : int {
        return $this->cols;
    }

    /**
     * Get values from column of matrix
     *
     * @param int $col
     * @return array
     */
    public function getColumnValues(int $col) : array {
        return array_column($this->matrix, $col);
    }

}