
<!--IMPORTS (CSS, etc.) -->
<link rel="stylesheet" type="text/css" href="Style.css" media="screen" />
<?php require('connect.php'); ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title> Organization </title>
    </head>

    <!--TODO: fix this-->
    <form action="myform.php" method="post">

        <fieldset>
            <legend>Edit Organization</legend>

            <div> <!--Not sure what div does yet-->
                <fieldset>
                    <legend>Organization</legend>
                    Name: <input type="text" name="Org_Name" /><br />
                    Code: <input type="text" name="Org_Code" /> Note: This should go through the entire db and change this code everywhere<br />
                    <input type="checkbox" name="Active" value="Yes" checked="checked" /> Active
                </fieldset>

                <fieldset>
                    <legend>Physical Address</legend>
                    Address: <input type="text" name="Address_Line_1" /><br />
                    Second Line: <input type="text" name="Address_Line_2" /><br />
                    City:<input type="text" name="City" /><br />
                    State:<input type="text" name="State_Code" /><br />
                    Zip Code:<input type="text" name="Zip_Code" /><br />
                </fieldset>


                <fieldset>
                    <legend>Mailing Address</legend>
                    Address: <input type="text" name="Address_Line_1" /><br />
                    Second Line: <input type="text" name="Address_Line_2" /><br />
                    City:<input type="text" name="City" /><br />
                    State:<input type="text" name="State_Code" /><br />
                    Zip Code:<input type="text" name="Zip_Code" /><br />
                </fieldset>
            </div>
            <div>  
                <fieldset>
                    <legend>Contact Information</legend>
                    First Name <input type="text" name="Address_Line_1" /><br />
                    Last Name <input type="text" name="Address_Line_2" /><br />
                    Title <input type="text" name="City" /><br />
                    Phone <input type="text" name="State_Code" /><br />
                    Fax <input type="text" name="Zip_Code" /><br />
                </fieldset>

                <fieldset>
                    <legend>Financial</legend>
                    <input type="checkbox" name="Nonprofit" value="Nonprofit" checked="checked" /> Nonprofit<br />
                    <input type="checkbox" name="PaysFee" value="Pays Fee" checked="checked" /> Pays Fee
                </fieldset>
            </div>

            <fieldset>
                <input type="submit" value="Save">
                <input type="submit" value="Back">  - todo: return to org homepage
            </fieldset>
        </fieldset>

    </form>

<?php 
    


?>

</html>
