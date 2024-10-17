function validar(){
    const mail = document.querySelector('#mail');
    const psw = document.querySelector('#psw');
    
    const mailValue = mail.value.trim();
    const pswValue = psw.value.trim();

    if(mail.value === "" || psw.value === ""){
        alert("Campos vacíos");
        return;
       
    }else if(mailValue === "user@mail.com" && pswValue === "12345678"){
        alert("Bienvenido usuario");
    }else{
        alert("Email o contraseña incorrectos");
    }
}


