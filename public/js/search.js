"use strict";

const searchBar = document.querySelector('input[search]');
const searchElements = document.querySelectorAll('*[search-item]');

searchBar.addEventListener('input', e => {
    searchElements.forEach( ele => {
        if(ele.innerHTML.toLowerCase().indexOf(searchBar.value.toLowerCase()) === -1) {
            ele.classList.add('hidden');
        } else {
            ele.classList.remove('hidden');
        }
    });
});