<?php
    include('../model/teacherModel.php');
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $result = getAllTeacher();
        $json_data = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $json_data[] = $row;
        }
        echo json_encode($json_data);
    }
?>