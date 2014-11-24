
TODO: Allow user to look up orgs

Include buttons for add, edit, and delete

<!--IMPORTS (CSS, etc.) -->
<link rel="stylesheet" type="text/css" href="Style.css" media="screen" />

<html>
    <head>
        <meta charset="UTF-8">
        <title> Organization </title>
    </head>

    <!--TODO: fix this-->
    <form action="myform.php" method="post">

        <fieldset>
            <legend>Organizations</legend>

            <div> <!--Not sure what div does yet-->
                <fieldset>
                    <legend>Search Criteria</legend>
                    Name: <input type="text" name="Org_Name" /><br />
                    Code: <input type="text" name="Org_Code" /><br />
                    <input type="checkbox" name="Include_Inactives" value="No" checked="not_checked" />  
                    <input type="submit" value="Filter_Results">
                </fieldset>


            </div>

            <fieldset>
                <input type="submit" value="Save">
                <input type="submit" value="Back">  - todo: return to org homepage
            </fieldset>
        </fieldset>

    </form>

    
        <!--TODO: Add field where the organizations will actually show up-->
        
    
    
    <?php
    require('connect.php');
    ?>

</html>
