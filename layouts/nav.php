<ul class="navigation-list">
    <?php
    foreach ($navItems as $item) {
        if ($item['slug'] == basename($_SERVER['REQUEST_URI'])) {
        $currentPage = 'selected';
        } else {
            $currentPage = '';
        }
        echo "<li class =\" $currentPage nav-button\">
            <a href = \"$item[slug]\">
        <span>$item[title]</span>
       </a> </li>";
    }
    ?>                    

</ul>
