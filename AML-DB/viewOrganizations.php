<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Organizations</title>
    </head>

    <body>
        <p><em><strong>Organizations Lookup</strong></em> </p>
        <p>&nbsp;</p>
        <table width="746" border="0" cellspacing="2" cellpadding="2">
            <tr>
                <td width="180">Lookup By Org Code</td>
                <td width="180"><form id="form1" name="form1" method="post" action="">
                        <label for="lookuporgcode"></label>
                        <select name="lookuporgcode" id="lookuporgcode">
                        </select>
                    </form></td>
                <td width="180">Contact Information:</td>
                <td width="180">&nbsp;</td>
            </tr>
            <tr>
                <td>Organization Code:</td>
                <td><input type="text" name="orgcode" id="orgcode" /></td>
                <td>First Name</td>
                <td><input type="text" name="firstname" id="firstname" /></td>
            </tr>
            <tr>
                <td>Organization Name:</td>
                <td><form id="form2" name="form2" method="post" action="">
                        <label for="orgname"></label>
                        <input type="text" name="orgname" id="orgname" />
                    </form></td>
                <td>Last Name</td>
                <td><input type="text" name="lastname" id="lastname" /></td>
            </tr>
            <tr>
                <td>Physical Address:</td>
                <td><input type="text" name="PhysicalAddress" id="PhysicalAddress" /></td>
                <td>Title:</td>
                <td><input type="text" name="title" id="title" /></td>
            </tr>
            <tr>
                <td>City:</td>
                <td><input type="text" name="City" id="City" /></td>
                <td>Phone Number:</td>
                <td><input type="text" name="phonenumber" id="phonenumber" /></td>
            </tr>
            <tr>
                <td>State:</td>
                <td><input type="text" name="state" id="state" /></td>
                <td>Fax Number:</td>
                <td><input type="text" name="faxnumber" id="faxnumber" /></td>
            </tr>
            <tr>
                <td>Zip-Code:</td>
                <td><input type="text" name="zipcode" id="zipcode" /></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Billing Address:</td>
                <td><strong>
                        <input type="text" name="Billing Address" id="Billing Address" />
                    </strong></td>
                <td>Is Non-Profit:</td>
                <td><p>
                        <label>
                            <input type="radio" name="isTC" value="Yes" id="isnonprofit" />
                            Yes</label>
                        <label>
                            <input type="radio" name="isTC" value="No" id="isTC_1" />
                            No</label>
                        <br />
                    </p></td>
            </tr>
            <tr>
                <td>Billing City:</td>
                <td><input type="text" name="Billing City" id="Billing City" /></td>
                <td>Pays Fees:</td>
                <td><p>
                        <label>
                            <input type="radio" name="isTC" value="Yes" id="paysfees" />
                            Yes</label>
                        <label>
                            <input type="radio" name="isTC" value="No" id="isTC_1" />
                            No</label>
                        <br />
                    </p></td>
            </tr>
            <tr>
                <td>Billing State:</td>
                <td><input type="text" name="Billing state" id="Billing state" /></td>
                <td>Active:</td>
                <td><form id="form3" name="form3" method="post" action="">
                        <p>
                            <label>
                                <input type="radio" name="IsSDI" value="Yes" id="active" />
                                Yes</label>
                            <label>
                                <input type="radio" name="IsSDI" value="No" id="IsSDI_1" />
                                No</label>
                            <br />
                        </p>
                    </form></td>
            </tr>
            <tr>
                <td>Billing Zip-Code:</td>
                <td><input type="text" name="Billing zipcode" id="Billing zipcode" /></td>
                <td>Notes:</td>
                <td><input type="text" name="notes" id="notes" /></td>
            </tr>
        </table>
        <p>Organizations:</p>
        <p>&nbsp;</p>
        <form id="form12" name="form12" method="post" action="">
            <input type="submit" name="editOrganization" id="editOrganization" value= "       Edit       " />
            <input type="submit" name="addOrganization" id="addOrganization"  value="       Add        " />
            <input type="submit" name="deleteOrganization" id="deleteOrganization" value="      Delete      " />
        </form>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    </body>
</html>
