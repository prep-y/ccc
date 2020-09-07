<?php
require_once('core/init.php');

include 'includes/head.php';

include 'includes/navigation.php';

include 'includes/detailsmodal.php';



$sql = "SELECT * FROM products WHERE featured = 1";
$featured = $mysqli->query($sql);


?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <?php include 'includes/navigation.php';?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"></div><!-- /.navbar-collapse -->
      </div><!-- /.container-collapse -->
  </nav>
<div class="image-aboutus-banner"style="margin-top:70px">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
         <h1 class="lg-text">About Us</h1>
         <p class="image-aboutus-para"></p>
       </div>
    </div>
</div>
</div>
<div class="container paddingTB60">
	<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                 <hr>

                <h2>GiftBox Direct Origins</h2>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="images/headerlogo/giftbox.png" alt="giftbox">

                <hr>

                <!-- Post Content -->
                <p class="lead"></p>
                <p><ins>GiftBox Direct </ins></p>
                <p>GiftBox Direct is a business that specializes in providing wholesale goods at a low and affordable cost compared to retail outlets.</p>
                <p>We have mainly been selling goods through brick and mortar pop-ups throughout Australian shopping centres and various local markets</p>
                <p>We aim to eventually have a proper functioning online webstore that will be able dynamically process products and orders from a database and output the finishing product to you!</p>

                <hr>

               
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">



                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Quick Links</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well bgcolor-skyblue">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>

        </div>
</div>
  
  
<div class="footer-section">
    <div class="footer">
	<div class="container">
		<div class="col-md-4 footer-one">
			<h5>About Us </h5>
		    <p>Follow our socials to keep updated with new trendy products that may soon be available here!</p>
		    	<div class="social-icons"> 
               <a href="https://www.facebook.com/giftboxdirect"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/giftboxdirect"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
	            <a href="https://plus.google.com/giftboxdirect"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
	            <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
	        </div>	
		</div>
		<div class="col-md-3 footer-two">
		    <h5>Information </h5>
		    <ul>
									<li><a href="#">Warranty Tips</a></li>
									<li><a href="#">Locations</a></li>
									<li><a href="#">Reputation</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Partners</a></li>
								</ul>
		</div>
		<div class="col-md-3 footer-three">
		    <h5>Helpful Links </h5>
		    <ul>
									<li><a href="#">Warranty Tips</a></li>
									<li><a href="#">Locations</a></li>
									<li><a href="#">Reputation</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Partners</a></li>
								</ul>
		</div>
		<div class="col-md-2 footer-four">
		    <h5>Helpful Links </h5>
		    <ul>
									<li><a href="#">Warranty Tips</a></li>
									<li><a href="#">Locations</a></li>
									<li><a href="#">Reputation</a></li>
									<li><a href="#">Careers</a></li>
									<li><a href="#">Partners</a></li>
								</ul>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
</div>  



<footer class="text-center" id="footer">&copy; Copyright 2020 Gift Box Direct</footer>




<script>
    jQuery(window).scroll(function() {
        var vscroll = jQuery(this).scrollTop();
        jQuery('#logoText').css({
            "transform": "translate(0px, " + vscroll / 2 + "px)"
        })

        var vscroll = jQuery(this).scrollTop();
        jQuery('#back-flower').css({
            "transform": "translate(" + vscroll / 5 + "px, -" + vscroll / 12 + "px)"
        })

        var vscroll = jQuery(this).scrollTop();
        jQuery('#for-flower').css({
            "transform": "translate(0px, -" + vscroll / 2 + "px)"
        })
    });


    function detailsModal(id) {
        var data = {
            "id": id
        };
        jQuery.ajax({
            url: +'/tutro/includes/detailsmodal.php',
            method: "post",
            data: data,
            success: function(data) {
                jQuery('body').append(data);
                jQuery('#details-modal').modal('toggle');
            },
            error: function() {
                alert("Something went wrong!");
            }
        });
    }
</script>
</body>

</html>