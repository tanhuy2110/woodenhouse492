
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/* Create new Category Item */
 var form  = $('#upload_form');
 form.submit(function(e){
     e.preventDefault();
     var formData = new FormData(this);
     var form_action = form.attr('action');
     $.ajax({
         url: form_action,
         type: 'POST',
         data:formData,
         contentType: false,
         processData: false,
    }).done(function (result) {
        console.log(result);
        if($.isEmptyObject(result.error)){
            $(".modal").modal('hide');
            location.reload();
        }
        else {
            printErrorMsg(result.error);
        }
    })
 })

/* Edit Item */
$("body").on("click", ".editMenu", function () {
    var id = $(this).parent("td").data('id');
    var nameFood = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
    var priceFood = $(this).parent("td").prev("td").prev("td").prev("td").text();
    var descriptionFood = $(this).parent("td").prev("td").prev("td").text();
    $("#editMenuModal").find("input[name='nameFood']").val(nameFood);
    $("#editMenuModal").find("input[name='priceFood']").val(priceFood);
    $("#editMenuModal").find("textarea[name='descriptionFood']").val(descriptionFood);
    $("#editMenuModal").find("form").attr("action", 'menu' + '/' + id);

})

/* Update new Category Item */
$(".edit-submit").click(function(e){
    e.preventDefault();
    var id = $(this).parent("td").data('id');
    var form_action = $("#editMenuModal").find("form").attr("action");
    var name = $('#editMenuModal').find("input[name = 'nameFood']").val();
    var price = $('#editMenuModal').find("input[name = 'priceFood']").val();
    var description = $('#editMenuModal').find("textarea[name = 'descriptionFood']").val();
    $.ajax({
        dataType: 'JSON',
        type: 'PUT',
        url: form_action,
        data: {
            name: name,
            price: price,
            description: description
        }
    }).done(function (result) {
        if($.isEmptyObject(result.error)){
            $(".modal").modal('hide');
            location.reload();
        }
        else {
            printErrorMsg(result.error);
        }
    })
});

/* Remove Item */

$("body").on("click", ".removeMenu", function(){

    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    swal ({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then(function(willDelete) {
        if(willDelete){
            $.ajax({
                dataType: 'json',
                type:'delete',
                url: 'menu' + '/' + id,
                success: function(data) {
                    swal({
                        title: "Deleted!",
                        text: "Your post has been deleted.",
                        type: "success"
                    });
                }
            });
            location.reload();
        } else {
            swal("Your image file is safe!");
        }
    });
});

/* Error Validate*/
function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}