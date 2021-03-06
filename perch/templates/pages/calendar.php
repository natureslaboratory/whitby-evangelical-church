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

perch_content("Header");


?>
<div class="c-content">
    <div class="l-content-section l-restrict">
        <div class="c-calendar"></div>
        <script src="/assets/js/calendar.js"></script>
    </div>
</div>
<?php

perch_layout('global.footer');

?>