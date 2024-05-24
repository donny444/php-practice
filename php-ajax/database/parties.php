<?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('127.0.0.1','root','');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"election");
    $sql="SELECT * FROM parties WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>name</th>
    <th>candidate</th>
    <th>file_name</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['candidate'] . "</td>";
    echo "<td>" . $row['file_name'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);

    // Source: 
?>