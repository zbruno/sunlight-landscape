<header class="sl-header">
  <nav class="sl-header-nav">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'container' => null, 'menu_class' => 'sl-header-nav-ul']);
    endif;
    ?>
  </nav>
</header>
