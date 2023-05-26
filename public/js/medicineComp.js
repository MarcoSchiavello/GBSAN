"use strict";

const medicineLit = document.querySelector('div[medicine-list]');
const template = document.querySelector('div[template]');
const clone = template.cloneNode(true);
const addBtn = document.querySelector('*[add]');
const revomeBtns = document.querySelectorAll('*[close]');

template.querySelectorAll('input, select').forEach(input => {
    input.setAttribute('disabled', '');
});

addBtn.onclick = e => {
    const newMedicine = clone.cloneNode(true);
    newMedicine.classList.remove('hidden');

    newMedicine.querySelector('*[close]').onclick = e => {
        newMedicine.remove();
    };  

    medicineLit.appendChild(newMedicine);
}

document.querySelectorAll('*[close]').forEach(close =>{ 
    close.onclick = e => {
        close.parentElement.remove();
    }
});  


