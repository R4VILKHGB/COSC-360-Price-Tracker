document.getElementById("login-submit-button").addEventListener("click", function (event) {
    event.preventDefault();
    const form = document.getElementById("loginForm");
    const username = form.username.value.trim();
    const password = form.password.value.trim();
    let isValid = true;

    document.getElementById("usernameError").textContent = "";
    document.getElementById("passwordError").textContent = "";

    if (username === "") {
        document.getElementById("usernameError").textContent = "Please enter username or email.";
        isValid = false;
    }

    if (password === "") {
        document.getElementById("passwordError").textContent = "Please enter password.";
        isValid = false;
    }

    if (isValid) {
        form.submit();
    }
});

