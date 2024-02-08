
const loginForm= document.getElementById("login-form");
const loginSubmit= document.getElementById("login-submit-button");
const loginErrorMsg= document.getElementById("login-error-msg");
const createAccountButton= document.getElementById("create-account-button");

loginSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    const username= loginForm.username.value;
    const password= loginForm.password.value;

    if(username== "customer" && password== "customerpassword"){
        alert("Login successfull.");
        location.reload();
    } else {
        loginErrorMsg.style.opacity= 1;
    }

})

createAccountButton.addEventListener("click", (e) => {
    e.preventDefault();
    //...
})
