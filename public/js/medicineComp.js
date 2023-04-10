"use strict";

const medicineLit = document.querySelector('div[medicine-list]');
const template = document.querySelector('div[template]');
const clone = template.cloneNode(true);
const addBtn = document.querySelector('*[add]');

console.log(addBtn);
template.querySelectorAll('input, select').forEach(input => {
    input.setAttribute('disabled', '');
});

addBtn.onclick = e => {
    const newMedicine = clone.cloneNode(true);
    newMedicine.classList.remove('hidden');
    medicineLit.appendChild(newMedicine);
}



