<?php

    function tableHeader($result)
    {
        echo "<thread>";
        echo "<tr>";



        $count =0;
        while($field = $result->fetch_field() )
        {
            $count++;
            $fieldnames[] = $field->name;
            if ($count < 6 )
            {
                echo "<th>" . $field->name . "</th>";
            }

        }
        echo "</tr></tread>\r\n\r\r";
    }


    function tableFooter($result)
    {
        echo "<tfoot>";
        echo "<tr>";

        $count = 0;
        while ($field = $result->fetch_field()) {
            $count++;
            $fieldnames[] = $field->name;
            if ($count < 6) {
                echo "<th>" . $field->name . "</th>";
            }
        }
        echo "</tr></tfoot>\r\n\r\r";
    }
?>