<?php

require "./app/check_auth.php";
require "./app/common.php";

$title = "Question List";
$module_code = $_GET['module'] ?? '';
$module_data = getModuleByCode($module_code);
if (empty($module_code)) {
    header("Location: index.php?error=Module Not Found");
    exit;
}
require "./layouts/header.php";
?>
<div class="container">
    <div class="mt-5">
        <h1 class="text-center text-theme mb-3"><?= $module_data['name'] ?></h1>
        <div class="row mb-4">
            <div class="col-md-4 mb-3">
                <select class="form-select" id="answerFilter">
                    <option value="all">All Questions</option>
                    <option value="answered">With Answers</option>
                    <option value="unanswered">Without Answers</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <div class="input-group">
                    <input type="search" id="searchInput" class="form-control" placeholder="Search questions, answers, or users...">
                    <button class="btn btn-outline-secondary" type="button" id="searchButton">
                        <i class="fas fa-search"></i> Search
                    </button>
                </div>
            </div>
            <?php if ($_SESSION['user']['role'] == 'student') { ?>
                <div class="col-md-4 mb-3 text-end">
                    <a class="btn btn-primary btn-theme" href="question_form.php?module=<?= $module_code ?>">Ask Question</a>
                </div>
            <?php } ?>
        </div>
        <div class="row" id="question_list">
        </div>
        <input type="hidden" id="module_code" value="<?= $module_code ?>">
        <input type="hidden" id="current_user" value="<?= $_SESSION['user']['username'] ?>">
        <input type="hidden" id="user_role" value="<?= $_SESSION['user']['role'] ?>">
    </div>
</div>

<script src="./js/question.js"></script>
<?php
require "./layouts/footer.php"
?>