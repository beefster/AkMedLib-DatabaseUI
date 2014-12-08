
<!--IMPORTS (CSS, etc.) -->
<link rel="stylesheet" type="text/css" href="Style.css" media="screen" />



<html>
    <head>
        <meta charset="UTF-8">
        <title> Organization </title>
    </head>

    <!--TODO: fix this-->
    <form action="OrgAdd.php" method="post">

        <fieldset>
            <legend>Add Organization</legend>

            <div> <!--Not sure what div does yet-->
                <fieldset>
                    <legend>Organization</legend>
                    Name* <input type="text" name="Org_Name" /><br />
                    Code* <input type="text" name="Org_Code" /><br />
                    <input type="submit" value="Add"> - todo: go to edit org with this new org selectedly
                    <input type="submit" value="Cancel">  - todo: return to org lookup page
                </fieldset>
            </div>

        </fieldset>

    </form>

    <?php
    require('connect.php');
    ?>

</html>
