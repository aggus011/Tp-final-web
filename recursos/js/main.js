const logoBlanco = document.getElementById("logoBlanco")
const tituloLogin = document.querySelector(".text-login h2")
const parrafoLogin = document.querySelector(".text-login p")
const nombreUsuario = document.getElementById("nombre")
const password = document.getElementById("password")
const formLogin = document.getElementById("formLogin")
const submit = document.getElementById("submit")
const msjNombreUsuario = document.getElementById("msjNombreUsuario")
const msjPassword = document.getElementById("msjPassword")
const validateForm = {
    name: false,
    password: false
}
const mensajesError = {
    msjNombre: "El nombre de usuario invalido",
    msjPassword: "El password es invalido"
}
const validarPassword = (password) => {
    let retorno = false
    const passwordRegex = /(?=(.*[0-9]))(?=.*[\!@#$%^&*()\\[\]{}\-_+=~`|:'<>,./?])(?=.*[a-z])(?=(.*[A-Z]))(?=(.*)).{8,}/
    if (passwordRegex.test(password)) retorno = true
    return retorno
}

const validarUsername = (username) => {
    let retorno = false
    const usernameRegex = /[A-Za-z0-9_\-]{3,16}/
    if (usernameRegex.test(username))
        retorno = true
    return retorno
}

const recorreValidateForm = (json) => {
    const valuesValidateForm = Object.values(json)
    const indexValidateForm = valuesValidateForm.findIndex(value => value == false)
    return indexValidateForm
}

const formValido = () => {
    if (recorreValidateForm(validateForm) == -1) {
        submit.removeAttribute("disabled")
        formLogin.submit()
    } else {
        submit.setAttribute("disabled", true)
    }
}

formLogin.addEventListener("submit", (e) => {
    e.preventDefault()
    formValido()
})
nombreUsuario.addEventListener("change", (e) => {
    const valNombreUsuario = e.target.value
    if (valNombreUsuario.trim().length > 0 && validarUsername(valNombreUsuario)) {
        validateForm.name = true
        msjNombreUsuario.textContent = ""
    } else msjNombreUsuario.textContent = mensajesError.msjNombre
})
nombreUsuario.addEventListener("keyup", (e) => {
    const valNombreUsuario = e.target.value
    if (valNombreUsuario.trim().length > 0 && validarUsername(valNombreUsuario)) {
        validateForm.name = true
        msjNombreUsuario.textContent = ""
    } else msjNombreUsuario.textContent = mensajesError.msjNombre
})
password.addEventListener("change", (e) => {
    const valPassword = e.target.value
    if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
        validateForm.password = true
        msjPassword.textContent = ""
    } else msjPassword.textContent = mensajesError.msjPassword
})
password.addEventListener("keyup", (e) => {
    const valPassword = e.target.value
    if (valPassword.trim().length > 0 && validarPassword(valPassword)) {
        validateForm.password = true
        msjPassword.textContent = ""
    } else msjPassword.textContent = mensajesError.msjPassword
})

addEventListener("load", () => {
    logoBlanco.classList.add("logoBlanco-focus-in")
    setTimeout(() => {
        tituloLogin.classList.add("text-login-enfasis")
        parrafoLogin.classList.add("text-login-enfasis")
    }, 1500)
})