<?php
function min_notes($amount) {
    $note_100 = 0;
    $note_50 = 0;
    $note_20 = 0;
    $note_10 = 0;
    $note_5 = 0;
    $note_2 = 0;
    $note_1 = 0;

    while ($amount >= 100) {
        $note_100++;
        $amount -= 100;
    }

    while ($amount >= 50) {
        $note_50++;
        $amount -= 50;
    }

    while ($amount >= 20) {
        $note_20++;
        $amount -= 20;
    }

    while ($amount >= 10) {
        $note_10++;
        $amount -= 10;
    }

    while ($amount >= 5) {
        $note_5++;
        $amount -= 5;
    }

    while ($amount >= 2) {
        $note_2++;
        $amount -= 2;
    }

    while ($amount >= 1) {
        $note_1++;
        $amount -= 1;
    }

    $total_notes = $note_100 + $note_50 + $note_20 + $note_10 + $note_5 + $note_2 + $note_1;
    echo "
    <table style=\"border:4px ; border-style:SOLID;color:#f9f9f9; border-color:rosyBrown; background-color:black; font-size:20px\" width=70%>
    <tr>
    <th>Notes Type</th>

    <th>Total Notes</th>
    </tr><br>

    <tr>
    <td> 100 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_100</td>
    </tr>

    <tr>
    <td> 50 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_50</td>
    </tr>

    <tr>
    <td> 20 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_20</td>
    </tr>

    <tr>
    <td> 10 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_10</td>
    </tr>

    <tr>
    <td> 5 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_5</td>
    </tr>

    <tr>
    <td> 2 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_2</td>
    </tr>

    <tr>
    <td> 1 Rupees Notes </td>
    <td> &nbsp :: &nbsp </td>
    <td> $note_1</td>
    </tr>

    </table>
    ";
    return $total_notes;
}
echo "<form method=\"POST\">
enter your amount::<input type=\"number\" name=\"number\"></input>
<button type=\"submit\" name=\"submit\">submit</button>
</form>
";
$amount = isset($_POST['number']) ? $_POST['number'] : 0;
echo "<br>"."Total number of notes is: " . min_notes($amount);

 ?>
