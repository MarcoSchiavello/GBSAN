"use strict";

function timespanBind() {
    const starts = document.querySelectorAll('*[start]');
    
    starts.forEach(start => {
        if(start !== undefined) {
            const end = start.parentElement.parentElement.querySelector('*[end]');
            end.min = start.value;
        }

        start.addEventListener('change', e => {
            const end = start.parentElement.parentElement.querySelector('*[end]');
            end.min = start.value;
        });
    });     
}

timespanBind();

export default {
    bind: timespanBind,
}