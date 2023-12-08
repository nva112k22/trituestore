$(document).ready(function () {
    $(".num-order").change(function () {
        var id = $(this).attr('data-id');
        var qty = $(this).val();
        var data = {id: id, qty: qty};
//        console.log(data);
        $.ajax({
            url: '?mod=cart&action=update_ajax', //Trang xử lý, mặc định trang hiện tại
            method: 'POST', // POST hoặc Get, mặc định Get
            data: data, //Dữ liệu truyền lên Server
            dataType: 'json', //html, text, script hoặc json
            success: function (data) {
//                console.log(data);
                  $("#sub-total-"+id).text(data.sub_total);
                  $("#total-price span").text(data.total);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr, status);
                alert(thrownError);
            }
        });
    });
});
