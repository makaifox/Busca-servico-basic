function activeModal() {
    const modalContainer = document.querySelector(".modal-container");
    document.querySelector(".abrir-formulario").addEventListener("click", (e)=> {
        e.preventDefault();
        modalContainer.style.display = "flex";
    });
    closeModal(modalContainer)
}

function closeModal(modalContainer) {
    document.addEventListener("click", (e)=> {
       const el = e.target;
       if(el.classList.contains("material-icons")) {
        modalContainer.style.display = "none";
       }
       if(el.classList.contains("modal-container")) {
            modalContainer.style.display = "none";
       }
    })
}
console.log("teste")
activeModal()



