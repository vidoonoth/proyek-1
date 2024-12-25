const sidebar=document.getElementById('sidebar');
const side = document.querySelector(".side");
// const close = document.querySelector(".close");

sidebar.addEventListener("click", () => {
  side.classList.toggle("side-open");
});
