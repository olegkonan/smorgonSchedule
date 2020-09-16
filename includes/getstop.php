<?php
    require 'includes/connect.php';
    $sql = "SELECT * FROM allstops ORDER BY stop_name ASC";
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['stop'] . "'>" . $row['stop_name'] . "</option>";
    }
    mysqli_close($link);
?>