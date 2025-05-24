<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'QA Project' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./js/jquery/jquery.min.js" type="text/javascript"></script>

</head>

<body>
    <button class="sidebar-toggle-btn btn-sm" id="sidebarToggleBtn"><i class="fas fa-bars" id="sidebarToggleIcon"></i></button>
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <aside class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <a href="#">
                <img src="./img/logo.png" alt="Logo">
            </a>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li class="nav-item">
                    <a class="nav-link text-theme" aria-current="page" href="index.php"><i class="fas fa-home me-2"></i><span>Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-theme" href="about.php"><i class="fas fa-info-circle me-2"></i><span>About Us</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-theme" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i><span>Logout</span></a>
                </li>
            </ul>
        </nav>
        <div class="sidebar-user">
            <?php if (isset($_SESSION['user'])) { ?>
                <?= $_SESSION['user']['username'] ?? '' ?>
                <span class="badge bg-theme ms-2"><?= $_SESSION['user']['role'] ?? '' ?></span>
            <?php } ?>
        </div>
    </aside>