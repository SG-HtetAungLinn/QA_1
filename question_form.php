<?php
require "./app/check_auth.php";
require "./app/common.php";

$module = $_GET['module'] ?? '';
if (empty($module)) {
    header("Location: index.php");
    exit;
}

$module_data = getModuleByCode($module);
if (!$module_data) {
    header("Location: index.php");
    exit;
}

$title = "Ask Question";
$base_url = "./";
$module_name = $module_data['name'];
require "./layouts/header.php";
?>

<div class="container">
    <div class="my-5 d-flex justify-content-center">
        <div class="col-md-6 col-12">
            <h1 class="text-center text-theme mb-3"><?= $module_name ?></h1>
            <div class="card">
                <div class="card-body">
                    <form id="question_form">
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter question title" />
                            <small id="title_error" class="text-danger" style="display: none;"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="question" class="form-label">Question</label>
                            <textarea name="question" id="question" class="form-control" placeholder="Enter question"></textarea>
                            <small id="question_error" class="text-danger" style="display: none;"></small>
                        </div>
                        <input type="hidden" name="module" value="<?= $module ?>">
                        <input type="hidden" name="form_submit" value="1" />
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-theme w-100 mb-2">Submit</button>
                            <a href="question_list.php?module=<?= $module_data['code'] ?>" class="btn btn-secondary w-100">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/question_form.js"></script>
<?php require "./layouts/footer.php" ?>