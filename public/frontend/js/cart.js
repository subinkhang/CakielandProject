        var inputElement = document.getElementById('pr-number');
        var price = document.getElementById('pricee');
        var subtt;
        function decreaseQuantity(index) {
            const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
            var currentValue = parseInt(inputElement.value);
            if (currentValue > 1) {
                inputElement.value = currentValue - 1;
            }
            var num = inputElement.value
            const price = document.querySelector(`name="price[${index}]"`);
            const subp = parseFloat(price.textContent);
            subtt = subp * num;
        }
        
        function increaseQuantity(index) {
            const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
            var currentValue = parseInt(inputElement.value);
            if (!isNaN(currentValue)) {
                inputElement.value = currentValue + 1;
            }
            var num = inputElement.value
            const nameContent = document.querySelector('[name="price[${index}]"]').textContent;
            console.log('subp',nameContent)
            subtt = subp * num;

            console.log('sub',subp)
        }
        
        function updateSubtotal(index) {
            const inputElement = document.querySelector(`input[name="quan[${index}]"]`);
            const currentValue = parseInt(inputElement.value);
            const subp = parseFloat(products[index].price);
            const subtt = subp * currentValue;
            document.getElementById(`subtotal-${index}`).innerHTML = `<span>$${subtt.toFixed(2)}</span>`;
        }
        
/*-------------REMOVE ITEM------------*/
function deleteItem(index) {
    const itemId = `item${index}`;
    const removeItem = document.getElementById(itemId);
    removeItem.remove();
}

// /*----------------GET ITEM---------------------*/

document.addEventListener('DOMContentLoaded', (event) => {
    const products = JSON.parse(localStorage.getItem('products'));
    var table = document.getElementById('prod');
    
    for (let i = 0; i < products.length; i++) {
        var newRow = document.createElement("tr");
        newRow.id = `item${i}`;
        const subtotal = products[i].price * products[i].quantity;
        newRow.innerHTML = `
            <th scope="row"></th>
            <td class="col-2 text-center">${i + 1}</td>
            <td class="col-8">
                <div class="row pr-list-co">
                    <div class="col-3">
                        <img src="${products[i].image}" class="img-fluid">
                    </div>
                    <div class="col-9 row">
                        <h6>${products[i].name}</h6>
                        <div class="d-flex">
                            <button id="btn-minus" class="btn-minuse" type="button"
                            onclick="decreaseQuantity(${i})">-</button>
                            <span id="numb"><input type="number" 
                                id="pr-number" name="quan[${i}]" min="1" value="${products[i].quantity}"></span>
                            <button id="btn-plus" class="btn-pluss" type="button"
                            onclick="increaseQuantity(${i})">+</button>
                        </div>
                        
                        <h6 class="price" name="price[${i}]">${products[i].price}</h6>
                    </div>
                </div>
            </td>
            <td class="col-2 text-end">
                <b class="subprice">${subtotal}</b>
                <p></p>
                <p></p>
                <button class="removeitem" onclick="deleteItem(${i})">
                    <h7><i class="fa-solid fa-trash-can" style="margin-top: 20px;"></i></h7>
                </button>
            </td>
        `;
    
        table.appendChild(newRow);
    }
});



