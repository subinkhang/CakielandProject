// $(document).ready(function() {
//     $('#status-filter').on('change', function() {
//         var selectedStatus = $(this).val();
//         filterOrders(selectedStatus);
//     });

//     function filterOrders(status) {
//         $('.product_detail_3').each(function() {
//             var orderStatus = $(this).data('status');
//             if (status === 'all' || orderStatus == status) {
//                 $(this).show();
//             } else {
//                 $(this).hide();
//             }
//         });
//     }
// });


$(document).ready(function() {
    $('#status').on('change', function() {
        var selectedStatus = $(this).val();
        filterOrders(selectedStatus);
    });

    function filterOrders(status) {
        $('.product_detail_3').each(function() {
            var orderStatus = $(this).data('status');
            if (status === 'all' || orderStatus == status) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    }
});

