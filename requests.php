<?php
function runMyFunction()
{
    $aboutus = file_get_contents("html/aboutUs.html");

    echo $aboutus;
}

function showVids()
{
    ob_start();

require "phpfiles/videos.php";

$content = ob_get_contents();

ob_end_clean();

echo $content;

}
function showTeam()
{
    $team = file_get_contents("html/ourTeam.html");

    echo $team;
}

function showSalesdovePricing()
{
    $team = file_get_contents("html/salesdove.html");

    echo $team;
}

if (isset($_GET['aboutUs'])) {
    runMyFunction();
}
if (isset($_GET['team'])) {
    showTeam();
}
if (isset($_GET['salesdove'])) {
    showSalesdovePricing();
}
if (isset($_GET['videos'])) {
    showVids();
}
