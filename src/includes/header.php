<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <!-- Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts - Cairo -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/asset/css/style.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo SITE_URL; ?>">
                <img src="<?php echo SITE_URL; ?>/asset/images/logo.png" alt="YoungDev" height="40">
                <?php echo SITE_NAME; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/pages/projects.php">
                            <i class="fas fa-code"></i>
                            المشاريع
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/pages/teams.php">
                            <i class="fas fa-users"></i>
                            الفرق
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo SITE_URL; ?>/pages/community.php">
                            <i class="fas fa-comments"></i>
                            المجتمع
                        </a>
                    </li>
                </ul>
                <div class="nav-buttons">
    <?php if(isLoggedIn()): ?>
        <a href="<?php echo SITE_URL; ?>/pages/profile.php" class="btn btn-outline-warning me-2">
            <i class="fas fa-user"></i>
            الملف الشخصي
        </a>
    <?php else: ?>
        <a href="<?php echo SITE_URL; ?>/pages/login.php" class="btn btn-outline-warning me-2">
            <i class="fas fa-sign-in-alt"></i>
            دخول
        </a>
        <a href="<?php echo SITE_URL; ?>/pages/register.php" class="btn btn-warning">
            <i class="fas fa-user-plus"></i>
            حساب جديد
        </a>
    <?php endif; ?>
</div>
            </div>
        </div>
    </nav>
