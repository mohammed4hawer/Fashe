<?php
include 'admin/function/connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/fashe/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Jan 2019 15:52:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/caabacad01.js" crossorigin="anonymous"></script>
<link rel="icon" type="image/png" href="images/icons/favicon.png" />
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">

<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">

<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">

<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<style type="text/css">
#search_d, #search_b
{
    list-style: none;
    padding: 3px;
}
.x::placeholder
{
    color: red;
}
.img_cat
{
    width: 220px;
    height: 350px;
    border-radius: 10px;
}
.send
{
    color: #FFE;
    font-weight: 400;
}
.num
{
    width: 176px;
    border: 3px solid silver;
    border-radius: 10px;
    font-size: 14px;
    padding: 3px;
}
.innum
{
    border-radius: 15px;
    text-align: center;
    background-color: #FEE;
}
.logmenu
{
    padding: 0;
    list-style: none;
    position: absolute;
    display: none;
    left: -166px;
    top: 45px;
}
.logli
{
    position: relative;
    float: left;
    padding: 2px;
    background-color: #FFF;
    border: 1px solid #CEE;
    border-radius: 5px;
}
.butt
{
    float: left;
    margin: 8px;
}
.usrimg
{
    width: 50px;
    height: 50px;
    border-radius: 25px;
}
.usrname
{
    font-size: 16px;
    font-weight: 600;
    font-family: sans-serif;
    color: #011;
}
.hrr
{
    border-bottom: 1px solid #101;
    color: #102;
    margin: 3px 0;
}
#rate
{
    position: relative;
    margin: 10px 1px;
}
.posted-rate
{
    font-family: sans-serif;
    font-size: 18px;
    color: #002;
}
        .star{
          color: goldenrod;
          font-size: 26px;
          padding: 0 0.8rem; /* space out the stars */
        }
        .starr
        {
            color: goldenrod;
            font-size: 18px;
            padding: 0 1px;
        }
        .star::before, .starr::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before, .starr.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 18px;
            font-weight: 900;
        }
        .star.rated, .starr.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
/*===================================================*/
    #forma
    {
        width: 100%;
        height: auto;
    }
    .comm
        {
            color: #101;
            font-weight: 600;
            font-style: italic;
        }
    .labx
        {
            color: #101;
            font-family: fantasy;
            font-size: 18px;
        }
    .row5
        {
            background-color: snow;
            margin: 5px 10px;
            display: block;
            border: 0.015px solid #09E;
        }
    .com
        {
            width: 100%;
            height: auto;
            font-family: sans-serif;
            font-size: 20px;
            text-justify: inter-word;
        }
    .olf
        {
            list-style: none;
            padding: 0;
            width: 100%;
            height: auto;
        }
    .lir
        {
            padding: 5px;
            border: 0.01px solid #FFE;
        }
    .usr-name
        {
            font-family: sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #101;
        }
    .comtxt
        {
            font-family: sans-serif;
            font-size: 16px;
            color: #001;
            float: inherit;
            border: 0.5px solid snow;
            background-color: azure;
            width: 100%;
            height: auto;
        }
    .usr-img
        {
            width: 60px;
            height: 60px;
            border-radius: 30px;
        }
    .usr-i
        {
            width: 200px;
            height: 26px;
        }
    .textbox
    {
        width: 200px;
        border-bottom: 1px solid #101;
    }
    .page-item:first-child .page-link 
    {
      margin-left: 0;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }
    .page-item:last-child .page-link 
    {
      margin-left: 0;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
    }
    .page-link, .page-link::before
    {
      color: #001;
      background-color: silver;
      border: 3px solid #666;
      border-radius: 18px;
      outline: #777;
      font-weight: 600;
      margin: 3px;
    }
    .page-link:hover, .page-link::after 
    {
      background-color: #101;
      border: 1px solid #777;
      color: #0BF;
    }
 
</style>

</head>
