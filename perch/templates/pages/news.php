<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); ?>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
perch_layout('global.header');

?>

    <?php

    perch_content_create("Header", [
        "template" => "header.html"
    ]);

    if (perch_get("s")) {
        perch_content_custom("Header", [
            "template" => "header.html",
            'data' => [
                'title' => perch_blog_post_field(perch_get("s"), 'postTitle', true)
            ]
        ]);
    } else {
        perch_content("Header");
    }

    ?>
    <div class="c-content">
        <div class="c-post l-content-section l-content-section--centered l-restrict">
            <?php
            if (perch_get("s")) {
                perch_blog_post(perch_get("s"));
            } else {
                echo '<h2 class="c-post__section-title">Recent Posts:</h2>';
                perch_blog_custom([
                    'count' => 10,
                    'template' => "post_in_list.html",
                    "sort" => "postDateTime",
                    "sort-order" => "DESC"
                ]);
            }
            ?>
        </div>

    </div>
<?php

perch_layout('global.footer');

?>