<form action="services.php" method="post">
<h1>Services</h1>
<p><a href="/addServices.php">Add Service</a></p>
</form>

<?php

$page_title = 'Services' ;

function show_records( $dbc )
{
  $q = 'SELECT Services.ServicesID, Services.Identifier, People.LastName, People.FirstName,
    Services.DateFilled, Services.ServiceCode, Organizations.OrgCode FROM Services, People,
    Identifier, Organizations
  WHERE (((Services.Identifier)=Identifier.Identifier)
  And ((Identifier.PeopleID)=People.PeopleID)
  And ((Identifier.OrgID)=Organizations.OrgID))
  ORDER BY People.LastName, Services.DateFilled;' ;
  $r = mysqli_query( $dbc , $q ) ;
  $num = mysqli_num_rows( $r ) ;
   if ( $num > 0 )
  {
      echo '<h1>Record Results</h1> ' ;
      echo '<br>' ;
      while ( $row = mysqli_fetch_array( $r , MYSQLI_ASSOC ) )
     {
       echo '<br> Name:              ' . $row['People.LastName'] . $row['People.FirstName'] ;
       echo '<br> Services ID:       ' . $row['Services.ServicesID'] ;
       echo '<br> Date Filled:       ' . $row['Services.DateFilled'] ;
       echo '<br> Identifier:        ' . $row['Services.Identifier'] ;
       echo '<br> Service Code:      ' . $row['Services.ServiceCode'] ;
       echo '<br> Quantity Filled:   ' . $row['Services.QtyFilled'] ;
       echo '<br> Unit Price:        ' . $row['Services.UnitPrice'] ;
       echo '<br> Total:             ' . $row['Services.Total'] ;
       echo '<br> Paid:              ' . $row['Services.Paid'] ;
       echo '<br> Date Entered:      ' . $row['Services.DateEntered'] ;
      }
  } else { echo '<p>' . mysqli_error( $dbc ) . '</p>'  ; }
}

show_records();

?>
