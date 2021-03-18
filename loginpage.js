const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMsg = document.getElementById("login-error-msg");

loginButton.addEventListener("click", (e) => {
    e.preventDefault();
    const email = loginForm.email.value;
    const password = loginForm.password.value;

    if ((email === "carter.west193@topper.wku.edu" && password === "cwest") || (email === "emmiline.fish589@topper.wku.edu" && password === "efish") || (email == "zoe.wende805@topper.wku.edu" && password === "zwende") || (email === "emmiline.fish589@topper.wku.edu" && password === "efish") || (email == "joseph.ridgway062@topper.wku.edu" && password === "jridgway")) {
        alert("You have successfully logged in.");
        location.reload();
    } else {
        loginErrorMsg.style.opacity = 1;
    }
})
