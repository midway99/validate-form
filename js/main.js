function Validate() {
    let userName = document.getElementById("userName");
    let userPassword = document.getElementById("userAge");
    event.preventDefault()
    if (!userName.value) {
        user.style.border = "2px solid red";
        return false;
    }
    if (!userPassword.value) {
        user.style.border = "2px solid red";
        return false;
    }

    if (!userPassword.value) {
        user.style.border = "2px solid red";
        return false;
    }

    if (age < 18 && age > 100) {
        user.style.border = "2px solid red";
        return false;
    }

    if ((userName !== "" && name.length <= 15)) {
        user.style.border = "2px solid green";
        user.text('name ok');
    }
    if (age >= 18 && age <= 100) {
        user.style.border = "2px solid green";
    }
    return true;

}