<!DOCTYPE html>
<html lang="en">
<head>
       <?php include('includes/includes.html') ?>
    </head>
<style>
	.contact-line{
	border-bottom:2px solid #ffffff;
	padding-bottom: 8px;
}
</style>
<body>
<?php include('includes/header.html') ?>

	<div class="contact-banner">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.938233707823!2d72.82559436682605!3d18.934127912064664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1e96fffffff%3A0x9e5566da2438e887!2sPopawala+Chemical+Pvt.+Ltd!5e0!3m2!1sen!2sin!4v1444297598748" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	<div class="indenting-wrapper">
		<div class="indenting-section">
			<h2 class="indenting-header">Contact Us</h2>
			<div class="indenting-top-heading">
			<p style="text-align:center">Popawala Chemicals Pvt. Ltd.<br>
4th Floor, Raj Mahal Building,
Veer Nariman Road, Churchgate, Mumbai-400020, Maharashtra, India.<br>
Phone: <a href="#" data-toggle="tooltip" title="Call Me" style="color:#7F7F7F; text-decoration: none;">+91-22-66875200</a> (Board Lines)<br>
Fax: +91-22-66337399 </p>
			</div>
		</div>
	</div>
	
	<div class="indenting-category-line">
		Please fill out the form below to get in touch with us
	</div>
	
	<form id="cufv" method="post" action="newphpmailer/contact_post_form.php" enctype="multipart/form-data">
	<div class="contact-form-wrapper">
	<div class="contact-form">
	<div class="contact-field"><input type="text" name="Forename" placeholder="Forename" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/><span class="astrek">*</span></div>
	<div class="contact-field"><input type="text" name="Surname" placeholder="Surname"/> <span></span></div>
	<div class="contact-field"><input type="text" name="Email" placeholder="Email" data-validation="required" data-validation-error-msg="This Email is not valid"/> <span class="astrek">*</span></div>
	<div class="contact-field"><input type="text" name="Phone" placeholder="Phone" /></div>
	<div class="contact-full-field"><textarea name="Enquiry" placeholder="Ask Your Queries"></textarea></div>
	</div>
	</div>
	<div class="temp-wrapper">
	<input type="submit" name="submit" value="SUBMIT" class="temp hvr-shrink" style="letter-spacing: 2px; font-size: 18px; outline: none;"/>
	</div>
	</form>
			
	<?php include('includes/footer.html') ?>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
         <script src="js/classie.js"></script>
         
         <script>
         	$(document).ready(function(){
         		$(".submit-form").on("click",function(){
         			$("#cufv").submit();
         		});
         	});
         	
         </script>
       
		<script src="js/jquery.backstretch.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
	<script>
	 $.validate();
</script>	

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

</body>

</html>