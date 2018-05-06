$(function(){

    
 
    $("#clickup6").click(function(){
        $("#picfile6").click();    
    });
    $("#clickup7").click(function(){
        $("#picfile7").click();    
    });
    $("#clickup8").click(function(){
        $("#picfile8").click();    
    });
    $("#clickup9").click(function(){
        $("#picfile9").click();    
    });
       
  
    function previewImage1(input){
        if(input.files&&input.files[0])
        var reader = new FileReader();
        reader.onload = function (e){
            e.target.result
            $('#img1').remove();
            $('#clickup1').css("background-image",'url('+e.target.result+')');
            $('#remove1').show();

        }
        reader.readAsDataURL(input.files[0]);
    }

    $("#picfile1").change(function () {
        previewImage1(this);
    });

    $('#remove1').click(function(){
        $('#picfile1').val("");
        $('#clickup1').css("background-image",'url(image/dfpic.png)');
        $('#remove1').hide();
    });




});