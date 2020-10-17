<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    
    <?php wp_head()?>
  

</head>
<body>

<div class="header">
    <div class="menu-desktop">
        <?php wp_nav_menu( array('theme_location' => 'header_menu') ) ?>
    </div>


    <div class="topnav menu-mobile" >
        
        <div id="myLinks" >
        <?php wp_nav_menu( array('theme_location' => 'header_menu') ) ?>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="showMenu()">
        <img src="<?php echo get_template_directory_uri(  ).'/assets/baseline_menu_black_18dp.png' ?>"/> 
        </a>
    </div>

</div>

<script> 
function showMenu() {
  let el = document.getElementById('myLinks');
  if (el.style.display === 'block') {
    el.style.display = 'none';
  } else {
    el.style.display = 'block';
  }
}

</script>