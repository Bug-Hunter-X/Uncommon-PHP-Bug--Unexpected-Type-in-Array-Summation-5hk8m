function calculateSum(numbers) {
  if (!is_array(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }
  let sum = 0;
  foreach ($numbers as $number) {
    if (!is_numeric($number)) {
      throw new Error('Invalid input: array elements must be numbers.');
    }
    $sum += $number; 
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];

try {
  $sum = calculateSum($numbers);
  echo "Sum: " . $sum;
} catch (Error $e) {
  echo "Error: " . $e->getMessage();
}
