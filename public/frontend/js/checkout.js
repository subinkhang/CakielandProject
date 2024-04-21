const btn = document.getElementById("btn-p");
const popup = document.querySelector(".popup");
const closeBtn = document.querySelector(".closebtn");

btn.addEventListener("click", () => {
  popup.classList.add("active");
});

closeBtn.addEventListener("click", () => {
  popup.classList.remove("active");
});
