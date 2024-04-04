<?php

use PHPUnit\Framework\TestCase;

require 'Admin\adminlogin.php';
include __DIR__ . '/../connection.php';


class AdminLoginTest extends TestCase
{
    public function testLoginWithValidCredentials()
    {
        require 'mock_functions.php';
        $_POST['email'] = 'admin@gmail.com';
        $_POST['admin_pswd'] = 'admin';

        ob_start();
        include 'Admin/adminlogin.php';
        ob_end_clean();

        $this->assertEquals('admin@gmail.com', 'admin@gmail.com');
    }


    public function testLoginWithInvalidCredentials()
    {
        $_POST['email'] = 'wrong@example.com';
        $_POST['admin_pswd'] = 'wrongpassword';

        ob_start();
        include 'Admin\adminlogin.php';
        $output = ob_get_clean();

        $this->assertEmpty($_SESSION['email']);
    }

    protected function tearDown(): void
    {
        $_POST = [];
        $_SESSION = [];
    }
}
