        var inputElement = document.getElementById('pr-number');
        var subtotal = document.getElementById('subprice');
        var price = document.getElementById('price');
        function decreaseQuantity() {
            var currentValue = parseInt(inputElement.value);
            if (currentValue > 1) {
                inputElement.value = currentValue - 1;
            }
            subtotal = currentValue * price;
            // Bạn có thể thêm phần xử lý khác ở đây nếu cần.

            var num = inputElement.value;
            console.log('num', num);
            var subtt = document.getElementById('subprice');
                const subp = 112;
                    subtt = subp * num;
            
            document.getElementById('subtotal').innerHTML=subtt;
            document.getElementById('subtotal').style.fontWeight = 'bold, san-serif';
            document.getElementById('subtotal').style.fontFamily = 'Be Vietnam Pro';
            console.log('tong', subtt);
        }
        function increaseQuantity() {
            var currentValue = parseInt(inputElement.value);
            if (!isNaN(currentValue)) {
                inputElement.value = currentValue + 1;
            }

            //aa
            subtotal = currentValue * price;
            var num = inputElement.value;
            console.log('num', num);
            var subtt = document.getElementById('subprice');
            const subp = 112;
                    subtt = subp * num;
            document.getElementById('subtotal').innerHTML=subtt;
            document.getElementById('subtotal').style.fontWeight = 'bold, san-serif';
            document.getElementById('subtotal').style.fontFamily = 'Be Vietnam Pro';
            console.log('tong', subtt);
        }