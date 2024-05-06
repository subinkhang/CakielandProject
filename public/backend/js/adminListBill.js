function addToCart(element) {
    // Hiển thị toast message
    var toast = document.getElementById("toast");
    if (!toast) {
        toast = document.createElement("div");
        toast.id = "toast";
        toast.className = "toast";
        document.body.appendChild(toast);
    }
    toast.innerText = "Update status successfully!";
    toast.className = "toast show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);

    var selectedOption = element.options[element.selectedIndex];

    // Change the background color of the select element to match the selected option
    element.style.backgroundColor = selectedOption.style.backgroundColor;
}

