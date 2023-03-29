let username = document.getElementById("username");
let email = document.getElementById("email");
let textarea = document.getElementById("textarea");
let submit = document.getElementById("submit");

textarea.addEventListener("keyup", (e) => {
    let value = e.currentTarget.value;
    if (value === "") {
        submit.disabled = true;
    } else {
        submit.disabled = false;
    }
});