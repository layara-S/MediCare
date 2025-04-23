const quantityInput = document.getElementById('quantity');
const plusButton = document.querySelector('.plusquan');
const minusButton = document.querySelector('.minquan');


plusButton.addEventListener('click', function() {
  let currentQuantity = parseInt(quantityInput.value);
  if (!isNaN(currentQuantity) && currentQuantity > 0) { // Check for valid number and minimum value
    currentQuantity++;
    quantityInput.value = currentQuantity;
  }
});


minusButton.addEventListener('click', function() {
  let currentQuantity = parseInt(quantityInput.value);
  if (!isNaN(currentQuantity) && currentQuantity > 1) { // Check for valid number and minimum value
    currentQuantity--;
    quantityInput.value = currentQuantity;
  }
});