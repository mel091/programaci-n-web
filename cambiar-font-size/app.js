const input = document.querySelector('#texto');
const displayText = document.querySelector('#display-text');
const btnAumentar = document.querySelector('#btn-aumentar');
const btnDisminuir = document.querySelector('#btn-disminuir');

let fontSize = 20;
displayText.style.fontSize = `${fontSize}px`;

input.addEventListener('input', () => {
    displayText.textContent = input.value;
});

btnAumentar.addEventListener('click', () => {
    if(fontSize < 45){
        fontSize += 2;
        displayText.style.fontSize = `${fontSize}px`;
    }
});

btnDisminuir.addEventListener('click', () => {
    if(fontSize > 17){
        fontSize -= 2;
        displayText.style.fontSize = `${fontSize}px`;
    }
});
