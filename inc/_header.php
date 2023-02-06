<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CloudPhire - Hosting Provider & Digital Agency</title>
    <meta name="description" content="">
    <link href="https://cdn.rankon.co.uk/img/favicon.ico" rel="shortcut icon">
    <!-- Fonts -->
    <link href="https://cdn.rankon.co.uk/fonts/cloudicon/cloudicon.css" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="https://cdn.rankon.co.uk/fonts/fontawesome/css/all.min.css" rel="stylesheet" onload="if(media!='all')media='all'">
    <link href="https://cdn.rankon.co.uk/fonts/evafeat/evafeat.css" rel="stylesheet" onload="if(media!='all')media='all'">
    <!-- CSS Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <?php
    if (is_array($extraCss) && count($extraCss) > 0) {
        echo '<!-- Page-specific CSS Styles -->';
        foreach ($extraCss as $css_item) {
            echo $css_item;
        }
    }
    ?>

    <link href="https://cdn.rankon.co.uk/css/style.min.css" rel="stylesheet">
    <link href="https://cdn.rankon.co.uk/css/custom.css" rel="stylesheet">
    <link href="https://cdn.rankon.co.uk/css/gdpr-cookie.min.css" rel="stylesheet">
</head>

<body>
    <div class="box-container limit-width">
        <!-- ***** LOADING PAGE ****** -->
        <div id="spinner-area">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
                <div class="spinner-txt">CloudPhire...</div>
            </div>
        </div>
        <!-- ***** FRAME MODE ****** -->
        <div class="body-borders" data-border="20">
            <div class="top-border bg-white"></div>
            <div class="right-border bg-white"></div>
            <div class="bottom-border bg-white"></div>
            <div class="left-border bg-white"></div>
        </div>
        <!-- ***** UPLOADED MENU FROM HEADER.php ***** -->
        <header id="header" style="min-height:80px;"> </header>