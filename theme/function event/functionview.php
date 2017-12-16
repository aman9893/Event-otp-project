
<?php
session_start();
include('../../database/config.php');
	?>

<?php 

	if(isset($_GET['delete_id']))
	{
	
		// it will delete an actual record from db
        $stmt_delete = $DB_con->prepare('DELETE FROM tbl_users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: index.php");
	}

?>

<?php
	
  

	//$stmt = $DB_con->prepare('SELECT * FROM tbl_users ORDER BY userID DESC limit 0,1');
    // echo 'SELECT * FROM tbl_users INNER JOIN users ON tbl_users.userID=users.id';
     



  $stmt = $DB_con->prepare("SELECT * FROM tbl_users  order by tbl_users.id DESC limit 1") ;




	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.4.1, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.4.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
<section class="mbr-section mbr-section-full mbr-parallax-background" id="header4-0" data-rv-view="0" style="background-image: url(assets/images/photo-2.jpg);">
    <div class="mbr-table-cell">
        
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <h1 class="mbr-section-title display-1"><?php echo $groom_name ?><br><br><br><br><br><br><?php echo $banner_message ?>  <?php echo $time ?></h1>
                    
                    
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="mbr-section mbr-section-nopadding" id="msg-box4-1" data-rv-view="3" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12 col-lg-3 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                <h3 class="mbr-section-title display-4">invitation</h3>
                
                <div class="lead"><p> <?php echo $invitation_message ?> 						
</p><p>&nbsp; &nbsp;<span style="font-size: 1.25rem;">Sincerely, &nbsp;</span></p><p>Smt. <?php echo $groomfather_name ?>&nbsp;&amp;&nbsp;Sh. <?php echo $groommother_name ?></p></div>
                
            </div>
            <div class="col-xs-12 col-lg-9 mbr-table-cell-lg image-size" style="width: 50%;">
                <div class="mbr-figure"><img src="assets/images/photo-4.jpg"></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="msg-box1-4" data-rv-view="6" style="background-color: rgb(255, 248, 224); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    

    <div class="container">
        <div class="row">
            
            <div>

                <div class="col-sm-8">
                    <h2 class="mbr-section-title h1">Function and Place details<br><br>
<div>   <?php echo $time ?>  <?php echo $marriage_placeaddress ?>
</div><div>
</div><div><?php echo $phone_one ?>
                 <?php echo $phone_two ?></div></h2>
                    
                </div>                
                <div class="col-sm-4 text-xs-right"><a class="btn btn-lg btn-danger" href="#">Start a Journey</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="msg-box2-g" data-rv-view="9" style="background-color: rgb(255, 255, 255); padding-top: 0rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            
            <div>

                <div class="col-sm-8">
                    <h2 class="mbr-section-title h1">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Card Images</h2>
                    
                </div>                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-gallery mbr-section mbr-section-nopadding" id="gallery1-9"

 data-rv-view="12" style="background-color: rgb(239, 239, 239); padding-top: 0rem; padding-bottom: 0rem;">
    <!-- Gallery -->
    <div>
        <div class=" mbr-gallery-layout-default">
            <div>
                <div>
                    <div class="mbr-gallery-item">
                        <a data-toggle="modal" href="#lb-gallery1-9" data-slide-to="0">
                                     <img src="<?php echo '../wedding1/images/'.$card_upload ; ?>" width="100%" height="216px"  title="">
                            <span class="icon fa fa-search-plus"></span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a data-toggle="modal" href="#lb-gallery1-9" data-slide-to="1">
             <img src="<?php echo '../wedding1/images/'.$card_img2 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                            <span class="icon fa fa-search-plus"></span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a data-toggle="modal" href="#lb-gallery1-9" data-slide-to="2">
                      <img src="<?php echo '../wedding1/images/'.$card_img3 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                            <span class="icon fa fa-search-plus"></span>
                        </a>
                    </div><div class="mbr-gallery-item">
                        <a data-toggle="modal" href="#lb-gallery1-9" data-slide-to="3">
                 <img src="<?php echo '../wedding1/images/'.$card_img4 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                            <span class="icon fa fa-search-plus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Lightbox -->
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-9">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-9" class=" active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-9" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-9" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-9" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                             <img src="<?php echo '../wedding1/images/'.$card_upload ; ?>" width="100%" height="216px"  title="">
                        </div><div class="carousel-item">
                           <img src="<?php echo '../wedding1/images/'.$card_img2 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                        </div><div class="carousel-item">
                           <img src="<?php echo '../wedding1/images/'.$card_img3 ; ?>" width="100%" height="216px%"  title="" media-simple="true">
                        </div><div class="carousel-item">
                           <img src="<?php echo '../wedding1/images/'.$card_img4; ?>" width="100%" height="216px%"  title="" media-simple="true">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-9">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-9">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="msg-box2-f" data-rv-view="31" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            
            <div>

                <div class="col-sm-8">
                    <h2 class="mbr-section-title h1"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Family</h2>
                    
                </div>                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="content4-e" data-rv-view="34" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">     <?php echo $familymember_title ?></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center"><?php echo $family_members2 ?></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center">    <?php echo $family_members3 ?></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center"><?php echo $family_members4 ?></h4>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="form1-6" data-rv-view="37" style="background-color: rgb(255, 255, 255); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                <h2 class="mbr-section-title display-3 text-xs-center">Contact Form</h2>

                <div data-form-alert="true"><div hidden="" data-form-alert-success="true">Thanks for filling out form!</div></div>
                <form action="https://mobirise.com/" method="post" data-form-title="Contact Form">
                    <input type="hidden" value="GkHqtZlSqTcp1K9E1ruO3hb9mqyn+UZ4tUqNrR+TohSqz3lQ5M0i7mCMaj2uI5AcI4JHL5baCVV4QmNrmroNmjtcytBmru/TdZ6r3U0GwQNScf2b2MueIyeeQdtHVVA1" data-form-email="true">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="7" placeholder="Message" data-form-field="Message"></textarea>
                    </div>
                    <div class="text-xs-right"><button type="submit" class="btn btn-secondary-outline">Contact Us</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small mbr-footer" id="contacts2-8" data-rv-view="46" style="background-color: rgb(55, 56, 62); padding-top: 4.5rem; padding-bottom: 4.5rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <p><strong><?php echo $marriage_place ?> </strong><br><?php echo $marriage_place ?>

<strong>Contacts</strong><br>
       <?php echo $email ?>
                    <br>Phone: <?php echo $phone_one ?>
                    <br>Fax:  <?php echo $phone_two ?>
            </div>
            <div class="col-xs-12 col-md-3"></div>
            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0Dx_boXQiwvdz8sJHoYeZNVTdoWONYkU&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="social-buttons1-d" data-rv-view="48" style="background-color: rgb(255, 255, 255); padding-top: 1.5rem; padding-bottom: 0rem;">
    

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h2 class="mbr-section-title h1">Share This Page!</h2>
            </div>
            <div class="col-sm-8 text-xs-right">
                <div class="mbr-social-likes" data-counters="true">
                    <div class="btn btn-social facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                        
                    </div>
                    <div class="btn btn-social twitter socicon-bg-twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                        
                    </div>
                    <div class="btn btn-social plusone socicon-bg-google" title="Share link on Google+">
                        <i class="socicon socicon-google"></i>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
  
</body>
</html>


			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; 
                

<div class="jumbotron">

<h1> Plzz Create theme </h1>
    </div>

            </div>
        </div>
        <?php
	}
	
?>
</div>	

