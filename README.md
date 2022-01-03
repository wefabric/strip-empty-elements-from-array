# strip-empty-elements-from-array

Tiny PHP 7.0+ package that, given an array, returns a duplicate in which all empty elements (recursive, at any level) are removed. 
If an element only contains empty elements, all those will be removed, after which the root element is also empty and will be removed itself. 
Uses the `empty()` function to determine if an element is empty. 

## Usage

`$result = StripEmptyElementsFromArray::from($input);`
