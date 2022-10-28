echo "<td>$row[11]</td>";
echo "<td>$row[12]</td>";
echo "<td><input type='button' id='tbutt' value='Edit'></td>";
if (($row[1])=='PENDING'){
    echo "<td><input type='button' id='tbutt2' value='Cancel'></td></tr>";
}