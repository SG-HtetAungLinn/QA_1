<?php

require "./app/check_auth.php";
require "./app/common.php";

$title = "Modules List";
require "./layouts/header.php";
?>
<div class="container">
    <input type="hidden" value="<?= $_SESSION["user"]['username'] ?>" id="tutor" />
    <input type="hidden" value="<?= $_SESSION["user"]['role'] ?>" id="role" />
    <div class="row mt-5" id="module_list">
    </div>
</div>
<script src="./js/modules.js"></script>
<?php
require "./layouts/footer.php"
?>