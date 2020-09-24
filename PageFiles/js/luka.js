    
var $burger = document.getElementById('cambia')
var $toggleM = document.getElementById('escucha')
var $action = document.getElementById('action')
var $noScroll = document.getElementById('body')
var headerBox = document.querySelector("header")
var header = document.getElementById('header') 

function ico(){
    $toggleM.classList.toggle('icoanimate')
}
function noScroll(){
    $noScroll.classList.toggle('no-scroll')
}
function menu(){
    $burger.classList.toggle('open');
    headerBox.classList.remove('fuckYou');
    header.classList.toggle('logoOff')
    
};
function toAction(){
    $action.classList.toggle('openAction')
}

$toggleM.addEventListener('click', ico)
$toggleM.addEventListener('click', noScroll)
$toggleM.addEventListener('click', menu);
$toggleM.addEventListener('click', toAction);

/*header scroll animation */
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("fuckYou",window.scrollY >0)
})
