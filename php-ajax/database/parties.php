<?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('127.0.0.1','root','');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"election");
    $sql="SELECT parties.name, candidates.name AS candidate, parties.number FROM parties INNER JOIN candidates ON parties.candidate = candidates.id WHERE parties.id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>name</th>
    <th>candidate</th>
    <th>number</th>
    </tr>";
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['candidate'] . "</td>";
    echo "<td>" . $row['number'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";

    mysqli_close($con);

    // Source: https://www.w3schools.com/php/php_ajax_database.asp
?>