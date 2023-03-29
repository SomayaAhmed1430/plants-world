let formLogOut = document.querySelector(".formLogOut");
let accountName = document.querySelector(".variosName");
let arrow = document.querySelector(".arrow");

accountName.onclick = function() {
    accountName.classList.toggle("ActiveAccountName")
    formLogOut.classList.toggle("ActiveformLogOut");
    arrow.classList.toggle("ActiveArrow");
}