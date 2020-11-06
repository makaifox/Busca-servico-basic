function activeModal() {
    const modalContainer = document.querySelector(".modal-container-admin");
    const botaoExcluir = document.querySelectorAll(".botao-excluir");
    const confirmaExcluir = document.querySelector(".link-img-modal");

    botaoExcluir.forEach((item)=> {
       item.addEventListener("click", (e)=> {
        e.preventDefault();
        const id = e.target.id
        const linkExcluir = item.parentNode.href
        confirmaExcluir.href = linkExcluir
        modalContainer.style.display = "flex";
        console.log(confirmaExcluir)
        //console.log(linkExcluir)
       })
    })
       
    closeModal(modalContainer)
}

function closeModal(modalContainer) {
    document.addEventListener("click", (e)=> {
       const el = e.target;
       if(el.classList.contains("material-icons")) {
        modalContainer.style.display = "none";
       }
       if(el.classList.contains("modal-container-admin")) {
            modalContainer.style.display = "none";
       }
    })
}

activeModal()
