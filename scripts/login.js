const loginForm = document.getElementById("login-form");
const loginSubmit = document.getElementById("login-submit-button");
const loginErrorMsg = document.getElementById("login-error-msg");
const createAccountButton = document.getElementById("signupbtn");

loginSubmit.addEventListener("click", (e) => {
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username.trim() === "" || password.trim() === "") {
        alert("Please enter username and password.");
    } else {
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "login_processing.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                const response = xhr.responseText;
                if (response === "success") {
                    window.location.href = "home.php";
                } else {
                    loginErrorMsg.textContent = "Invalid username or password.";
                }
            }
        };
        xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
    }
});

createAccountButton.addEventListener("click", (e) => {
    window.location.href = "registration.php";
});

