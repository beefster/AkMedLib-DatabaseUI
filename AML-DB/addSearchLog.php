<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Search Logs</title>
    </head>

    <body>
        <p><strong><em>Add Search Log</em></strong></p>
        <p>&nbsp;</p>
        <table width="432" border="0" cellspacing="2" cellpadding="2">
            <tr>
                <td width="274">Identifier by Last Name:</td>
                <td width="144"><label for="identifier"></label>
                    <label for="identifierbylastname"></label>
                    <select name="identifierbylastname" id="identifierbylastname">
                    </select></td>
            </tr>
            <tr>
                <td>Date Requested:</td>
                <td><label for="daterequested"></label>
                    <input type="text" name="daterequested" id="daterequested" /></td>
            </tr>
            <tr>
                <td>Date Completed:</td>
                <td><label for="datecompleted"></label>
                    <input type="text" name="datecompleted" id="datecompleted" /></td>
            </tr>
            <tr>
                <td>Search User:</td>
                <td><label for="searchcatocccode">
                        <select name="searchuser" id="searchuser">
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td>Search Cat/Occ Code:</td>
                <td><select name="searchcatocccode" id="searchcatocccode">
                    </select></td>
            </tr>
            <tr>
                <td>Topic:</td>
                <td><input type="text" name="topic" id="topic" /></td>
            </tr>
            <tr>
                <td>Number of Citations Found:</td>
                <td><input type="text" name="numberofcitationsfound" id="numberofcitationsfound" /></td>
            </tr>
            <tr>
                <td>Number of Citations Sent:</td>
                <td><input type="text" name="numberofcitationssent" id="numberofcitationssent" /></td>
            </tr>
            <tr>
                <td>Billing Entered:</td>
                <td><p>
                        <label>
                            <input type="radio" name="RadioGroup1" value="Yes" id="RadioGroup1_0" />
                            Yes</label>
                        <label>
                            <input type="radio" name="RadioGroup1" value="No" id="RadioGroup1_1" />
                            No</label>
                        <br />
                    </p></td>
            </tr>
            <tr>
                <td>Delivery Method:</td>
                <td><label for="deliverymethod"></label>
                    <select name="deliverymethod" id="deliverymethod">
                    </select></td>
            </tr>
            <tr>
                <td>Marked Interesting:</td>
                <td><form id="form1" name="form1" method="post" action="">
                        <p>
                            <label>
                                <input type="radio" name="RadioGroup2" value="Yes" id="RadioGroup2_0" />
                                Yes</label>
                            <input type="radio" name="RadioGroup2" value="No" id="RadioGroup2_1" />
                            <label>No</label>
                            <br />
                        </p>
                    </form></td>
            </tr>
        </table>
        <p>
            <input type="submit" name="back" id="back" value="Back" />
            <input type="submit" name="addNewSearchLog" id="addNewSearchLog" value="addNewSearchLog" />
        </p>
    </body>
</html>
