let searchForm = document.querySelector('.header .search-form'),
navbar = document.querySelector('.header .navbar'),
slides = document.querySelectorAll('.home .slide');

let index = 0;

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
}
document.querySelector('#menu-btn').onclick = ()=>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
}
window.onscroll = () =>{
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
}

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}