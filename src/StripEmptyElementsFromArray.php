<?php

namespace Wefabric\StripEmptyElementsFromArray;

class StripEmptyElementsFromArray
{
    /**
     * Recursive function to remove empty elements from an array.
     * @param array $data
     * @return array
     */
    static function from(array $data) : array
    {
        foreach($data as $key => $value) {
            if (is_array($value)) {
                $data[$key] = self::from($value);
            }

            //if we check: empty($value); and $value is an array that was emptied, then $value here still contains the pre-emptied values, whereas $data[$key] contains the now emptied array.
            if(empty($data[$key])) {
                unset($data[$key]);
            }
        }

        return $data;
    }

}