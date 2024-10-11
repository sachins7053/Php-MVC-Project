<?php
namespace App\Controllers;
use App\Models\User;

class AuthController extends BaseController {

    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index(): void {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate inputs
            if (!empty($email) && !empty($password)) {
                $user = $this->userModel->login($email, $password);

                if ($user) {
                    // Store user info in session
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];

                    header('Location: /skrishna/admin/dashboard');
                } else {
                    echo "Invalid email or password.";
                }
            } else {
                echo "Please fill in all fields.";
            }
        } else {
            require_once __DIR__ . '/../views/Dashboard/login.php';
        }
        
    }

    public function register(): void {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Validate inputs (you can extend validation)
            if (!empty($username) && !empty($email) && !empty($password)) {
                $userRegistered = $this->userModel->AddNewUser($username, $email, $password);

                if ($userRegistered) {
                    echo "User registered successfully!";
                } else {
                    echo "Error: Unable to register user.";
                }
            } else {
                echo "Please fill in all fields.";
            }
        }else{

            require_once __DIR__ . '/../views/Dashboard/register.php';
        }
    }

     // Logout user
     public function logout() {
        session_destroy();
        header('Location: /login');
    }


   
}
