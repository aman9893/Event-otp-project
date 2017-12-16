
<?php include 'header.php';?>


<div class="container col-md-4">

<form  id="form1" method=""  enctype="multipart/form-data" class="form-horizontal"> 
   
<table class="table table-bordered table-responsive ">

<h1> login here </h1>


   



     <td><label class="control-label">Mobile number</label></td>
    <td><input class="form-control" type="text" name="Phonetwo"id="Phonetwo" placeholder="Phone No."  /></td>



<tr>
   <td >
       <!-- <input type="button" name="submit" class="btn btn-default" value='submit' id='btn_submit'> -->
       <!--<input type="button" name="submit_name" class="btn btn-default" id="btn_name" value="Preview Theam" onclick="submit_by_name()"
       data-toggle="modal" data-target="#myModal"/>-->
          <input type="button" name="submit" class="btn btn-default"  value='Login ' id='btn_submit'>
    
         <!-- <input type="button"  class="btn btn-default" value='PREVIEW' onclick="get_val2();"/>-->

        


   </td>
   </tr>
   </table>
    <div id='otp_div' style='display:none'>
    ENTER OTP <input type='text' id='mobile_otp' name='mobile_otp' value=''>
    <input type='submit' id='otp_varification' value='submit' onclick="get_val2();" >

    <br><br> <br><br><br><br>
  

</div>
</form>

</div>




<?php include 'footer.php';?>




<script>

$(document).ready(function(e) {
   $("#form1").on('submit', (function(e) {
   e.preventDefault();

    // var Phonetwo = $('#Phonetwo').val();
    // alert(Phonetwo);
    // return false;
    if(Phonetwo!=''){
        $.ajax({
           url: 'registration.php',
           type: "POST",
           data: new FormData(this),
         // data:{'Phonetwo':Phonetwo},
           contentType: false,
           cache: false,
           processData: false,
           success: function(data) {
               if(data.trim()=='Wrong OTP')
               {
                  alert("Wrong Otp");
               }
               else
               {
                 window.open('../index.php',"_self");
               }

           },
       });
        
    }
   }));
$('#btn_submit').on('click',function(e){
    var Phonetwo = $('#Phonetwo').val();
   // alert(Phonetwo);
    $.ajax({
        url:'..otpcode/sendsms.php',
        type: "POST",
        data:{'Phonetwo':Phonetwo},
        success: function(data) {
               if(data){
                    $('#otp_div').show();

               }
           },
    });
});


    // $('#otp_varification').on('click', function(){
    //     var mobile_otp = $('#mobile_otp').val();
    //     var formdata = new FormData($('#form1')[0]);
    //     formdata.append('mobile_otp',mobile_otp);
    //     console.log(formdata);
    //     return false;
    //     $.ajax({
    //         type : 'POST',
    //         url : '../wedding1/insert.php',
    //         data : formdata,
    //         contentType: false,
    //         cache: false,
    //         processData: false,
    //          success: function(data) {
               
    //        },          
    //    });
    // });
});



</script>


<script type="text/javascript">

window.open('../preview.php',"_self");

}

</script>

</body>
</html>	
