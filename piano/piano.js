const pianokeys = document.querySelectorAll(".piano-keys .key"),
volumeSlider = document.querySelector(".volume-slider input"),
keysCheckBox = document.querySelector(".keys-checkbox input");

let allkeys = [],
audio = new Audio("audio/a.wav");
const playTune = (key) =>{
    audio.src = `audio/${key}.wav`;
    audio.play();
    

    const clickedKey = document.querySelector(`[data-key="${key}"]`);
    clickedKey.classList.add('active');
    setTimeout(() => {
        clickedKey.classList.remove('active');
    }, 150);
}

pianokeys.forEach(key => {
    allkeys.push(key.dataset.key);
    key.addEventListener("click", () => playTune(key.dataset.key));
});

const handlvolume = (e) => {
    audio.volume = e.target.value;
}

const pressedKey = (e)=>{
    if(allkeys.includes(e.key)) playTune(e.key);
}

const showHidekeys = () =>{
    pianokeys.forEach(key => key.classList.toggle("hide"));
}

volumeSlider.addEventListener("input", handlvolume);
keysCheckBox.addEventListener("click", showHidekeys);
document.addEventListener("keydown", pressedKey);