<?php
use PHPUnit\Framework\TestCase;
include('Project.php');

class ProjectTest extends TestCase
{
    public function testMonthly()
    {
        $result = project("Monthly", 10);
        $this->assertEquals("$120", $result);
    }
    public function testYearly()
    {
        $result = project("Yearly", 120);
        $this->assertEquals("$120", $result);
    }
    public function testOnetime()
    {
        $result = project("One-time", 120);
        $this->assertEquals("$120", $result);
    }
    public function testError()
    {
        $result = project("One-time", '');
        $this->assertEquals("Can't calculate yearly donation.", $result);
    }
}
?>