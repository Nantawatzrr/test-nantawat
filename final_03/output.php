<?php
    require_once ('vendor/autoload.php');
    include ('connect.php');
    $reorder_level = $_POST['reorder_level'];
    $category = $_POST['category'];
    $sql = "SELECT * FROM products WHERE category='$category' AND unit_in_stock < $reorder_level";

    // $sql = "SELECT * FROM products";
    $qPro = $conn->query($sql);
    $roww = $qPro->num_rows;
    

    $output_head = "
    <link rel='stylesheet' href='style.css'>
    <h1 style='text-align: center;'>Product at low-level stock ($category)</h1>
    <h2>level:$reorder_level </h2>
    <table>
        <tr class='tr_head'>
            <td>ID</td>
            <td>Category</td>
            <td>Name</td>
            <td>Price</td>
            <td>Unit_in_stock</td>
        </tr>
    ";

    $output_body = "";

   while($row=$qPro->fetch_object()){
    $output_body .= "
    
        <tr>
            <td>$row->id</td>
            <td>$row->category</td>
            <td>$row->name</td>
            <td>$row->price</td>
            <td>$row->unit_in_stock</td>
        </tr>
    ";  
        $datarow = "
                <tr>
                    <td colspan='5' style='text-align:right'> Total Product: $roww </td>
                </tr>
        ";
   }
   $yourname = "<p style='text-align:right' >Report By 65309010005 Nantawat Masviset</p>";
   $date = date("d-m-Y h:i:sa");
   $dateby = "<p style='text-align:right' >$date</p>";
   $output_end = "</table>";



    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($output_head);
    $mpdf->WriteHTML($output_body);
    $mpdf->WriteHTML($datarow);
    $mpdf->WriteHTML($output_end);
    $mpdf->WriteHTML($yourname);
    $mpdf->WriteHTML($dateby);
    $mpdf->output();
?>
