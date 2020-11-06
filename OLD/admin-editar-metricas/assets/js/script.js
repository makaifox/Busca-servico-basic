function finalizarRequerimento() {
    const checkboxRequerimento = document.querySelector(".checkbox-requerimento");
    checkboxRequerimento.addEventListener("click", (e)=> {
        e.preventDefault();

        checkboxRequerimento.style.display = "none";
    })
}

//finalizarRequerimento();