let invalid = true;
let score = 0;

//checks for valid emails
function validateEmail() {
    let emailEntry = document.getElementById("email");

    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   
    if (!mailformat.test(emailEntry.value)) {
        document.getElementById("mailMsg").style.display="flex";
        score++;
    }else{
        document.getElementById("mailMsg").style.display = "none";
        score--;
    }
}

//checks password has lowercase, uppercase, numbers and is 8 characters long
function validatePassword(){
    let password = document.getElementById("password").value;

    if(!password.match(/[a-z]/g)){
        document.getElementById("pwdlc").style.display="flex";
        score++;
    }else{
        document.getElementById("pwdlc").style.display = "none";
        score--;
    }
    if(!password.match(/[A-Z]/g)){
        document.getElementById("pwduc").style.display="flex";
        score++;
    }else{
        document.getElementById("pwduc").style.display = "none";
        score--;
    }
    if(!password.match(/[0-9]/g)){
        document.getElementById("pwdnum").style.display="flex";
        score++;
    }else{
        document.getElementById("pwdnum").style.display = "none";
        score--;
    }
    console.log(password.length);
    if(!(password.length >= 8)){
        document.getElementById("pwd8").style.display="flex";
        score++;
    }else{
        document.getElementById("pwd8").style.display = "none";
        score--;
    }
}

//Validates password confirmation 
function passwordConfirmation(){
    let password = document.getElementById("password").value;
    let conpassword = document.getElementById("conpassword").value;

    if (conpassword != password){
        document.getElementById("pwdMsg").style.display = "flex";
        score++;
    }else{
        document.getElementById("pwdMsg").style.display = "none";
        score--;
    }
}

