<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>People</title>
</head>

<body>
<p><em><strong>Person Lookup</strong></em> </p>
<p>&nbsp;</p>
<table width="746" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td width="180">Lookup By Last Name:</td>
    <td width="180"><form id="form1" name="form1" method="post" action="">
      <label for="LastNameLookup2"></label>
      <select name="LastNameLookup" id="LastNameLookup2">
      </select>
    </form></td>
    <td width="180">Phone Number:</td>
    <td width="180"><input type="text" name="phonenumber" id="phonenumber" /></td>
  </tr>
  <tr>
    <td>Search Cat/Occ Code:</td>
    <td><select name="SeachCat/OccCode" id="SeachCat/OccCode">
    </select></td>
    <td>Fax Number:</td>
    <td><input type="text" name="faxnumber" id="faxnumber" /></td>
  </tr>
  <tr>
    <td>First Name:</td>
    <td><form id="form2" name="form2" method="post" action="">
      <label for="FirstName"></label>
      <input type="text" name="FirstName" id="FirstName" />
    </form></td>
    <td>Email:</td>
    <td><input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="LastName" id="LastName" /></td>
    <td>Notes:</td>
    <td><input type="text" name="notes" id="notes" /></td>
  </tr>
  <tr>
    <td>Title:</td>
    <td><input type="text" name="Title" id="Title" /></td>
    <td>Department:</td>
    <td><input type="text" name="department" id="department" /></td>
  </tr>
  <tr>
    <td height="29">Address:</td>
    <td><input type="text" name="Address" id="Address" /></td>
    <td>Is TC:</td>
    <td><p>
      <label>
        <input type="radio" name="isTC" value="Yes" id="isTC_0" />
        Yes</label>
      <label>
        <input type="radio" name="isTC" value="No" id="isTC_1" />
        No</label>
      <br />
    </p></td>
  </tr>
  <tr>
    <td>City:</td>
    <td><input type="text" name="City" id="City" /></td>
    <td>Is SDI:</td>
    <td><form id="form3" name="form3" method="post" action="">
      <p>
        <label>
          <input type="radio" name="IsSDI" value="Yes" id="IsSDI_0" />
          Yes</label>
        <label>
          <input type="radio" name="IsSDI" value="No" id="IsSDI_1" />
          No</label>
        <br />
      </p>
    </form></td>
  </tr>
  <tr>
    <td>State:</td>
    <td><input type="text" name="state" id="state" /></td>
    <td>Prospero Pin:</td>
    <td><input type="text" name="prosperopin" id="prosperopin" /></td>
  </tr>
  <tr>
    <td>Zip-Code:</td>
    <td><input type="text" name="zipcode" id="zipcode" /></td>
    <td>Proxy Pin:</td>
    <td><input type="text" name="proxypin" id="proxypin" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Creation Date:</td>
    <td><input type="text" name="creationdate" id="creationdate" /></td>
  </tr>
</table>
<p>Organizations:</p>
<p>&nbsp;</p>
<form id="form12" name="form12" method="post" action="">
  <input type="submit" name="EditService" id="EditService" value="Edit Person" />
  <input type="submit" name="DeleteService" id="DeleteService" value="Delete Person" />
  <input type="submit" name="addNewService" id="addNewService" value="Add New Person" />
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
