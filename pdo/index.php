

<?php

require('../classes/database.php');



$db = new Database();

$db->query("SELECT `id`, `country`, `capital`, `continent`, `population` from `country`");



$countries = $db->selectAll();


$tbody = "";
foreach($countries as $key => $value)
{
    $tbody.= 
    "<tr>
    <td>" .  $value->country . "</td> 
    <td>" . $value->capital . "</td> 
    <td>" . $value->continent . "</td> 
    <td>" . $value->population . "</td>
    </tr>";
}


?>
<style>
    table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid;
          }
    table,th,td{
        border: 1px solid;
        text-align: center;
        font-size: 1.5rem;
    }
</style>

<a style= "font-size:2rem;" href="create.php">voeg je land toe</a>

<table >
    <thead >
        <tr >
            <th >country</th>
            <th >capital</th>
            <th >continent</th>
            <th >population</th>
        </tr>
    </thead >
    <tbody style="border:1px solid;">
            <?= $tbody; ?>
    </tbody>
</table>