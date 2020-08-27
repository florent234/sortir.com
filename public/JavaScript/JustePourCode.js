<script>

/*///////////// Animation du slider, y compris changement de logo et de texte /////////////////////////////////////*/


var slide1 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/2020/06/batiment.jpg",
    "CENTRE RÉGIONAL D\'INOVATION", "ET DE TRANSFERT DE TECHNOLOGIE", "EN INFORMATIQUE | ROBOTIQUE | MÉTROLOGIE", "en Nouvelle-Aquitaine",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/06/logoaccueil.php_.png", "alignnone wp-image-5126",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/06/Sans-titre.png", "alignnone wp-image-5130",
    "letters fondnoir", "letters1 fondnoir ", "letters2 fondnoir", "letters3 fondblanc" );
var slide2 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/slider3/iStock-1022887882-scaled.jpeg",
    "Au coeur de la stratégie d'entreprise :", "COMMENT BIEN INTÉGRER <span color:yellow>LE SYSTÈME D\'INFORMATION</span>", "POUR RÉPONDRE AUX OBJECTIFS COMMERCIAUX", "ET AUX EXIGENCES DE PRODUCTION ?",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/logoaccueil2.png", "alignnone wp-image2",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/plusinfo.png", "alignnone wp-image1",
    "letters fondblanc", "letters1 fondnoir gras", "letters2 fondnoir", "letters3 fondnoir");
var slide3 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/slider3/Robotique_layer2.jpeg",
    "La ROBOTIQUE en entreprise :", "COMMENT SÉCURISER ET STANDARDISER", "L\'INTÉGRATION DES ROBOTS ?", "",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/logoaccueil2.png", "alignnone wp-image21",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/plusinfo.png", "alignnone wp-image12",
    "letters fondblanc", "letters1 fondnoir", "letters2 fondnoir gras", "rien");
var slide4 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/slider3/mtrologie_layer.jpeg",
    "La MÉTROLOGIE OPTIQUE en entreprise :", "COMMENT METTRE EN PLACE", "UN SYSTÈME DE MESURES INDUSTRIELLES", "CONNECTÉ ET EFFICACE ?",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/logoaccueil2.png", "alignnone wp-image2",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/plusinfo.png", "alignnone wp-image1",
    "letters fondblanc", "letters1 fondnoir", "letters2 fondnoir gras", "letters3 fondnoir");
var slide5 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/slider3/Visamap_layer.jpeg",
    "Suivre - Gérer - Anticiper ?", "VISAMAP EST L\'OUTIL D\'AIDE", "AU PILOTAGE DE VOTRE ENTREPRISE", "Tableaux de bords, Big Data, Analyses prédictives...",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/logoaccueil2.png", "alignnone wp-image21",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/plusinfo.png", "alignnone wp-image12",
    "letters fondblanc", "letters1 fondnoir", "letters2 fondnoir gras", "letters3 fondnoir" );
var slide6 = new Array("http://localhost:8080/critt_informatique/wp-content/uploads/slider3/Ecran_connect_Layer2.jpeg",
    "Écrans interactifs et tablettes tactiles", "COMMENT ADAPTER VOS ATELIERS DE PRODUCTION", "AU TRAVAIL COLLABORATIF", "ET À LA MODIBILITÉ",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/logoaccueil2.png", "alignnone wp-image2",
    "http://localhost:8080/critt_informatique/wp-content/uploads/2020/07/plusinfo.png", "alignnone wp-image1",
    "letters fondblanc", "letters1 fondnoir", "letters2 fondnoir gras", "letters3 fondnoir" );
var slide = new Array(slide1, slide2, slide3, slide4, slide5);
var numero = 0;


function Message() {
    var msg="Message sur la ligne 1.nMessage sur la ligne 2.n...";
    console.log(msg)
    alert(msg);
}

function tafonction(){
// traitement
    setTimeout(tafonction,5000); /* rappel après 5 secondes = 2000 millisecondes */
}

tafonction(){
    numero = numero + 1;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;

    document.getElementById("slide").src = slide[numero][0];
    document.getElementById("titre1").innerHTML = slide[numero][1];
    document.getElementById("titre1").className = slide[numero][9];
    document.getElementById("titre2").innerHTML = slide[numero][2];
    document.getElementById("titre3").innerHTML = slide[numero][3];
    document.getElementById("titre4").innerHTML = slide[numero][4];
    document.getElementById("logo1").src = slide[numero][5];
    document.getElementById("logo1").className = slide[numero][6];
    document.getElementById("logo2").src = slide[numero][7];
    document.getElementById("logo2").className = slide[numero][8];
    document.getElementById("titre2").className = slide[numero][10];
    document.getElementById("titre3").className = slide[numero][11];
    document.getElementById("titre4").className = slide[numero][12];

}








/*/////////////////////////////////////fonction des boutons du slider//////////////////////////////*/

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;

    document.getElementById("slide").src = slide[numero][0];
    document.getElementById("titre1").innerHTML = slide[numero][1];
    document.getElementById("titre1").className = slide[numero][9];
    document.getElementById("titre2").innerHTML = slide[numero][2];
    document.getElementById("titre3").innerHTML = slide[numero][3];
    document.getElementById("titre4").innerHTML = slide[numero][4];
    document.getElementById("logo1").src = slide[numero][5];
    document.getElementById("logo1").className = slide[numero][6];
    document.getElementById("logo2").src = slide[numero][7];
    document.getElementById("logo2").className = slide[numero][8];
    document.getElementById("titre2").className = slide[numero][10];
    document.getElementById("titre3").className = slide[numero][11];
    document.getElementById("titre4").className = slide[numero][12];
}

/*//////////////////////////////////animation du texte de la première slide/////////////////////////////////////////*/

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.ml11 .line',
        scaleY: [0,1],
        opacity: [0.5,1],
        easing: "easeOutExpo",
        duration: 700
    })
    .add({
        targets: '.ml11 .line',
        translateX: [0, document.querySelector('.ml11 .letters').getBoundingClientRect().width + 10],
        easing: "easeOutExpo",
        duration: 700,
        delay: 100
    }).add({
    targets: '.ml11 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
}).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters1');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.ml11 .letter',
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        offset: '-=775',
        delay: (el, i) => 34 * (i+1)
    }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters2');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.ml11 .letter',
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        offset: '-=775',
        delay: (el, i) => 34 * (i+1)
    }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
});
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml11 .letters3');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w|\-|\'|\")/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
    .add({
        targets: '.ml11 .letter',
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 600,
        offset: '-=775',
        delay: (el, i) => 34 * (i+1)
    }).add({
    targets: '.ml11',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000
});

</script>