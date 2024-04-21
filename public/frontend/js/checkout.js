const btn = document.getElementById("btn-p");
const popup = document.querySelector(".popup");
const closeBtn = document.querySelector(".closebtn");
const overlay = document.querySelector(".overlay");

// btn.addEventListener("click", (e) => {
//     e.preventDefault();
//     popup.classList.add("active");
//     overlay.classList.add("active");
// });

closeBtn.addEventListener("click", () => {
  popup.classList.remove("active");
  overlay.classList.remove("active");
});



    btn.addEventListener("click", (e) => {
        e.preventDefault();
        const select = document.querySelector(".form-select-pm");
        const bankoption = document.querySelector(".bankmethod");
        const selectoption = select.value;
    if(selectoption==="COD"){
        popup.classList.add("active");
        overlay.classList.add("active");
};

    if(selectoption==="Bank"){
        console.log("bank");
    bankoption.classList.add("active");
    overlay.classList.add("active");
    };
});



