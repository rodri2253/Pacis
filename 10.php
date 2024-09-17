<table width="5%" border="20" cellspacing="0">
<tr>
<td>
<b>Pares</b>
</td>
</tr>
<?php
$num = 0;
while ($num <= 10)
{
if($num % 2 == 0)
{
echo '<tr>';
echo '<td>' .$num.'</td>';
echo '</tr>';
}
$num++;
}
?>