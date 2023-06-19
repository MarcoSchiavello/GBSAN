"use strict";

function clear() {
    document.querySelectorAll('*[clear]').forEach(ele => { ele.innerHTML = ''; ele.value = ''})
}

const bindElements = () => {
    document.querySelectorAll('*[fakeUpload]').forEach( ele => {
        const fakeUpload = ele.getAttribute('fakeUpload');

        const input = document.querySelector(`input[type="file"][realUpload="${fakeUpload}"]`);
        const preview = document.querySelector(`img[preview="${fakeUpload}"]`);
        
        ele.onclick = e => input.click();

        const uploadProd = e => {
            const [file] = input.files;
            if(file) {
                if(preview !== null) {
                    preview.src = URL.createObjectURL(file);
                    preview.style.display = "block";
                }

                const fileName = document.querySelector(`*[fileName="${fakeUpload}"]`);
                if(fileName !== null)
                    fileName.innerHTML = file.name;

                clear();
            }
        };

        input.onchange = uploadProd;

        if(preview !== null && preview.getAttribute('init') !== '') {
            console.log(preview.src);
            preview.src = preview.getAttribute('init')
            preview.style.display = "block";
            clear();
        }
    });
}

bindElements();

export default {
    bindElements,
};