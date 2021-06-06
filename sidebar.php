<nav class="l-sidebar">
        <div class="l-sidebar__hide"></div>
        <div class="l-sidebar__gmenu">
            <input type="radio" name="c-menu" id="c-menu__close" checked>
            <label for="c-menu__close" class="c-menu__close"><span></span></label>
            <h2>Menu</h2>
            <ul  class="l-sidebar__main p-sidebar__main">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'side'
                ));
            ?>
            <ul>
        </div>
    </nav>