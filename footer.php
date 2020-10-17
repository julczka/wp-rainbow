<button id="myBtn" onclick="topFunction()" id="myBtn" title="Go to top" class="scroll-btn">Scroll to top</button>


<div class="footer">
    <?php wp_nav_menu( array('theme_location' => 'footer_menu') ) ?>
</div>



<?php wp_footer()?>
<script>

var mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>