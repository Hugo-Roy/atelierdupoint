let modal = document.getElementById('myModal');

let modalImg = document.getElementById('img01');

document.addEventListener('DOMContentLoaded', function(){
    for(let img of document.getElementsByClassName('gallery__container__item__image')){
        img.addEventListener('click', show)
    }
})

function show() {
    modal.style.display = "block";
    modalImg.srcset = this.srcset;
}

let span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    modal.style.display = "none";
    modalImg.srcset = "";
}