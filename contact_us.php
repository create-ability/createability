<?php 
include('./includes/title.inc.php');
include('./includes/Mobile_Detect.inc.php');
$mobileDetect = new Mobile_Detect();
?>



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create-Ability, Inc.<?php if (isset($title)) { echo "&#8212;{$title}"; } ?></title>
        <link href="./css/principal.css" rel="stylesheet" type="text/css" media="screen" />
    </head>
    <body>
        <?php include('./includes/header.inc.php'); ?>
        
        <div id="comprehensive">
            <?php include('./includes/menu.inc.php'); ?>
            
            <div id="core">
                <iframe id="googlemaps" width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=create-ability+Madison,+WI+53713&amp;aq=&amp;sll=43.052564,-89.381908&amp;sspn=0.00831,0.021136&amp;vpsrc=0&amp;g=122+E+Olin+Ave,+Madison,+Wisconsin+53713&amp;ie=UTF8&amp;hq=create-ability&amp;hnear=Madison,+Wisconsin+53713&amp;t=h&amp;ll=43.052583,-89.381847&amp;spn=0.06021,0.109863&amp;z=13&amp;iwloc=A&amp;output=embed">
                </iframe>
                <p><h3>Director of Program Services</h3>Joan Callan<br /><b>Phone:</b> <?php if ($mobileDetect->isMobile()) { echo '<a href="tel:6082800206">608-280-0206</a>'; } else { echo '608-280-0206'; } ?>, ext. 247<br /><b>Email:</b> <a href="mailto:joanc@create-ability.org">joanc@create-ability.org</a></p>
                <p><h3>Employment Recruiter</h3>Lesley Bollig<br /><b>Phone:</b> <?php if ($mobileDetect->isMobile()) { echo '<a href="tel:6082800206">608-280-0206</a>'; } else { echo '608-280-0206'; } ?>, ext. 233<br /><b>Email:</b> <a href="mailto:lesleyb@create-ability.org">lesleyb@create-ability.org</a></p>
                <p><h3>General Contact</h3>Create-Ability, Inc.<br />122 E Olin Ave Suite 255<br />Madison, WI 53713</p>
                <p><b>Phone:</b> <?php if ($mobileDetect->isMobile()) { echo '<a href="tel:6082800206">608-280-0206</a>'; } else { echo '608-280-0206'; } ?><br /><b>Fax:</b> 608-280-0213</p>
            </div>
            
            <?php include('./includes/footer.inc.php'); ?>
        </div>
    </body>
</html>
