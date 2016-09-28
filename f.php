<?php
/**
 * Author: Peredriy Stepan
 * Date: 28.09.16
 * Time: 17:05
 */

/**
 * Common function for two task
 *
 * @param $arr
 * @param string $value
 * @return mixed
 */
function f($arr, $value = ''){

    if (empty($arr)){
        return $value;
    } else {
        $y[array_pop($arr)] = f($arr, $value);
        return $y;
    }
}
