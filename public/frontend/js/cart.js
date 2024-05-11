        var inputElement = document.getElementById('pr-number');
        var price = document.getElementById('pricee');
        var subtt;
        function decreaseQuantity() {
            var currentValue = parseInt(inputElement.value);
            if (currentValue > 1) {
                inputElement.value = currentValue - 1;
            }
            //Addition
            var num = inputElement.value;
            console.log('num', num);
                const subp = 112.00;
                subtt = subp * num;
            document.getElementById('subtotal').innerHTML = `<span>$${subtt.toFixed(2)}</span>`;
            console.log('tong', subtt);
            return subtt;
        }
        function increaseQuantity() {
            var currentValue = parseInt(inputElement.value);
            if (!isNaN(currentValue)) {
                inputElement.value = currentValue + 1;
            }
            var num = inputElement.value;
            console.log('num', num);
                const subp = 112.00;
                subtt = subp * num;
            document.getElementById('subtotal').innerHTML = `<span>$${subtt.toFixed(2)}</span>`;
            console.log('tong', subtt);
            return subtt;
        }
/*-------------REMOVE ITEM------------*/
        function rmitem1(){
            const removeitem1 = document.getElementById("item1");
            removeitem1.remove();
        }
        function rmitem2(){
            const removeitem2 = document.getElementById("item2");
            removeitem2.remove();
        }
/*------TOTAL------------*/
