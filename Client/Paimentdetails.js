'use strict';

// all initial elements
const payAmountBtn = document.querySelector('#payAmount');
const decrementBtn = document.querySelectorAll('#decrement');
const quantityElem = document.querySelectorAll('#quantity');
const incrementBtn = document.querySelectorAll('#increment');
const priceElem = document.querySelectorAll('#price');
const subtotalElem = document.querySelector('#subtotal');
const taxElem = document.querySelector('#tax');
const totalElem = document.querySelector('#total');
var qte = 1;

// loop: for add event on multiple `increment` & `decrement` button
for (let i = 0; i < incrementBtn.length; i++) {

  incrementBtn[i].addEventListener('click', function () {

    // collect the value of `quantity` textContent,
    // based on clicked `increment` button sibling.
    let increment = Number(this.previousElementSibling.textContent);

    // plus `increment` variable value by 1
    increment++;

    // show the `increment` variable value on `quantity` element
    // based on clicked `increment` button sibling.
    this.previousElementSibling.textContent = increment;
    qte=increment;
    

  });


  decrementBtn[i].addEventListener('click', function () {

    // collect the value of `quantity` textContent,
    // based on clicked `decrement` button sibling.
    let decrement = Number(this.nextElementSibling.textContent);

    // minus `decrement` variable value by 1 based on condition
    decrement <= 1 ? 1 : decrement--;

    // show the `decrement` variable value on `quantity` element
    // based on clicked `decrement` button sibling.
    this.nextElementSibling.textContent = decrement;
    qte=decrement;
    

  });

}

const closeBtns = document.querySelectorAll('.product-close-btn');

closeBtns.forEach(btn => {
  btn.addEventListener('click', () => {
    const cartId = btn.closest('.card').getAttribute('id');
    const cart = document.querySelector(`#${cartId}`);
    cart.style.display = 'none';
    localStorage.setItem(cartId, 'closed');
  });
});

document.addEventListener('DOMContentLoaded', () => {
  closeBtns.forEach(btn => {
    const cartId = btn.closest('.card').getAttribute('id');
    if (localStorage.getItem(cartId) === 'closed') {
      const cart = document.querySelector(`#${cartId}`);
      cart.style.display = 'none';
    }
  });
});















let lastSubtotal = 0;

function totalCalc() {
  let subtotal = 0;
  for (let i = 0; i < priceElem.length; i++) {
    const price = Number(priceElem[i].innerHTML);
    const quantity = Number(quantityElem[i].value);
    subtotal += price * quantity;
  }
  subtotalElem.textContent = subtotal;
  lastSubtotal = subtotal;
}

function discount(){
  const subtotal = Number(subtotalElem.innerHTML);
  const tax = subtotal * 0.10 / 100 ;
  taxElem.textContent = tax;
  const total = subtotal - tax;
  totalElem.textContent = total;
}

payAmountBtn.addEventListener('click', () => {
  alert(`Total amount to be paid: ${totalElem.innerHTML}`);
});

for (let i = 0; i < decrementBtn.length; i++) {
  decrementBtn[i].addEventListener('click', () => {
    if (quantityElem[i].value > 1) {
      quantityElem[i].value = Number(quantityElem[i].value) - 1;
      totalCalc();
      discount();
    }
  });
}

for (let i = 0; i < incrementBtn.length; i++) {
  incrementBtn[i].addEventListener('click', () => {
    quantityElem[i].value = Number(quantityElem[i].value) + 1;
    totalCalc();
    discount();
  });
}

totalCalc();
discount();

