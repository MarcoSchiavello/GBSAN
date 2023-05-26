"use strict";

const popUpForm = document.querySelector('form[pup-up-form]');
const popUpTriggers = document.querySelectorAll('*[prescription-trigger]');
const popUpFormAction = popUpForm.action;

popUpTriggers.forEach(trigger => {
    trigger.addEventListener('click', e => {
        popUpForm.action = popUpForm.action.replace('|||prescription|||', trigger.getAttribute('prescription-trigger'));  
    });
});

popUpForm.querySelector('*[close-pop-up]').addEventListener('click', e => {
    popUpForm.action = popUpFormAction;
});