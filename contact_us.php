<?php include('./includes/title.inc.php'); ?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create-Ability, Inc.<?php if (isset($title)) { echo "&#8212;{$title}"; } ?></title>
        <link href="./css/principal.css" rel="stylesheet" type="text/css" media="screen">
    </head>
    <body>
        <?php include('./includes/header.inc.php'); ?>
        
        <div id="comprehensive">
            <?php include('./includes/menu.inc.php'); ?>
            
            <div id="core">
                <iframe id="googlemaps" width="640" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=122+E+Olin+Ave+Suite+255,+Madison,+WI+53713&amp;aq=&amp;sll=43.052379,-89.382083&amp;sspn=0.008342,0.021136&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=122+E+Olin+Ave,+Madison,+Wisconsin+53713&amp;t=h&amp;view=map&amp;ll=43.052583,-89.381933&amp;spn=0.030105,0.054932&amp;z=14&amp;output=embed">
                </iframe>
                <p>Create-Realty, Inc<br />122 E Olin Ave Suite 255<br />Madison, WI 53713</p>
                <p>Phone: <b>608-280-0206</b></p>
                <p>Fax: <b>608-280-0213</b></p>
                <p>Email: <a href="samw@create-ability.org">samw@create-ability.org</a></p>
            </div>
            
            <?php include('./includes/footer.inc.php'); ?>
        </div>
    </body>
</html>
