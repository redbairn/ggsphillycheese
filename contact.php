<?php
/************************************************************************************* 
* Authors: Craig Bell, Philip Godkin, Ying Godkin, Kristan Johnson
* Assignment: Web Design Project, National College of Ireland, 2019.
* Date: 2019/03/23
**************************************************************************************/
//define page title
$title = 'contact';
$home = 'active';

include ('includes/header.php'); 
 ?>
<header class="ccheader">
    <h1>Contact Us</h1>	
</header>
<div class="wrapper">
    <form method="post" action="" class="ccform">
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-user fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Full Name" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-envelope fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Email" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-mobile-phone fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Phone">
    </div>
     <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-info fa-2x"></i></span>
        <input class="ccformfield" type="text" placeholder="Subject" required>
    </div>
    <div class="ccfield-prepend">
        <span class="ccform-addon"><i class="fa fa-comment fa-2x"></i></span>
        <textarea class="ccformfield" name="comments" rows="8" placeholder="Message" required></textarea>
    </div>
    <div class="ccfield-prepend">
        <input class="ccbtn" type="submit" value="Submit">
    </div>
    </form>
</div>

<div class="social">
<ul>
    <li class="socialMediaList"><a href="https://www.facebook.com/GGsphillycheese/"><img src="img/socialMediaIcons/iconfinder_facebook" alt="Facebook Icon"></a></li>
    <li class="socialMediaList"><a href="https://www.instagram.com/ggsphillycheese/"><img src="img/socialMediaIcons/iconfinder_instagram" alt="Instagram Icon"></a></li>
    <li class="socialMediaList"><a href="https://twitter.com/"><img src="img/socialMediaIcons/iconfinder_twitter" alt="Twitter Icon"></a></li>
    <li class="socialMediaList"><a href="https://www.youtube.com/"><img src="img/socialMediaIcons/iconfinder_youtube" alt="Youtube Icon"></a></li>
    <li class="socialMediaList"><a href=""><img src="img/socialMediaIcons/iconfinder_whatsapp" alt="whatsApp Icon"></a></li>
</ul>

</div>

	
<?php include ('includes/footer.php'); ?>