<?php
require_once '../includes/config.php';

// تسجيل الخروج
session_destroy();

// إعادة التوجيه إلى صفحة تسجيل الدخول
header("Location: " . SITE_URL . "/pages/login.php");
exit;