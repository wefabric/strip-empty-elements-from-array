<?php

namespace Wefabric\StripEmptyElementsFromArray;

class StripEmptyElementsFromArray
{
    /**
     * Recursive function to remove empty elements from an array.
     * @param array $data
     * @param bool $treatZeroAsFilled If specified true, values = 0 (int, float or string) will NOT be pruned. Default false.
     * @return array
     */
    static function from(array $data, bool $treatZeroAsFilled = false) : array
    {
        foreach($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = self::from($value, $treatZeroAsFilled);
            }

            //if we check: empty($value); and $value is an array that was emptied, then $value here still contains the pre-emptied values, whereas $data[$key] contains the now emptied array.
            if(empty($data[$key])) {
                if(!$treatZeroAsFilled || $data[$key] !== 0) { //if value = (int) 0, (float) 0.0 or (string) "0", consider it NOT empty.
                    unset($data[$key]);
                }
            }
        }

        return $data;
    }

}