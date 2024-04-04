<?php

use PHPUnit\Framework\TestCase;

include __DIR__ . '/../connection.php';

class AppointmentBookingTest extends TestCase
{
    private $backupPost;

    protected function setUp(): void
    {
        parent::setUp();
        $this->backupPost = $_POST;
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function tearDown(): void
    {
        $_POST = $this->backupPost;
        session_unset();
        parent::tearDown();
    }

    public function testBookingDateEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'booking_date' => '',
            'booking_time' => '10:00',
            'pid' => '123',
            'sid' => '456',
        ];

        ob_start();
        include 'Doctor\appointment_detail.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Select Date", $output);
    }

    public function testBookingTimeEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'booking_date' => '2023-04-03',
            'booking_time' => '',
            'pid' => '123',
            'sid' => '456',
        ];

        ob_start();
        include 'Doctor\appointment_detail.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Select Time", $output);
    }

    public function testPIDEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'booking_date' => '2023-04-03',
            'booking_time' => '10:00',
            'pid' => '',
            'sid' => '456',
        ];

        ob_start();
        include 'Doctor\appointment_detail.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Enter Your ID", $output);
    }

    public function testSIDEmptyValidation()
    {
        $_POST = [
            'submit' => true,
            'booking_date' => '2023-04-03',
            'booking_time' => '10:00',
            'pid' => '123',
            'sid' => '',
        ];

        ob_start();
        include 'Doctor\appointment_detail.php';
        $output = ob_get_clean();

        $this->assertStringContainsString("Enter This Id", $output);
    }


}
