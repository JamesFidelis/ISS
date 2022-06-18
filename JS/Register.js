// function formValidations() {
//     var mails = document.schooluser.mail;
//     var passs = document.schooluser.pass;
//
//     if (ValidateEmail(mails)) {
//         if (ValidatePassword(passs)) {
//         }
//     }
//     return false;
// }
//
// function ValidateEmail(mails) {
//     var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
//     if (mails.value.match(mailformat)) {
//         return true;
//     } else {
//         alert("You have entered an invalid email address!");
//         mails.focus();
//         return false;
//     }
// }
// function ValidatePassword(passs) {
//     var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
//         if (passs.value.match(passformat)){
//             alert('Form Succesfully Submitted');
//             // window.location.reload()
//             return true;
//         }
//         else {
//             alert("Password should be atleast 8 characters long, contain both aplhanumeric characters and special characters");
//             passs.focus();
//             return false;
//         }
//
// }


function showpass() {
    var x = document.getElementById("password");

    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
function loginpass() {
    var y = document.getElementById("pasw");
    if (y.type === "password") {
        y.type = "text";
    } else {
        y.type = "password";
    }

}



var passs = document.schooluser.pass;
function ValidatePasswords() {
    var passformat = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
    if (passs.value.match(passformat)) {
        alert('Form Succesfully Submitted');
         window.location.reload()
        return true;
    } else {
        alert("Password should be atleast 8 characters long, contain both aplhanumeric characters and special characters");
        passs.focus();
        return false;
    }
}

var modal = document.getElementById('popup');

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}