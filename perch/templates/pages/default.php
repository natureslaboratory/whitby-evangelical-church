<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); ?>

<?php

perch_layout('global.header');

?>
<?php

    perch_content_create("Header", [
        "template" => "header.html"
    ]);

    perch_content("Header");
?>
<div class="c-content">
    <?php

    perch_content("Main Content");

    ?>
</div>
<?php

perch_layout('global.footer');

?>