'use strict';
export function onClickCrypt ()
{
    let firstI = document.querySelector(`#crypt i:first-child`);
    firstI.classList.toggle(`display`);
    firstI.classList.toggle(`displaynone`);

    let secondI = document.querySelector(`#crypt i:last-child`);
    secondI.classList.toggle(`display`);
    secondI.classList.toggle(`displaynone`);

    let inputPassword = document.querySelector('#password');
    if(inputPassword.getAttribute('type') == 'text'){
        inputPassword.setAttribute('type','password');
    }
    else{
        inputPassword.setAttribute('type','text');
    }
}

