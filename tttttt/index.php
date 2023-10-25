<?php

    require_once ("vendor/autoload.php");
    include ('connect.php');

    $sql = "SELECT * FROM employee";
    $qUser = $conn->query($sql);


    $head = "<table>
            <tr>
            <td>id</td>
            <td>empcode</td>
            <td>firstname</td>
            <td>lastname</td>
            <td>salary</td>
            <td>workyear</td>
            <td>img</td>
            </tr>";
    $body = "";
    $end = "</table>";

    while( $row = $qUser->fetch_object()){
        $body.="<tr>
            <td>$row->id</td>
            <td>$row->empcode</td>
            <td>$row->firstname/td>
            <td>$row->lastname</td>
            <td>$row->salary</td>
            <td>$row->workyear</td>
            <td><img src='dada.jpg' alt=''></td>
        </tr>";
    }
    
    $mpdf = new Mpdf\Mpdf();
    $mpdf->WriteHTML($head);
    $mpdf->WriteHTML($body);
    $mpdf->WriteHTML($end);
    $mpdf->output();
    

?>