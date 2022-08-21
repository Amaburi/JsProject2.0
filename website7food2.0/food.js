let navbar = document.querySelector('.header .flex .navbar'),
menubtn = document.querySelector('#menu-btn'),
profile = document.querySelector('.header .flex .profile'),
userbtn = document.querySelector('#user-btn');

menubtn.onclick = () =>{
    navbar.classList.toggle('active');
    profile.classList.remove('active');
}
userbtn.onclick = () =>{
    profile.classList.toggle('active');
    navbar.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    profile.classList.remove('active');
}

document.querySelectorAll('input[type="number"]').forEach(input =>{
    input.oninput = () =>{
        if(input.value.length > input.maxLength) input.value = input.value.slice
        (0, input.maxLength);
    }
});