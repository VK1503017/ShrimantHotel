<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'menu'; // Nama Database
 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}
 
$sql = 'SELECT name, price 
        FROM items';
         
$query = mysqli_query($conn, $sql);
 
if (!$query) {
    die ('SQL Error: ' . mysqli_error($conn));
}
 
echo '<table>
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>';
         
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
          
            <td>'.$row['name'].'</td>
            <td>'.number_format($row['price'], 0, ',', '.').'</td>
        
        </tr>';
}
echo '
    </tbody>
</table>';
 
// Should we need to run this? read section VII
mysqli_free_result($query);
 
// Should we need to run this? read section VII
mysqli_close($conn);