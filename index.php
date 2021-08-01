<?php ob_start("ob_gzhandler"); ?>
<!DOCTYPE html>

<html>
<head>

<!-- End Google Tag Manager -->

<!-- meta - tas and description -->

<meta charset="UTF-8">
  <meta name="description" content="Prof-Dev Integrated is A software company based in Khartoum, Sudan">
  <meta name="keywords" content=" integrated, salesdove , software , company , prof, dev ">
  <meta name="author" content="Mohamed Osman Ahmed">
<!-- meta - tas and description -->

<link rel="icon" href="./hicons/logo.png">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/aboutus.css" rel="stylesheet" >
<link href="css/pricing.css" rel="stylesheet" >
<link href="css/footer.css" rel="stylesheet" >
<link href="css/loader.css" rel="stylesheet" >
<link href="css/team.css" rel="stylesheet" >
<link href="css/testomonials.css" rel="stylesheet" >
<link href="css/container.css" rel="stylesheet" >

<title><?php
if(empty($_GET)){
    echo 'Prof-Dev Integrated Solutions';

}
if (isset($_GET['aboutUs'])) {
    echo 'Prof-Dev Integrated Solutions';

}
if (isset($_GET['team'])) {
    echo 'Our Team';
}
if (isset($_GET['salesdove'])) {
    echo 'Pricing';
}
if (isset($_GET['home'])) {
    echo 'Home';
}
if (isset($_GET['testimonials'])) {
    echo 'Testimonials';
}
if (isset($_GET['contactus'])) {
    echo 'Contact Us';
}
if (isset($_GET['videos'])) {
    echo 'Training';
}

?></title>
</head>
<body lang="en">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PLZSLF6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <script type="text/javascript" src="scripts/customFunctions.js">

</script>
<script type="text/javascript" src="scripts/animate.js">
</script>
        <?php

$navbar = file_get_contents("html/navbar.html");
$aboutus = file_get_contents("html/aboutUs.html");
$ourTeam = file_get_contents("html/ourTeam.html");
$salesdove = file_get_contents("html/salesdove.html");
$testimonials = file_get_contents("html/testomonials.html");
$contactus = file_get_contents("html/contactus.html");
 
echo $navbar;



 ?>
<?php 
    
    if(empty($_GET)){
        echo '<div class="loadding-page">
        <div class="cssload-box-loading"></div>
    </div>';
    
    }
    ?>


<div class="container mainContent" id="content">
    
<?php 
    
if(empty($_GET)){
    echo $aboutus;

}
if (isset($_GET['aboutUs'])) {
    echo $aboutus;
}
if (isset($_GET['team'])) {
    echo $ourTeam;
}
if (isset($_GET['salesdove'])) {
    echo $salesdove;
}
if (isset($_GET['home'])) {
    echo $aboutus;
}
if (isset($_GET['testimonials'])) {
    echo $testimonials;
}
if (isset($_GET['contactus'])) {
    echo $contactus;
}
if (isset($_GET['videos'])) {
    echo ShowVids();
}
?>

</div>

<?php
function showVids()
{
    ob_start();

require "phpfiles/videos.php";

$content = ob_get_contents();

ob_end_clean();

return $content;
//     $string = exec( "phpfiles/videos.php");
// echo $string;
    // echo $vids;
}
$footer = file_get_contents("html/footer.html");
echo $footer;
?>

</body>
</html>