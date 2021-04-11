<?php 

function project($frequency, $amount) {
  if ($amount) {
    if ($frequency == "One-time" || $frequency == "Yearly"  ) {
      return "$" . $amount;
    }
    elseif ($frequency == "Monthly") {
      return "$" . $amount * 12;
    }
  }
  else {
    return "Can't calculate yearly donation.";
  }
}
?>