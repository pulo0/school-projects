function showFunc() {
    let inputPass = document.getElementById("password");
    if (inputPass.type === "password") inputPass.type = "text";
    else inputPass.type = "password";
}