
<!--IMPORTS (CSS, etc.) -->
<link rel="stylesheet" type="text/css" href="Style.css" media="screen" />
<?php require('connect.php'); ?>


<html>
    <head>
        <meta charset="UTF-8">
        <title> Organization </title>
    </head>

     <!--TODO: build navigation section-->
    <nav>
        
        
        
        
        
        
        
    </nav>
    
    
    
    
    
    <!--TODO: fix this-->
    <form action="myform.php" method="post">

        <fieldset>
            <legend>Edit Organization</legend>

            <div id ="top">
                <fieldset>
                    <legend>Organization</legend>
                    Name: <input type="text" name="Org_Name" /><br />
                    Code: <input type="text" name="Org_Code" /> Note: This should go through the entire db and change this code everywhere<br />
                    <input type="checkbox" name="Active" value="Yes" checked="checked" /> Active
                </fieldset>

                <fieldset>
                    <legend>Physical Address</legend>
                    Address: <input type="text" name="Physical_Address_Line_1" /><br />
                    Second Line: <input type="text" name="Physical_Address_Line_2" /><br />
                    City:<input type="text" name="Physical_City" /><br />
                    State:<input type="text" name="Physical_State_Code" /><br />
                    Zip Code:<input type="text" name="Physical_Zip_Code" /><br />
                </fieldset>

                <fieldset>
                    <legend>Mailing Address</legend>
                    Address: <input type="text" name="Mailing_Address_Line_1" /><br />
                    Second Line: <input type="text" name="Mailing_Address_Line_2" /><br />
                    City:<input type="text" name="Mailing_City" /><br />
                    State:<input type="text" name="Mailing_State" /><br />
                    Zip Code:<input type="text" name="Mailing_Zip_Code" /><br />
                </fieldset>

                <fieldset>
                    <legend>Contact Information</legend>
                    First Name <input type="text" name="Address_Line_1" /><br />
                    Last Name <input type="text" name="Address_Line_2" /><br />
                    Title <input type="text" name="City" /><br />
                    Phone <input type="tel" name="" /><br />
                    Fax <input type="tel" name="Fax" /><br />
                </fieldset>
                
                <fieldset>
                    <legend>Notes</legend>
                    <textarea rows="5" cols="60" wrap="physical" name="Notes"/></textarea><br />
                </fieldset>

                <fieldset>
                    <legend>Financial</legend>
                    <input type="checkbox" name="Nonprofit" value="Nonprofit" checked="checked" /> Nonprofit<br />
                    <input type="checkbox" name="PaysFee" value="Pays Fee" checked="checked" /> Pays Fee
                </fieldset>
            </div>
            <div id="bottom">
            <fieldset>
                <input type="submit" value="Back">  - todo: return to org homepage
                <input type="submit" value="Save">
            </fieldset>
                </div>
        </fieldset>

    </form>

    <!--TODO: Build footer-->
    <footer>
         
        
    </footer>
    
<?php 
    


?>

</html>
