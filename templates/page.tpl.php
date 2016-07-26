<?php //really bare bones playing around with materialcss
      //Mainly just trying to get libsass working with it
?>
  <nav>
    <div class="nav-wrapper light-blue darken-1">
      <a href="/" class="brand-logo"><i class="material-icons left valign">cloud</i>Your Cool Logo</a>
    </div>
  </nav>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center valign orange-text">
        <?php print $title;?>
      </h1>
    </div>
  </div>

<div class="container">
   <?php print render($page['content']);?>
</div>


<footer class="page-footer black darken-1">

  <div class="footer-copyright">
    <div class="container">
      Made with <a class="darken-1" href="http://materializecss.com">Materialize</a>
    </div>
  </div>
</footer>