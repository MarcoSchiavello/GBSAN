"use strict";

const triggers = document.querySelectorAll('*[trigger]');
const popUps = document.querySelectorAll('*[pop-up]');

triggers.forEach(trigger => {
    trigger.addEventListener('click', e => {
        const context = trigger.getAttribute('trigger');
        const popUp = document.querySelector('*[pop-up="' + context + '"]');
        popUp.classList.toggle('hidden');
        popUp.classList.toggle('flex');        
    });
});

popUps.forEach(popUp => {
    popUp.querySelector('*[close-pop-up]').addEventListener('click', e => {
        popUp.classList.toggle('hidden');
        popUp.classList.toggle('flex');
    });
});