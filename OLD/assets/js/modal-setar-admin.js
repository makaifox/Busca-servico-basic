function activeModal() {
    const modalContainer = document.querySelector(".modal-container-setar-admin");
    const botaoSetarAdmin = document.querySelectorAll(".setar-adm");
    const hiddenSetarAdm = document.querySelector(".hidden-input-setar-admin");

    botaoSetarAdmin.forEach((item)=> {
       item.addEventListener("click", (e)=> {
        e.preventDefault();
        console.log(item)
        modalContainer.style.display = "flex";
        const id = e.target.id
        //const linkExcluir = item.parentNode.href
        //confirmaExcluir.href = linkExcluir
       // setarAdmValue = "10"
        hiddenSetarAdm.value = id
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
       if(el.classList.contains("modal-container-setar-admin")) {
            modalContainer.style.display = "none";
       }
    })
}

activeModal()
