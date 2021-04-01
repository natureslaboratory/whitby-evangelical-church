
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
        <div id="yash-embed-sermons" data-url="https://yetanothersermon.host/_/whitbyec/embed_v2/"></div>
        <script src="https://yetanothersermon.host/js/embed.js" defer data-id="yash-embed-sermons"></script>
    </div>
</div>
<?php

perch_layout('global.footer');

?>