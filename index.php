<?php

	class Pericia {
		public $id;
		public $nome;
		public $habchave;
		public $somentetreinado;
		public $penarmadura;
			
		public function setar($nome, $habchave, $somentetreinado = false, $penarmadura = false) {
			$this->nome = $nome;
			$this->habchave = $habchave;
			$this->somentetreinado = $somentetreinado;
			$this->penarmadura = $penarmadura;
		}
	}

	$pericias = array();

	$pericia = new Pericia;
	$pericia->setar("Atletismo", "FOR", false, true);

	$pericias[] = $pericia;

	
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
		foreach ($pericias as $pericia) {
			echo "<tr>";
			echo "<td><input type='checkbox'></td>";
			echo "<td>$pericia->nome</td>";
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
