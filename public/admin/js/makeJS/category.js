var page = 1;
var url = "<?php echo route('category.index')?>";


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/* Add new Item table row*/
function manageRow(data) {
    var	rows = '';
    rows = rows + '<tr>';
    rows = rows + '<td class="count"></td>';
    rows = rows + '<td>'+data.name+'</td>';
    rows = rows + '<td>'+data.created_at+'</td>';
    rows = rows + '<td data-id = "'+ data.id +'">';
    rows = rows + '<button class="btn btn-icon btn-neutral btn-icon-mini margin-0 editCategory" data-toggle="modal" data-target="#editCategory"><i class="zmdi zmdi-edit"></i></button>';
    rows = rows + '<button class="btn btn-icon btn-neutral btn-icon-mini margin-0 removeCategory" title="Delete"><i class="zmdi zmdi-delete"></i></button>';
    rows = rows + '</td>';
    rows = rows + '</tr>';
    return rows;
}
function mapRender(data) {
    result = '';
    data.map((item)=>{
        result += manageRow(item);
});
    return result;
}

/* Show All Category*/
$.ajax({
    type: 'GET',
    url: '/admin/category',
}).done(function (result) {
    $("tbody").html(mapRender(result));
})

/* Create new Category Item */
$(".creat-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#addCategory").find("form").attr("action");
    var name = $('#addCategory').find("input[name = 'nameCategory']").val();

    $.ajax({
        dataType: 'JSON',
        type: 'POST',
        url: form_action,
        data: {
            name: name,
        }
    }).done(function (result) {
        console.log(result);
        if($.isEmptyObject(result.error)){
            $(".modal").modal('hide');
            $("tbody").append(manageRow(result));
        }
        else {
            printErrorMsg(result.error);
        }
    })
});

/* Edit Item */
$("body").on("click", ".editCategory", function () {
    var id = $(this).parent("td").data('id');
    var name = $(this).parent("td").prev("td").prev("td").text();
    $("#editCategory").find("input[name='nameCategory']").val(name);
    $("#editCategory").find("form").attr("action", 'category' + '/' + id);

})

/* Update new Category Item */
$(".edit-submit").click(function(e){
    e.preventDefault();
    var id = $(this).parent("td").data('id');
    var form_action = $("#editCategory").find("form").attr("action");
    var name = $('#editCategory').find("input[name = 'nameCategory']").val();
    $.ajax({
        dataType: 'JSON',
        type: 'PUT',
        url: form_action,
        data: {
            name: name,
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

$("body").on("click", ".removeCategory", function(){

    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
    $.ajax({
        dataType: 'json',
        type:'delete',
        url: 'category' + '/' + id,
    }).done(function(data){
        c_obj.remove();
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
