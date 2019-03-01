<?php

	class Pericia {
		public $id;
		public $nome;
		public $habchave;
		public $somentetreinado;
		public $penarmadura;
		public $especificar;
			
		public function setar($nome, $habchave, $somentetreinado = false, $penarmadura = false, $especificar = false) {
			$this->nome = $nome;
			$this->habchave = $habchave;
			$this->somentetreinado = $somentetreinado;
			$this->penarmadura = $penarmadura;
			$this->especificar = $especificar;
		}
	}

	$pericias = array();

	$pericia = new Pericia;
	$pericia->setar("ACROBACIA", "des", false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("ADESTRAR ANIMAIS", "car", true, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("ATLETISMO", "for", false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("ATUAÇÃO", "car", false, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("ATUAÇÃO", "car", false, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("CAVALGAR", "des", false, true);
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
			echo "<td>$pericia->nome ";
			if ($pericia->especificar) echo "<input type='text'>";
			echo "</td>";
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
