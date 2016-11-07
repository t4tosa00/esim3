<h1>Muokkaa asiakkaiden tietoja</h1>
<FORM action="muokkaa_asiakkaat" method="POST">
<TABLE>
<tr><td>Etunimi</td><td>Sukunimi</td><td>Email</td></tr>
<?php
foreach ($asiakkaat as $rivi) {
	echo '<tr><td>';
	echo 'input type="text" name="en[]" value=""'.$rivi['Etunimi']."'</td>';
	echo '<td> input type="text" name="en[]" value=""'.$rivi['Etunimi']'.'</td>';
	echo '<td> input type="text" name="en[]" value=""'.'$rivi['Etunimi']'.'</td>';



?>
</TABLE>
</FORM>