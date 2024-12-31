# Uncommon PHP Bug: Unexpected Type in Array Summation

This repository demonstrates a subtle bug that can occur in PHP when processing arrays containing unexpected data types. The `calculateSum` function is designed to add all numbers in an array, but it fails if the array contains any non-numeric values. The error handling in the original code is insufficient to prevent the error.

## Bug Description
The `calculateSum` function doesn't adequately check for non-numeric data types within the input array. When a non-numeric type is encountered, a runtime error occurs. 

## Solution
The solution enhances the input validation by employing `is_numeric()` to explicitly verify that each array element is a number. This robust check prevents runtime errors and handles unexpected input more gracefully.
