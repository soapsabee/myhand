
$(document).ready(function(){
 
    $('#keyword').keyup(function(){
        $("#showori").remove();
        $("#showup").show();
        var text = $(this).val();
        $.ajax({
            type: 'GET',
            url: '../views/fetch.php',
            data:{txt:text},
            success: function(data){
                $("#showup").html(data);
                console.log(data);
            }


        });

    });


});