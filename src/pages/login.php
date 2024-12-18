<?php 
require_once '../includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $email = cleanInput($_POST['email']);
        $password = $_POST['password'];
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->execute([$email, $password]);
        $user = $stmt->fetch();
        
        if(!$user) {
            throw new Exception("البريد الإلكتروني أو كلمة المرور غير صحيحة");
        }
        
        // تسجيل الدخول
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_type'] = $user['type'];
        $_SESSION['username'] = $user['username'];
        
        header("Location: " . SITE_URL . "/pages/dashboard.php");
        exit;
        
    } catch(Exception $e) {
        $error = $e->getMessage();
    }
}

require_once '../includes/header.php';
?>

<div class="login-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-card">
                    <div class="text-center mb-4">
                        <h2 class="text-warning mb-3">تسجيل الدخول</h2>
                        <p class="text-muted">مرحباً بعودتك!</p>
                    </div>

                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle"></i>
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input type="email" 
                                       class="form-control" 
                                       name="email" 
                                       required>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input type="password" 
                                       class="form-control" 
                                       name="password" 
                                       required>
                                <button class="btn btn-outline-secondary" 
                                        type="button" 
                                        onclick="togglePassword(this)">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-sign-in-alt"></i>
                                تسجيل الدخول
                            </button>
                        </div>

                        <div class="text-center">
                            <p class="mb-2">
                                ليس لديك حساب؟
                                <a href="<?php echo SITE_URL; ?>/pages/register.php" class="text-warning">
                                    إنشاء حساب جديد
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword(button) {
    const input = button.parentElement.querySelector('input');
    const icon = button.querySelector('i');
    
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>

<?php require_once '../includes/footer.php'; ?>
