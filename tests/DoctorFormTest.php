<?php

use PHPUnit\Framework\TestCase;

include __DIR__ . '/../connection.php';


ini_set('display_errors', 1);
error_reporting(E_ALL);

class DoctorFormTest extends TestCase
{
    private $backupPost;


    protected function setUp(): void
    {
        $this->backupPost = $_POST;
    }

    protected function tearDown(): void
    {
        $_POST = $this->backupPost;
    }

    public function testFirstNameEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => '',
            'l_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'specialist' => 'Cardiology',
            'qualification' => 'MD',
            'pswd' => 'securepassword123',
        ];

        ob_start();

        include 'Admin\add_doctor.php';
        $output = ob_get_clean(); // Get the output

        $this->assertStringContainsString("Please Enter Your  First Name", $output);
    }

    public function testLastNameEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => '',
            'email' => 'johndoe@example.com',
            'specialist' => 'Cardiology',
            'qualification' => 'MD',
            'pswd' => 'securepassword123',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Please Enter Your  Last Name", $output);
    }

    public function testEmailEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => 'Doe',
            'email' => '',
            'specialist' => 'Cardiology',
            'qualification' => 'MD',
            'pswd' => 'securepassword123',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Please Enter Your Email", $output);
    }

    public function testSpecialismEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'specialist' => '',
            'qualification' => 'MD',
            'pswd' => 'securepassword123',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Please Enter Your Specialism", $output);
    }

    public function testQualificationEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'specialist' => 'Cardiology',
            'qualification' => '',
            'pswd' => 'securepassword123',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Please Enter Your Qualification Section", $output);
    }

    public function testPasswordEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'specialist' => 'Cardiology',
            'qualification' => 'MD',
            'pswd' => '',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Please Enter Your Password", $output);
    }

    public function testPasswordLengthValidation()
    {
        $_POST = [
            'submit' => true,
            'id' => '1',
            'f_name' => 'John',
            'l_name' => 'Doe',
            'email' => 'johndoe@example.com',
            'specialist' => 'Cardiology',
            'qualification' => 'MD',
            'pswd' => 'short',
        ];

        ob_start();
        include 'Admin\add_doctor.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Your Password Should Be More Than 8 Characters Long", $output);
    }
}
