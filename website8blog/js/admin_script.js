let header = document.querySelector('.header'),
menuu = document.querySelector('#menu-btn');

menuu.onclick = () => {
    header.classList.toggle('active');
}
window.onscroll = () => {
    header.classList.toggle('active');
}
document.querySelectorAll('.posts-content').forEach(content => {
    if(content.innerHTML.length > 100) content.innerHTML = content.innerHTML.slice(0, 100);
});