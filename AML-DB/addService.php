<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services</title>
</head>

<?php
$page_title = 'Services';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require ('../connect_db.php');

    $errors = array();

    if (empty($_POST['servicesID'])) {
        $errors[] = 'Enter a valid service.';
    } else {
        $sID = mysqli_real_escape_string($dbc, trim($_POST['serviceID']));
    }

    if (empty($_POST['dateFilled'])) {
        $errors[] = 'Enter a valid fill date.';
    } else {
        $dF = mysqli_real_escape_string($dbc, trim($_POST['dateFilled']));
    }

    if (empty($_POST['identifier'])) {
        $errors[] = 'Enter a valid identifier.';
    } else {
        $i = mysqli_real_escape_string($dbc, trim($_POST['identifier']));
    }

    if (empty($_POST['serviceCode'])) {
        $errors[] = 'Enter a valid service code.';
    } else {
        $sC = mysqli_real_escape_string($dbc, trim($_POST['serviceCode']));
    }

    if (empty($_POST['quantityFilled'])) {
        $errors[] = 'Enter a valid fill quantity.';
    } else {
        $qF = mysqli_real_escape_string($dbc, trim($_POST['serviceID']));
    }

    if (empty($_POST['unitPrice'])) {
        $errors[] = 'Enter a valid unit price.';
    } else {
        $uP = mysqli_real_escape_string($dbc, trim($_POST['unitPrice']));
    }

    if (empty($_POST['total'])) {
        $errors[] = 'Enter a valid service.';
    } else {
        $t = mysqli_real_escape_string($dbc, trim($_POST['total']));
    }

    if (empty($_POST['paid'])) {
        $errors[] = 'Enter a valid if paid.';
    } else {
        $p = mysqli_real_escape_string($dbc, trim($_POST['paid']));
    }

    if (empty($_POST['dateEntered'])) {
        $errors[] = 'Enter a valid entry date.';
    } else {
        $dE = mysqli_real_escape_string($dbc, trim($_POST['dateEntered']));
    }

    if (empty($errors)) {
        $q = "INSERT INTO Services (ServicesID, DateFilled, Identifier, ServiceCode, QTYFilled, UnitPrice, Total, Paid, DateEntered) VALUES ('$sID', '$dF', '$i', '$sC', '$qF', '$uP', '$t', '$p', '$dE', NOW() )";
        $r = @mysqli_query($dbc, $q);
        if ($r) {
            echo '<h1>Service added!</h1><p>The service has been added.</p><p><a href="services.php">Back to services</a></p>';
        }

        # Close database connection.
        mysqli_close($dbc);

        # Display footer section and quit script:
        include ('includes/footer.html');
        exit();
    }
    # Or report errors.
    else {
        echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>';
        foreach ($errors as $msg) {
            echo " - $msg<br>";
        }
        echo 'Please try again.</p>';
        # Close database connection.
        mysqli_close($dbc);
    }
}
?>

<body>
<p><strong><em>Add New Service</em></strong></p>
<p>&nbsp;</p>
<table width="585" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="141">Services ID:</td>
    <td width="168"><form id="form1" name="form1" method="post" action="">
      <input type="text" name="servicesID" size="25" value="<?php if (isset($_POST['servicesID'])) echo $_POST['servicesID']; ?>" />
    </form></td>
    <td width="105">&nbsp;</td>
    <td width="145">&nbsp;</td>
  </tr>
  <tr>
    <td>Date Filled:</td>
    <td><input name="DateFilled" type="date" id="DateFilled" value="<?php if (isset($_POST['dateFilled'])) echo $_POST['dateFilled']; ?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Identifier:</td>
    <td><?php 

require( '../connect_mldb.php' ) ;

function show_Identifiers( $dbc )
{
  $q = 'SELECT * FROM services' ;
  $r = mysqli_query( $dbc , $q ) ;
  $num = mysqli_num_rows( $r ) ;
   if ( $num > 0 )
  {
  	echo "<select name='identifier'>";
	
  	while ( $row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) ) 
     {
     	echo "<option value='" . $row['identifier'] . "'>" . $row['identifier'] . "</option>";
      }
      echo "</select>";
  } else { }
}

show_Identifiers($dbc) ;

mysqli_close( $dbc ) ;
?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Service Code:</td>
    <td><?php 

require( '../connect_mldb.php' ) ;

function show_ServiceCodes( $dbc )
{
  $q = 'SELECT * FROM services' ;
  $r = mysqli_query( $dbc , $q ) ;
  $num = mysqli_num_rows( $r ) ;
   if ( $num > 0 )
  {
  	echo "<select name='servicecodes'>";
	
  	while ( $row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) ) 
     {
     	echo "<option value='" . $row['servicecodes'] . "'>" . $row['sercvicecodes'] . "</option>";
      }
      echo "</select>";
  } else { }
}

show_Identifiers($dbc) ;

mysqli_close( $dbc ) ;
?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Quantity Filled:</td>
    <td><input name="QuantityFilled" type="text" id="QuantityFilled" value="<?php if (isset($_POST['quantityFilled'])) echo $_POST['quantityFilled']; ?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Unit Price:</td>
    <td><input name="UnitPrice" type="text" id="UnitPrice" value="<?php if (isset($_POST['unitPrice'])) echo $_POST['unitPrice']; ?>" /></td>
    <td>Profit Fee:</td>
    <td><label for="ProfitFee"></label>
    <input type="text" name="ProfitFee" id="ProfitFee" /></td>
  </tr>
  <tr>
    <td>Total:</td>
    <td><input name="Total" type="text" id="Total" value="<?php if (isset($_POST['total'])) echo $_POST['total']; ?>" /></td>
    <td>Non-Profit Fee:</td>
    <td><label for="NonProfitFee"></label>
    <input type="text" name="NonProfitFee" id="NonProfitFee" /></td>
  </tr>
  <tr>
    <td>Paid:</td>
    <td><form id="form11" name="form11" method="post" action="">
      <p>
        <label>
          <input type="radio" name="RadioGroup1" value="<?php if (isset($_POST['paid'])) echo "checked"; ?> value = &quot;yes&quot;&gt;" id="RadioGroup1_0" />
          Yes</label>
        <input name="RadioGroup1" type="radio" id="RadioGroup1_1" value="<?php if (isset($_POST['paid'])) echo "checked"; ?> value = &quot;no&quot;&gt;" />
        No<br />
      </p>
    </form></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Date Entered:</td>
    <td><input name="DateEntered" type="date" id="DateEntered" value="<?php if (isset($_POST['dateEntered'])) echo $_POST['dateEntered']; ?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<form id="form2" name="form2" method="post" action="">
  <input type="submit" name="Save Record" id="Save Record" value="Save Record" />
</form>
<p>&nbsp;</p>
</body>
</html>
