<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p><strong><em>Services Lookup.
</em></strong></p>
<p>&nbsp;</p>
<table width="374" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="180">Lookup By Last Name:</td>
    <td width="180"><form id="form1" name="form1" method="post" action="">
      <label for="Select (by last name)"></label>
      <select name="select1" id="select1">
      </select>
    </form></td>
  </tr>
  <tr>
    <td>Services ID:</td>
    <td><form id="form2" name="form2" method="post" action="">
      <span id="spryselect1"><span class="selectRequiredMsg">Please select an item.</span></span>
    </form>
      <form id="form3" name="form3" method="post" action="">
        <label for="Services ID"></label>
        <input type="text" name="Services ID" id="Services ID" />
    </form></td>
  </tr>
  <tr>
    <td>Date Filled:</td>
    <td><form id="form4" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <span id="sprytextfield1">
      <label for="Date Filled"></label>
      <input name="Date Filled" type="text" id="Date Filled" />
      <span class="textfieldRequiredMsg">A value is required.</span></span>
    </form></td>
  </tr>
  <tr>
    <td>Service Code:</td>
    <td><form id="form10" name="form10" method="post" action="">
      <label for="Service Code"></label>
      <input type="text" name="Service Code" id="Service Code" />
    </form></td>
  </tr>
  <tr>
    <td>Quantitiy Filled:</td>
    <td><form id="form5" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <input type="text" name="Quantity Filled" id="Services ID" />
    </form></td>
  </tr>
  <tr>
    <td>Unit Price:</td>
    <td><form id="form6" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <input type="text" name="Unit Price" id="Services ID" />
    </form></td>
  </tr>
  <tr>
    <td>Total:</td>
    <td><form id="form7" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <input type="text" name="Total" id="Services ID" />
    </form></td>
  </tr>
  <tr>
    <td>Paid:</td>
    <td><form id="form11" name="form11" method="post" action="">
      <p>
        <label>
          <input type="radio" name="RadioGroup1" value="Yes" id="RadioGroup1_0" />
          Yes</label>
        <input type="radio" name="RadioGroup1" value="No" id="RadioGroup1_1" />
        No<br />
    </p>
    </form></td>
  </tr>
  <tr>
    <td>Date Entered:</td>
    <td><form id="form8" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <label for="Date Entered"></label>
      <input type="text" name="Date Entered" id="Date Entered" />
    </form></td>
  </tr>
  <tr>
    <td>Identifier</td>
    <td><form id="form9" name="form3" method="post" action="">
      <label for="Services ID"></label>
      <input type="text" name="Identifier" id="Services ID" />
    </form></td>
  </tr>
</table>
<form id="form12" name="form12" method="post" action="">
  <input type="submit" name="EditService" id="EditService" value="Edit Service" />
  <input type="submit" name="DeleteService" id="DeleteService" value="Delete Service" />
  <input type="submit" name="addNewService" id="addNewService" value="Add New Service" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>
