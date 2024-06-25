let language = document.querySelector(".language");
let langMenu = document.querySelector(".en");
let menubtn = document.querySelector(".menu4dropdown");
let dropdownMenu = document.querySelector(".dropdown");

menubtn.onclick = function(){
    dropdownMenu.classList.toggle('open');
}
            
language.onclick = function(){
    langMenu.classList.toggle('open');
}