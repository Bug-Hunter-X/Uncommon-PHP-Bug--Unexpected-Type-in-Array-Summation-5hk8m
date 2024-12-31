function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] !== 'number') {
      throw new Error('Invalid input: array elements must be numbers.');
    }
    sum += numbers[i]; 
  }
  return sum;
}

const numbers = [1, 2, 'a', 4, 5];
const sum = calculateSum(numbers); 
console.log(sum); // Throws an error because of the string 'a'