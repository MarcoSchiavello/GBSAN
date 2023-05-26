"use strict";

const deletes = document.querySelectorAll('*[delete]');
const puts = document.querySelectorAll('*[put]');
const posts = document.querySelectorAll('*[post]');
const form = document.createElement('form');
const method = document.createElement('input');
const csrf = document.createElement('input');
method.type = 'hidden';
method.name = '_method';
csrf.type = 'hidden';
csrf.name = '_token';

deletes.forEach(delete_ => {
    delete_.addEventListener('click', e => {
        form.action = delete_.getAttribute('delete');
        if(delete_.getAttribute('delete') === 'off')
            return;

        form.setAttribute("method", "POST");
        method.value = 'DELETE';
        form.append(method);
        csrf.value = delete_.getAttribute('token');
        form.append(csrf);
        document.body.append(form);
        form.submit();    
    });
});

puts.forEach(put => {
    put.addEventListener('click', e => {
        form.action = put.getAttribute('put');
        if(put.getAttribute('put') === 'off')
            return;
            
        form.setAttribute("method", "POST");
        method.value = 'PUT';
        form.append(method);
        csrf.value = put.getAttribute('token');
        form.append(csrf);
        document.body.append(form);
        form.submit();
    });
});

posts.forEach(post => {
    post.addEventListener('click', e => {
        form.action = post.getAttribute('post');
        if(post.getAttribute('post') === 'off')
            return;
            
        form.setAttribute("method", "POST");
        method.value = 'POST';
        form.append(method);
        csrf.value = post.getAttribute('token');
        form.append(csrf);
        document.body.append(form);
        form.submit();
    });
});