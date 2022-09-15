let sideBar = document.querySelector('.container .side-bar'),
menuu = document.querySelector('#menu-btn'),
video = document.querySelector('.container .video-container video'),
videolinks = document.querySelectorAll('.container .side-bar .list li');

menuu.onclick = () =>{
    sideBar.classList.toggle('active');
}
videolinks.forEach(link =>{
    link.onclick = () =>{
        let src = link.getAttribute('data-src');
        video.src = src;
        sideBar.classList.remove('active');
        videolinks.forEach(remove => {
            remove.classList.remove('active');
        });
        link.classList.add('active');
    }
});