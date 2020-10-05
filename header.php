<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    
    <?php wp_head()?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

</head>
<body>

<?php wp_nav_menu( array('theme_location' => 'header_menu') ) ?>