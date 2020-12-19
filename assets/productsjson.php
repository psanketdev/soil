 <?php
    include('config.php');
    $result = "SELECT * FROM `products`";
    $data = mysqli_query($DBcon,$result);
    $resultarray = array ();
    while($row = mysqli_fetch_array($data))
    {
        $resultarray[] = $row;
    }
    header('Content-Type: application/json');
    $myJSON = json_encode($resultarray, JSON_PRETTY_PRINT);
    echo $myJSON;
    ?>