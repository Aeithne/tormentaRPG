<?php



	public function listaPericias() {
		echo "<table>";
		echo "<thead>";
		echo "<td></td>";
		echo "<th>PERÍCIA</th>";
		echo "<th>TOTAL</th>";
		echo "<td></td>";
		echo "<th>GRAD</th>";
		echo "<td></td>";
		echo "<th>MOD. DE <BR> HABILIDADE</th>";
		echo "<td></td>";
		echo "<th>OUTROS</th>";
		echo "</thead>";

		echo "<tbody>";
		for ($i=0; $i < 20; $i++) {
			echo "<tr>";
			echo "<td><input type='checkbox'></td>";
			echo "<td>NOME DA PERÍCIA</td>";
			echo "<td><input type='number' size='3'></td>";
			echo "<td>=</td>";
			echo "<td><input type='number' size='3'></td>";
			echo "<td>+</td>";
			echo "<td><input type='number' size='3'></td>";
			echo "<td>+</td>";
			echo "<td><input type='number' size='3'></td>";
			echo "</tr>";
		}
		echo "</tbody>";

		echo "</table>";
	}
	
	
	
	
	
	
?>
