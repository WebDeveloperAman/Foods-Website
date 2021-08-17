const passowrdfield = document.querySelector(`.form .field input[type='password']`);
toggleBtn = document.querySelector(`.form .field i`);

toggleBtn.onclick = () => {
    if (passowrdfield.type == "password") {
        passowrdfield.type = "text";
        toggleBtn.classList.add("active");
    } else {
        passowrdfield.type = "password";
        toggleBtn.classList.remove("active");
    }
}