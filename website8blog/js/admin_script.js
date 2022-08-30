let header = document.querySelector('.header'),
menuu = document.querySelector('#menu-btn');

menuu.onclick = () => {
    header.classList.toggle('active');
}
window.onscroll = () => {
    header.classList.toggle('active');
}