import { httpRequestBody } from './utilities.js';

'use strict';

export function makeItSlider(event, GALLERIE_URL)
{
    /*etape changée au profit de l'ajout d'une classe permettant la symetrie de la balise i*/
    /*change la classe de la balise i (+ et -) pour alterner l'affichage des balises i*/ 
    // let firstI = event.target.parentNode.childNodes[1];
    // firstI.classList.toggle(`display`);
    // firstI.classList.toggle(`displaynone`);
    // let secondI = event.target.parentNode.childNodes[3];
    // secondI.classList.toggle(`display`);
    // secondI.classList.toggle(`displaynone`);
    /*Ajout d'une classe à la balise i cible pour permettre une symétrie de la balise*/
    // let firstI = event.target.parentNode.childNodes[1];
    // firstI.classList.toggle(`symetrie`);
    // firstI.classList.toggle(`symetrienone`);
    
    /*enléve la classe cibleparentAnim pour suspendre l'animation sur les items de la gallerie*/
    let cibleParentTarget = event.target.parentNode.parentNode;
    cibleParentTarget.classList.remove('cibleparentAnim');
    let cibleParentBeforeTarget = cibleParentTarget.previousSibling.previousSibling;
    if(cibleParentBeforeTarget !== null){
        cibleParentBeforeTarget.classList.remove('cibleparentAnim');
    }

    /*mise en place d'un drapeau 'big' sur le cibleparent  concerné*/
    cibleParentTarget.classList.toggle('big');
    cibleParentTarget.classList.toggle('small');


    /*renvoie le nom de l'image sur laquelle on à cliquer*/
    // console.log(event.target);
    let img = event.target.parentNode.parentNode.childNodes[3].childNodes[1].childNodes[1];
    let nameImage=img.getAttribute('id');
    var formData = new FormData();
    formData.append('nameImage', nameImage);
    
    function display(body){
        /*détermine la balise ajax dans le DOM et */
        let ajax = img.parentNode.parentNode;
        /*stockage du contenu originel dans une variable*/
        let contenuOriginel = ajax.innerHTML;
        /*insére dans la balise ajax le contenu de l'URL*/
        ajax.innerHTML = body;
        /*Charge le flexslider*/
        $('.flexslider'). flexslider({
            //  directionNav: false,
            controlNav: false,
            // smoothHeight:true,
            pauseOnHover: true
        });
        
        
        /*fonction qui permet de revenir au contenu originel*/
        function makeItOriginel(){
            /*supression du drapeau 'big' */
            cibleParentTarget.classList.toggle('big');            cibleParentTarget.classList.toggle('small');
            /*rajoute la classe cibleparentAnim pour réactiver l'animation sur les items de la gallerie en fonction de la présence du big sur les items précédents*/
            cibleParentTarget.classList.add('cibleparentAnim');
            function bigPresenceParentBeforeTarget(){
                if(cibleParentBeforeTarget !== null){
                    let bigPresenceParentBeforeTarget = cibleParentBeforeTarget.classList.contains('big');
                    return bigPresenceParentBeforeTarget;
                }
            }
            bigPresenceParentBeforeTarget();
            console.log(bigPresenceParentBeforeTarget());
            if(cibleParentBeforeTarget !== null && bigPresenceParentBeforeTarget() == false){
                cibleParentBeforeTarget.classList.add('cibleparentAnim');
            }
            /*insére dans la balise ajax le contenu originel*/
            ajax.innerHTML = contenuOriginel;
            /*remet l'écouteur d'événement sur toutes les cibles afin de recommencer l'éxécution de la fonction makeItSlider*/
            // let links = document.querySelectorAll('.cible');
            // if ( typeof links !== 'undefined'){
            //     for(let i=0; i<links.length;i++){
            //         let link =links[i];
            //         link.addEventListener('click', function(){
            //             makeItSlider(event,GALLERIE_URL);
            //         }
            //         , {once:true});
            //     }
            // }

            // let link = event.target;
            link.addEventListener('click', function(){
                makeItSlider(event,GALLERIE_URL);
            }
            , {once:true});
        }
        /*ajoute un écouteur d'événement sur la cible afin d'éxécuter la fonction makeItOriginel*/
        let link = event.target;
        link.addEventListener('click', makeItOriginel, {once:true});
    }
    /*appelle de la fonction httpRaquestBody pour insérer l'URL, transmettre le nom de l'image sur laquelle on click*/
    httpRequestBody(GALLERIE_URL, display, formData);
}

