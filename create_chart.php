<?php
    header('Content-Type: application/json');
    require('call.php');
    $db->DBConnect();
    $select = $db->prepare("SELECT `employees`, `city` FROM `offices` ORDER BY `id`;");
    $select->execute();
    $data = array();
    while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
    }
    print json_encode($data);