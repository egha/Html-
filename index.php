<!DOCTYPE html>
<html>

<!-- Mirrored from ebolaghanaalert.org/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 12 Oct 2014 06:35:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ebola Ghana Alert &mdash; Type *713*444# on MTN and Airtel for updates on Ebola</title>
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
    <link rel="icon" type="image/png" href="favicon.html"apple-touch-icon" href="images/logo.png"/>
    <link href="feed.xml" rel="alternate" type="application/rss+xml" title="Ebola Ghana Alert" />
    <meta name="title" content="Ebola Ghana Alert">
    <link rel="canonical" href="index.html">
    
    
    <meta property="og:title" content="Ebola Ghana Alert"/>
    <meta property="og:url" content="/"/>
    
    
    <meta property="og:site_name" content="Ebola Ghana Alert">
</head>
<body>

<section class="site-nav">
    <nav id="navigation" class="nav-collapse">
        <ul>
            <li class="brand"><img class="brand" src="images/logo.png" alt="Inc" /></li>
            <li><a href="index.html" class="home">Home</a></li>
            <li><a href="about/index.html">About Us</a></li>
            <li><a href="http://www.ebolaghanaalert.blogspot.com/" target="_blank" class="home">Blog</a></li>
            <li><a href="http://map.ebolaghanaalert.org/" target="_blank" class="home">Map</a></li>
            <li><a href="videos/index.html">Videos</a></li>
            <li><a href="audio/index.html">Audio</a></li>
            <li><a href="contact/index.html">Contact</a></li>
        </ul>
    </nav>
    
</section>

<div class="blog-cover">
    <div id="blog-slider">
        <img src="images/port1.jpg">
        <img data-src="images/port2.jpg">
        <img data-src="images/port3.jpg">
    </div>
    <section>
        <div class="container">
            <h1>Ebola Ghana Alert</h1>
            
                <h3>Type *713*444# on MTN and Airtel for updates on Ebola</h3>
            

            
                <a class="social" href="https://twitter.com/ebolaghanaalert" title="Follow on Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            
            
                <a class="social" href="http://facebook.com/ebolaghanaalert" title="Like on Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            
            <a class="social" href="feed.xml" title="RSS Feed">
                <i class="fa fa-rss"></i>
            </a>
        </div>
    </section>
</div>

<article class="container">  
    
    <?php 
 error_reporting(0);
    $file = 'http://www.medicalnewstoday.com/rss/ebola.xml
';

    if(!$xml = simplexml_load_file($file)){
        echo "<font color=blue size=34>FEEDS WOULD BE UP SOON</font>";
    } 
	
	
	while($x<20){
$title=$xml->channel->item[$x]->title;
$link=$xml->channel->item[$x]->link ;
$des=$xml->channel->item[$x]->description;
$pubDate=$xml->channel->item[$x]->pubDate ;
echo "<section class=\"index\">
        <div>
            <div class=\"meta\">
                <time>$pubDate</time>
            </div>
            <h2 class=\"title\"><a href=\"$link\" target=\"_blank\" rel=\"prefetch\">$title</a></h2>
            <p></p>
            
                <div class=\"meta\">
                     <address>$des</address>
                    <span>
                        <i class=\"fa fa-share-alt fa-lg\"></i>
                    </span>
                </div>
            
        </div>
        <hr>
    </section>
    ";
$x++;	
}
?>
    
    <section class="pagination" style="text-align:center">
      
      
    </section>
</article>


<footer class="site-footer">
    <div class="container">
        <nav class="social">
            
            <a href="https://twitter.com/ebolaghanaalert" title="Follow on Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
            
            
            <a href="http://facebook.com/ebolaghanaalert" title="Follow on Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
            
            <a href="feed.xml" title="RSS Feed">
                <i class="fa fa-rss"></i>
            </a>
        </nav>
        <span>
            &copy; 2014
            Ebola Ghana Alert
        </span>
        <br />
        <nav>
            <a href="index.html" class="home">Home</a> &middot;
            <a href="index.html">About Us</a> &middot;
            <a href="http://map.ebolaghanaalert.org/" target="_blank" class="home">Map</a> &middot;
            <a href="index.html" class="home">Contact</a>
        </nav>
    </div>
</footer>

<script src="javascripts/jquery-1.10.2.js"></script>
<script src="javascripts/ideal-image-slider.min.js"></script>
<script src="javascripts/responsive-nav.min.js"></script>
<script src="javascripts/main.js"></script>








</body>

<!-- Mirrored from ebolaghanaalert.org/ by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 12 Oct 2014 06:36:03 GMT -->
</html>