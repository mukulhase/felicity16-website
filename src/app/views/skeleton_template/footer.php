<?php
if (empty($is_ajax)):
    if (isset($events_data)) {
        $categorised_event = [];
        foreach ($events_data as $event) {
            $category = trim( str_replace($event['slug'], '', $event['path']), '/' );
            if ($event['template'] == 'category') {
                if (!isset($categorised_event[$category])) {
                    $categorised_event[$category] = [];
                }
                array_unshift($categorised_event[$category], $event);
            } else {
                $categorised_event[$category][] = $event;
            }
        }
    }
if (!isset($page_slug)) {
    $page_slug = "static";
}
$primary_nav_link = function ($name, $display_name, $image) use ($page_slug) {
    ?>
    <a href="<?= locale_base_url() . $name ?>/" data-href="<?= $name ?>" class="primary-nav-link <?= $name ?><?= $name == $page_slug ? ' open' : '' ?>">
    <img src="<?= base_url() ?>static/images/<?= $image ?>">
    <div class="title"><?= $display_name ?></div>
    </a>
<?php
}
    ?>
</div>
<nav>
    <ul class="primary-nav left">
    <li>
                <?php $primary_nav_link('about', __('About'), 'dragon8.png'); ?>
    </li>
    <li>
                <?php $primary_nav_link('gallery', __('Gallery'), 'dragon2.png'); ?>
    </li>
    <li>
                <?php $primary_nav_link('schedule', __('Schedule'), 'dragon7.png'); ?>
    </li>
    </ul>
    <ul class="primary-nav right">
    <li>
                <?php $primary_nav_link('sponsors', __('Sponsors'), 'dragon5.png'); ?>
    </li>
    <li>
                <?php $primary_nav_link('team', __('Team'), 'dragon3.png'); ?>
    </li>
    <li>
                <?php $primary_nav_link('contact', __('Contact'), 'dragon6.png'); ?>
    </li>
    </ul>
    </nav>
    
    <script src="<?= base_url() ?>static/scripts/common.js" charset="utf-8"></script>
    <script src="<?= base_url() ?>static/scripts/ajaxify.js" charset="utf-8"></script>
    <?php if ($page_slug !== "static"): ?>
    <script src="<?= base_url() ?>static/scripts/navigation.js?v=4" charset="utf-8"></script>
    <?php endif; ?>
    <?php $this->load_fragment('google_analytics'); ?>
    </body>
    </html>
<?php endif;
