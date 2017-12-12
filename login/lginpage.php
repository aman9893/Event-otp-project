


<!DOCTYPE html>
<html>
<head>
<!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v4.4.1, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Web Creator Description">
<title>Login</title>
<link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="../assets/tether/tether.min.css">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="../assets/socicon/css/styles.css">
<link rel="stylesheet" href="../assets/dropdown/css/style.css">
<link rel="stylesheet" href="../assets/theme/css/style.css">
<link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>

<section class="menu cid-qBYsUNZ1yZ" once="menu" id="menu2-1" data-rv-view="701">



<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
   <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <div class="hamburger">
           <span></span>
           <span></span>
           <span></span>
           <span></span>
       </div>
   </button>
   <div class="menu-logo">
       <div class="navbar-brand">
           <span class="navbar-logo">
               <a href="../index.php">
                   <!--<img src="assets/images/bday-255x255.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem;">-->
                  <h3> Event-Card </h3>
               </a>
           </span>
           
       </div>
   </div>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">



           <li class="nav-item">
               <a class="nav-link link text-black display-4" href="../index.php">Home</a>

           </li>
       


           <li class="nav-item"><a class="nav-link link text-black display-4" href="../page1.html">Aboutus</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="page2.html">Contact us</a></li>
           <li class="nav-item">
               <a class="nav-link link text-black display-4" href="../page3.html">Terms </a>
           </li>


   <li class="nav-item">
               <a class="nav-link link text-black display-4" href="lginpage.php">Login&Register</a>
               
           </li>

       </ul>
     
  

        <a class="btn btn-sm btn-primary display-4" href="mailto:xyz@gmail.com"><span class="mbri-letter mbr-iconfont mbr-iconfont-btn"></span>
               xyz@gmail.com</a> <a class="btn btn-sm btn-primary display-4" href="tel:+1-234-567-8901">
               <span class="btn-icon mbri-mobile mbr-iconfont mbr-iconfont-btn">
               </span>
               +1-234-567-8901
           </a></div>
   </div>
</nav>
</section>


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






<script src="../assets/web/assets/jquery/jquery.min.js"></script>
<script src="../assets/popper/popper.min.js"></script>
<script src="../assets/tether/tether.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/smooth-scroll/smooth-scroll.js"></script>
<script src="../assets/dropdown/js/script.min.js"></script>
<script src="../assets/touch-swipe/jquery.touch-swipe.min.js"></script>
<script src="../assets/jarallax/jarallax.min.js"></script>
<script src="../assets/theme/js/script.js"></script>
<script src="../assets/formoid/formoid.min.js"></script>





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
        url:'../sendsms.php',
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
