

<html>
<body>
  <h3>Information provided:</h3>
Name: <?php echo $_POST["fname"] . " " . $_POST["lname"];?><br>
Address: <?php echo $_POST["street"] . " " . $_POST["city"] . ", " . $_POST["state"] . " " . $_POST["postcode"] . ", " . $_POST["country"]; ?><br>
Email: <?php echo $_POST["email"]; ?><br>
Phone Number: <?php echo $_POST["phone"]; ?><br>
Preferred Form of Contact: <?php echo $_POST["contact"]; ?><br>
Preferred Currency: <?php echo $_POST["currency"]; ?><br>
Frequency of Donations: <?php echo $_POST["frequency"]; ?><br>
Donation Amount: <?php echo $_POST["amount"]; ?><br>
Comments: <?php echo htmlspecialchars($_POST["comments"]); ?><br>
<h3>Projected Yearly Donation:</h3>
<?php
$freq = $_POST["frequency"];
$amt = $_POST["amount"];
project("$freq", $amt)

?><br>
<button>Confirm</button>
<form action="cancel.html">
    <input type="submit" value="Cancel" />
</form>

</body>
</html>
<?php 

function project($frequency, $amount) {
  if ($frequency == "One-time" || $frequency == "Yearly"  ) {
    echo "$" . $amount;
  }
  elseif ($frequency == "Monthly") {
    echo "$" . $amount * 12;
  }
}
?>
