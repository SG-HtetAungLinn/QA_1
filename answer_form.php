<?php
require "./app/check_auth.php";
require "./app/common.php";

$question_id = $_GET['question_id'] ?? '';
$module = $_GET['module'] ?? '';

if (empty($question_id) || empty($module)) {
    header("Location: index.php");
    exit;
}

$question = getQuestionById($question_id);
if (!$question) {
    header("Location: index.php");
    exit;
}

$module_data = getModuleByCode($module);
$title = "Answer Question";
$base_url = "./";

require "./layouts/header.php";
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
            <h1 class="text-center text-theme mb-4">Answer Question</h1>

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Question from: <?= $question['student_id'] ?></h5>
                    <span><?= date('d/m/Y h:i a', strtotime($question['created_at'])) ?></span>
                </div>
                <div class="card-body">
                    <h3><?= $question['title'] ?></h3>
                    <p><?= $question['content'] ?></p>
                    <small class="text-muted">Module: <?= $module_data['name'] ?? $module ?></small>
                </div>
            </div>

            <form id="answer_form">
                <input type="hidden" name="question_id" value="<?= $question_id ?>">
                <input type="hidden" name="module" value="<?= $module ?>">

                <div class="mb-3">
                    <label for="answer" class="form-label">Your Answer</label>
                    <textarea class="form-control" id="answer" name="answer" rows="6" required placeholder="Enter Your Answer"></textarea>
                    <small id="answer_error" class="text-danger" style="display: none;"></small>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-theme">Submit Answer</button>
                    <a href="question_list.php?module=<?= $module ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./js/answer_form.js"></script>
<?php require "./layouts/footer.php" ?>