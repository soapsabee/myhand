$(function(){

    
    
    $("#clickup1").click(function(){
        $("#picfile1").click();    
    });
    $("#clickup2").click(function(){
        $("#picfile2").click();    
    });
    $("#clickup3").click(function(){
        $("#picfile3").click();    
    });
    $("#clickup4").click(function(){
        $("#picfile4").click();    
    });
    $("#clickup5").click(function(){
        $("#picfile5").click();    
    });
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
       
  
    function previewImage(input,clickup,remove){
        if(input.files&&input.files[0])
        var reader = new FileReader();
        reader.onload = function (e){
            e.target.result
            
            $(clickup).css("background-image",'url('+e.target.result+')');
            $(remove).show();

        }
        reader.readAsDataURL(input.files[0]);
    }

    $("#picfile1").change(function () {
        var clickup = '#clickup1';
        var remove = '#remove1';
        previewImage(this,clickup,remove);

    });

    $("#picfile2").change(function () {
        var clickup = '#clickup2';
        var remove = '#remove2';
        previewImage(this,clickup,remove);
    });

    $("#picfile3").change(function () {
        var clickup = '#clickup3';
        var remove = '#remove3';
        previewImage(this,clickup,remove);
    });

    $("#picfile4").change(function () {
        var clickup = '#clickup4';
        var remove = '#remove4';
        previewImage(this,clickup,remove);
    });

    $("#picfile5").change(function () {
        var clickup = '#clickup5';
        var remove = '#remove5';
        previewImage(this,clickup,remove);
    });

    $("#picfile6").change(function () {
        var clickup = '#clickup6';
        var remove = '#remove6';
        previewImage(this,clickup,remove);
    });
    $("#picfile7").change(function () {
        var clickup = '#clickup7';
        var remove = '#remove7';
        previewImage(this,clickup,remove);
    });
    $("#picfile8").change(function () {
        var clickup = '#clickup8';
        var remove = '#remove8';
        previewImage(this,clickup,remove);
    });
    $("#picfile9").change(function () {
        var clickup = '#clickup9';
        var remove = '#remove9';
        previewImage(this,clickup,remove);
    });


    $('#remove1').click(function(){
        $('#picfile1').val("");
        $('#clickup1').css("background-image",'url(image/dfpic.png)');
        $('#remove1').hide();
    });


   

    $('#remove2').click(function(){
        $('#picfile2').val("");
        $('#clickup2').css("background-image",'url(image/dfpic.png)');
        $('#remove2').hide();
    });


    
    $('#remove3').click(function(){
        $('#picfile3').val("");
        $('#clickup3').css("background-image",'url(image/dfpic.png)');
        $('#remove3').hide();
    });


    $('#remove4').click(function(){
        $('#picfile4').val("");
        $('#clickup4').css("background-image",'url(image/dfpic.png)');
        $('#remove4').hide();
    });

 

    $('#remove5').click(function(){
        $('#picfile5').val("");
        $('#clickup5').css("background-image",'url(image/dfpic.png)');
        $('#remove5').hide();
    });

  

    $('#remove6').click(function(){
        $('#picfile6').val("");
        $('#clickup6').css("background-image",'url(image/dfpic.png)');
        $('#remove6').hide();
    });

    $('#remove7').click(function(){
        $('#picfile7').val("");
        $('#clickup7').css("background-image",'url(image/dfpic.png)');
        $('#remove7').hide();
    });

    $('#remove8').click(function(){
        $('#picfile8').val("");
        $('#clickup8').css("background-image",'url(image/dfpic.png)');
        $('#remove8').hide();
    });

    $('#remove9').click(function(){
        $('#picfile9').val("");
        $('#clickup9').css("background-image",'url(image/dfpic.png)');
        $('#remove9').hide();
    });
  

});