$(document).ready(function() {
    $('#upload_single_bt').click(function (event) {
        // var data = new FormData(this);
        var inputFile = $('#file');
        var fileToUpload = inputFile[0].files;
        if (fileToUpload.length > 0) {
            // alert(fileToUpload.length);
            var formData = new FormData();
            for (var i = 0; i < fileToUpload.length; i++) {
                var file = fileToUpload[i];
                formData.append('file[]', file, file.name);
            }
            $.ajax({
                url: '?mod=images&action=add',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(data) {
                    $("#show_list_file").html(data.result);
                    $("#imageId").val(data.id);
//console.log(data);
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        }
        //alert('ok');
        return false;
    });
});