<?php

class Math {

    /**
     * Returns sign of number
     * Returning zero as 0 for now
     *
     * @param float $num
     * @return int
     */
    public static function sign(float $num) : int {
        if($num > 0) {
            return 1;
        } elseif($num < 0) {
            return -1;
        }
        return 0;
    }

}