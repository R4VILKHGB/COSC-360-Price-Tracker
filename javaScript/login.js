
const loginForm= document.getElementById("login-form");
const loginSub= document.getElementById("login-form-submit");
const loginErrMsg= document.getElementById("login-error-msg");

loginSub.addEventListener("click", (e) => {
    e.preventDefault();
    const username= loginForm.username.value;
    const password= loginForm.password.value;


    if(username== "customer" && password== "pricetracker123"){
        alert("Login successfull.");
        location.reload();
    } else {
        loginErrMsg.style.opacity= 1;
    }

    
})
