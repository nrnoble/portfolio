<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>


    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

    <title>datatable test</title>
</head>
<body>

    <script>
        $(document).ready(function()
        {
            $('#table_id').DataTable();
        } );
    </script>


    <!-- id sqlconnection -->
    <div id=sqlconnection class="pageblock" style="margin-top: 10px; display: none ;">

<h2>SQL CONNECTION</h2>
<?php

                            // Create connection
                            $conn = new mysqli("127.0.0.1", $sql_user, $sql_password,$sql_database );

                            // Check connection
                            if ($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully SQL server: <b>" .gethostname() ."</b><br>";;
echo 'Current script owner: <b>' . get_current_user() ."</b><br>";
echo "Connection info: <b>" .$conn->host_info ."</b><br>";

?>

</div>
    <!-- id sqlconnection -->


    <table id = 'contact_table' >

        <?php

                                # echo "var dump::  var_dump($result->fetch_field()[0]->name);";
        $fieldnames = [];
        if ($result->field_count > 0)
        {
            echo "<tr>";

            //   for ($idx = 0; $idx < 4; $idx =$idx+1)
            //   {
            //      $fieldnames[] = $field[$idx];
            //      echo "<th class =\"fkb_datatable\" style = \" width: 250px;  border: 0px solid black; text-decoration: underline; \">". $field[$idx]->name . "</th>";
            //   }



            while($field = $result->fetch_field() )
            {

                $fieldnames[] = $field->name;
                echo "<th>" . $field->name . "</th>";
            }
            echo "</tr>";
        }


        //echo (var_dump($result));
        //$row = $result->fetch_assoc();
        //echo var_dump($row);
        // echo $row["AVG (film.length)"];
        //$rowcount =0;
        if ($result->num_rows > 0)
        {
        // output data of each row

        $rowcount = 0;
        while($row = $result->fetch_assoc())
        {
        $rowcount = $rowcount + 1;

        echo "<tr id =\"row$rowcount\"  onclick='ShowDetails(this)' ><td class ='' >". $row["$fieldnames[0]"]
        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[1]"]
        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[2]"]
        //                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[3]"]
        //                                        . "</td><td class =\"fkb_datatable\">" . $row["$fieldnames[4]"]
        . "</td></tr>\n\r";
        //                                    class ='kdb_datatable kdb_DataTableDetailedInfo'
        $rowcount = $rowcount +1;
        echo "<tr id =\"row$rowcount\" style='display:none'><td colspan='5'>
        <div id='1' class =''>
            <ul>
                <li> <b>Sponsor:</b> " . $row["$fieldnames[1]"] . " " . $row["$fieldnames[0]"]. "</li>"
                . "<li> <b>$fieldnames[2]:</b> " . $row["$fieldnames[2]"] ."</li>"
                . "<li> <b>$fieldnames[3]:</b> " . $row["$fieldnames[3]"] ."</li>"
                . "<li> <b>$fieldnames[4]:</b> " . $row["$fieldnames[4]"] ."</li>"
                . "<li> <b>$fieldnames[5]:</b> " . $row["$fieldnames[5]"] ."</li>"
                . "<li> <b>$fieldnames[6]:</b> " . $row["$fieldnames[6]"] ."</li>"
                . "<li> <b>$fieldnames[7]:</b> " . $row["$fieldnames[7]"] ."</li>"
                . "<li> <b>$fieldnames[8]:</b> " . $row["$fieldnames[8]"] ."</li>"
                . "<li> <b>$fieldnames[9]:</b> " . $row["$fieldnames[9]"] ."</li>"
                ."</ul></div></td>";
        echo "</td></tr>\n\r";
        //                                    echo "<h2>test</h2>";

        }
        }
        else
        {
        //print_r($result);
        echo "0 results";
        }

        ?>
    </table>



    <table id="table_id">
        <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        </tbody>
    </table>



</body>
</html>