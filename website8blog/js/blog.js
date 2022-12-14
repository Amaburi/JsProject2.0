let navbar = document.querySelector('.header .flex .navbar'),
menuu = document.querySelector('#menu-btn'),
profilee = document.querySelector('.header .flex .profile'),
userbtn = document.querySelector('#user-btn'),
search = document.querySelector('.header .flex .search-form'),
searchbtn = document.querySelector('#search-btn'),
postgrid = document.querySelectorAll('.posts-grid .box-container .box .content');

menuu.onclick = () =>{
    navbar.classList.toggle('active');
    profilee.classList.remove('active');
    search.classList.remove('active');
}

userbtn.onclick = () =>{
    profilee.classList.toggle('active');
    navbar.classList.remove('active');
    search.classList.remove('active');
}

searchbtn.onclick = () =>{
    search.classList.toggle('active');
    navbar.classList.remove('active');
    profilee.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    profilee.classList.remove('active');
    search.classList.remove('active');
}
postgrid.forEach(content =>{
    if(content.innerHTML.length > 150) content.innerHTML = content.innerHTML.slice(0,150);
})