<?php

require "./app/check_auth.php";
require "./app/common.php";

$title = "Modules List";
require "./layouts/header.php";
?>
<div class="container">
    <div class="row mt-5" id="module_list">
    </div>
</div>
<script src="./js/modules.js"></script>
<?php
require "./layouts/footer.php"
?>