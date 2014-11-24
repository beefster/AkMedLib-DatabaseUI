<?php # DISPLAY COMPLETE REGISTRATION PAGE.

# Set page title and display header section.
$page_title = 'Services' ;
include ( 'includes/header.html' ) ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('../connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a service ID.
  if ( empty( $_POST[ 'servicesID' ] ) )
  { $errors[] = 'Enter a valid service.' ; }
  else
  { $sID = mysqli_real_escape_string( $dbc, trim( $_POST[ 'serviceID' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'dateFilled' ] ) )
  { $errors[] = 'Enter a valid fill date.' ; }
  else
  { $dF = mysqli_real_escape_string( $dbc, trim( $_POST[ 'dateFilled' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'identifier' ] ) )
  { $errors[] = 'Enter a valid identifier.' ; }
  else
  { $i = mysqli_real_escape_string( $dbc, trim( $_POST[ 'identifier' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'serviceCode' ] ) )
  { $errors[] = 'Enter a valid service code.' ; }
  else
  { $sC = mysqli_real_escape_string( $dbc, trim( $_POST[ 'serviceCode' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'quantityFilled' ] ) )
  { $errors[] = 'Enter a valid fill quantity.' ; }
  else
  { $qF = mysqli_real_escape_string( $dbc, trim( $_POST[ 'serviceID' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'unitPrice' ] ) )
  { $errors[] = 'Enter a valid unit price.' ; }
  else
  { $uP = mysqli_real_escape_string( $dbc, trim( $_POST[ 'unitPrice' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'total' ] ) )
  { $errors[] = 'Enter a valid service.' ; }
  else
  { $t = mysqli_real_escape_string( $dbc, trim( $_POST[ 'total' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'paid' ] ) )
  { $errors[] = 'Enter a valid if paid.' ; }
  else
  { $p = mysqli_real_escape_string( $dbc, trim( $_POST[ 'paid' ] ) ) ; }

  # Check for a service ID.
  if ( empty( $_POST[ 'dateEntered' ] ) )
  { $errors[] = 'Enter a valid entry date.' ; }
  else
  { $dE = mysqli_real_escape_string( $dbc, trim( $_POST[ 'dateEntered' ] ) ) ; }

  # Adds to the records
  if ( empty( $errors ) )
  {
    $q = "INSERT INTO table (variable1, variable2) VALUES ('$sID', '$dF', '$i', '$sC', '$qF', '$uP', '$t', '$p', '$dE', NOW() )";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Registered!</h1><p>You are now registered.</p><p><a href="login.php">Login</a></p>'; }

    # Close database connection.
    mysqli_close($dbc);

    # Display footer section and quit script:
    include ('includes/footer.html');
    exit();
  }
  # Or report errors.
  else
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  }
}
?>

<!-- Display body section with sticky form. -->
<h1>Add Services</h1>
<form action="register.php" method="post">
<p>Services ID: <input type="text" name="servicesID" size="20" value="<?php if (isset($_POST['servicesID'])) echo $_POST['servicesID']; ?>"></p>
<p>Date Filled: <input type="date" name="dateFilled" size="50" value="<?php if (isset($_POST['dateFilled'])) echo $_POST['dateFilled']; ?>"></p>
<p>Identifier: <input type="identifier" name="email" size="50" value="<?php if (isset($_POST['identifier'])) echo $_POST['identifier']; ?>"></p>
<p>Service Code: <input type="text" name="serviceCode" size="20" value="<?php if (isset($_POST['serviceCode'])) echo $_POST['serviceCode']; ?>"></p>
<p>Quantity Filled: <input type="text" name="quantityFilled" size="20" value="<?php if (isset($_POST['quantityFilled'])) echo $_POST['quantityFilled']; ?>"></p>
<p>Unit Price: <input type="double" name="unitPrice" size="50" value="<?php if (isset($_POST['unitPrice'])) echo $_POST['unitPrice']; ?>"></p>
<p>Total: <input type="text" name="total" size="20" value="<?php if (isset($_POST['total'])) echo $_POST['total']; ?>"></p>
<p>Paid: <input type="double" name="double" size="20" value="<?php if (isset($_POST['paid'])) echo $_POST['paid']; ?>"></p>
<p>Date Entered: <input type="date" name="dateEntered" size="50" value="<?php if (isset($_POST['dateEntered'])) echo $_POST['dateEntered']; ?>"></p>
<p><input type="submit" value="Add Record"></p>
</form>

<?php

# Display footer section.
include ( 'includes/footer.html' ) ;

?>
