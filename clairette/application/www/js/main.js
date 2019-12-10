import { onClickCrypt } from './formulaire.js'
import { makeItSlider } from './gallerie.js'
import { getWwwUrl } from './utilities.js'



'use strict';

// pour le formulaire de connexion, le cryptage du mot de passe
let crypt = document.querySelector(`#crypt`);
if(crypt !== null){
    crypt.addEventListener("click",onClickCrypt);
}

// pour le slider de la gallerie
// let links = document.querySelectorAll('.cible');
// if (links !== null){
//     for(let i=0; i<links.length;i++){
//         let link =links[i];
//         link.addEventListener('click', makeItSlider, {once:true});
//     }
// }

let wwwUrl =getWwwUrl();

let linksGraphisme = document.querySelectorAll('#graphisme .cible');
if (linksGraphisme !== null){
    for(let i=0; i<linksGraphisme.length;i++){
        let linkGraphisme =linksGraphisme[i];
        linkGraphisme.addEventListener('click', function(){
            let GALLERIE_URL = `${wwwUrl}/gallerie/GallerieGraphismeView.php`;
            makeItSlider(event,GALLERIE_URL);
        }, {once:true});
    }
}

let linksIllustration = document.querySelectorAll('#illustration .cible');
if (linksIllustration !== null){
    for(let i=0; i<linksIllustration.length;i++){
        let linkIllustration =linksIllustration[i];
        linkIllustration.addEventListener('click', function(){
            let GALLERIE_URL = `${wwwUrl}/gallerie/GallerieIllustrationView.php`;
            makeItSlider(event,GALLERIE_URL);
        }, {once:true});
    }
}
