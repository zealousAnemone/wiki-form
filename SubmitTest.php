<?php
use PHPUnit\Framework\TestCase;

class SubmitTest extends TestCase
{
    public function testSubmit()
    {
        function project($frequency, $amount) {
            if ($frequency == "One-time" || $frequency == "Yearly"  ) {
              return "$" . $amount;
            }
            elseif ($frequency == "Monthly") {
              return "$" . $amount * 12;
            }
          }
        $result = project("Monthly", 10);
        $this->assertEquals("$120", $result);
    }
}
?>