

let collectionBtnNouvelle = document.querySelectorAll("input[type=button]");

// let collectionNouvelle = document.getElementById("nouvelle_");


let contenuNouvelle =  document.getElementById("nouvelle_");

// console.log(collectionNouvelle.length)
console.log(collectionBtnNouvelle.length)
if (collectionBtnNouvelle)
{
    for (let btn of collectionBtnNouvelle){
            console.log(btn.id)
            btn.addEventListener('click',Ajax)
    }
}


function Ajax(evt) {
    
    //  instructions ici
    let idNouvelle = evt.target.id;
    console.log(evt.target.id);
    let maRequete = new XMLHttpRequest();
    console.log(maRequete)
    maRequete.open('GET', 'http://localhost/dtb/wp-json/wp/v2/posts/' + idNouvelle); // modifier ici
    maRequete.onload = function () {
        console.log(maRequete)
        if (maRequete.status >= 200 && maRequete.status < 400) {
            let data = JSON.parse(maRequete.responseText);
            console.log(evt.target.dataset.checked)
            // instructions ici
            creationHTML(data, idNouvelle);  // paramètres à ajouter
        } else {
            console.log('La connexion est faite mais il y a une erreur')
        }
    }
    maRequete.onerror = function () {
        console.log("erreur de connexion");
    }
    maRequete.send()
    }

    // instructions à ajouter


///////////////////////////////////////////////////////

function creationHTML(data, idNouvelle){
    let monHtmlString = '';

        
        monHtmlString += '<h2>' + data.title.rendered + '</h2>';
        monHtmlString += data.content.rendered;
    
   //console.log("kdhvbslryt:",data, idNouvelle);
    //idNouvelle.innerHTML = monHtmlString;
    contenuNouvelle.innerHTML = monHtmlString; 
}






