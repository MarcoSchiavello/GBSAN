"use strict";

const starts = document.querySelectorAll('*[start]');

starts.forEach(start => {
    start.addEventListener('change', e => {
        const end = document.querySelector('*[end='+start.getAttribute('start')+']');
        end.min = start.value;
    });
}); 