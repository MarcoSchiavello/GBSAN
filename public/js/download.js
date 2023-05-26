"use strict";

const downloadTriggers = document.querySelectorAll('*[download]');

downloadTriggers.forEach(trigger => {
    trigger.addEventListener('click', e => {
        const link = document.createElement('a');
        link.setAttribute('download', trigger.getAttribute('downloadName') === undefined ? 'download' : trigger.getAttribute('downloadName'));
        link.href = trigger.getAttribute('download');
        document.body.appendChild(link);
        link.click();
        link.remove();
    });
});