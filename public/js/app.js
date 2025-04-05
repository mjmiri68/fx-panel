const menuMobile = document.querySelector("#menu-mobile");
const hamburguer = document.querySelector(".btn-mobile");
menuMobile.classList.add("hidden");
hamburguer.addEventListener("click", () => {
  menuMobile.classList.toggle("hidden");
});
