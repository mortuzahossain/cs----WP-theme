<?php
    global $cs;
    $upload_facivon = $cs['upload_facivon'];
?>
<!doctype html>
<html class="no-js" lang="<?php bloginfo( 'language' ); ?>">
    <head>
        <!-- META -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SITE TITLE -->
        <title><?php bloginfo( 'title' ); ?></title>



        <!-- FAVICON -->
        <link rel="shortcut icon" href="<?php
        if($upload_facivon == '1' && !empty($cs['favicon']['thumbnail'])){
            echo $cs['favicon']['thumbnail'];
        } else {
            echo get_template_directory_uri().'/images/favicon.ico';
        }
        ?>">

    <?php wp_head(); ?>

    </head>
    <body>
        <canvas id="c"></canvas>
                <div class="wrapper">
                    <div class="main-section">