const user = document.getElementById('user');
const email = document.getElementById('mail');
const psw = document.getElementById('psw');
const psw1 = document.getElementById('psw1');
const btnGuardar = document.getElementById('btnGuardar');
const error = document.getElementById('error-msg')

const campoVacio = (e) => {
    e.preventDefault();
    const empty = [];
    
    if (user.value === ''){
        empty.push("username");
        user.classList.add("input-error");
    } else {
        user.classList.remove("input-error");
    }

    if (email.value === ''){
        empty.push("email");
        email.classList.add("input-error");
    } else {
        email.classList.remove("input-error");
    }

    if (psw.value === ''){
        empty.push("password");
        psw.classList.add("input-error");
    } else {
        psw.classList.remove("input-error");
    }

    if (psw1.value === ''){
        empty.push("confirm password");
        psw1.classList.add("input-error");
    } else {
        psw1.classList.remove("input-error");
    }

    if(empty.length > 0){
        error.style.display = "block";
        error.textContent = `Los siguientes campos son obligatorios: ${empty.join(', ')}`;
    }else{
        error.style.display = "none";
        verificarPsw();
    }
}

const verificarPsw = () => {
    if((psw.value !== '' && psw1.value !== '') && 
    (psw.value.length >= 8 && psw1.value.length >= 8)){
        if(psw.value !== psw1.value){
            psw.classList.add("input-error");
            psw1.classList.add("input-error");
            alert('Las contraseñas no coinciden')
        }
    }else{
        psw.classList.add("input-error");
        alert('La contraseña debe tener al menos 8 caracteres')
    }
}

btnGuardar.addEventListener('click', campoVacio);



const inputs = [user, email, psw, psw1];

inputs.forEach(input => {
    input.addEventListener('input', () => {
        if (input.value !== '') {
            input.classList.remove("input-error"); 
        }
        error.style.display = "none"; 
    });
});