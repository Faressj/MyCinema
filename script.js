window.onload = () => {
    var genre = document.querySelector(".btn-1");
    var submit = document.querySelector(".submit");
    var p = document.querySelector("p");
    var hr = document.querySelector("hr");
    p.style.display = "display: none"
    genre.addEventListener("change", ()=>{
        genre[0].innerHTML = "Aucun";
    })


}