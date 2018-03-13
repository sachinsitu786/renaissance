<?php


/* Template Name: contact-us */ ?>

<?php get_header(); ?>

<div class="container contact-us">

<div class="col-md-8 contact-left">

<div class="form">

<div class="inner-form">

<ul>
<h3>contact us </h3>
<form name="form" method="post" action="http://sachin.acropolisglobal.com/renaissance/sendMail.php">
<li><input type="text" name="f_name"  placeholder="first name*" required></li>

<li><input type="text" name="l_mane"  placeholder="last name*" required></li>

<li><input type="text" name="company"  placeholder="company*" required><li>

<li><input type="text" name="mobile"  placeholder="phone*" required><li>

<li><input type="email" name="email"  placeholder="email*" required><li>

<li><input type="text" name="message"  placeholder="message*"><li>
<ul>
</div>
<button type="submit" name="submit" value="Submit">send</button>

</form>

</div>
</div>



<div class="col-md-4">
<div class="contact-right">

<p >Contact us to learn more about our applications and how we can be of service. Thank you.</p>
<br>
<br>
<br>
<br>
<p><a href="#" >info@rriskml.com</a></p>

<p >+1 845 353 2597</p>
</div>
</div>

</div>

<?php

get_footer();

?>
