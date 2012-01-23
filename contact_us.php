<?php include('./includes/title.inc.php'); ?>

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
                <p>Joan Callan, Director of Program Services<br /><b>Phone:</b> 608-280-0206, ext. 219<br /><b>Email:</b> <a href="mailto:joanc@create-ability.org">joanc@create-ability.org</a></p>
                <p>Create-Ability, Inc.<br />122 E Olin Ave Suite 255<br />Madison, WI 53713</p>
                <p><b>Phone:</b> 608-280-0206</p>
                <p><b>Fax:</b> 608-280-0213</p>
            </div>
            
            <?php include('./includes/footer.inc.php'); ?>
        </div>
    </body>
</html>
