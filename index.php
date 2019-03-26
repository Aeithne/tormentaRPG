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
	$pericia = new Pericia;
	$pericia->setar("CONHECIMENTO", "int", true, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("CONHECIMENTO", "int", true, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("CONHECIMENTO", "int", true, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("CURA", "sab", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("DIPLOMACIA", "car", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("ENGANAÇÃO", "car", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("FURTIVIDADE", "des", false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("IDENTIFICAR MAGIA", "int", true, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("INICIATIVA", "des", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("INTIMIDAÇÃO", "car", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("INTUIÇÃO", "sab", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("LADINAGEM", "des", true, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("OBTER INFORMAÇÃO", "car", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("OFICIOS", "int", false, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("OFICIOS", "int", false, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("OFICIOS", "int", false, false, true);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("PERCEPÇÃO", "sab", false, false);
	$pericias[] = $pericia;
	$pericia = new Pericia;
	$pericia->setar("SOBREVIVÊNCIA", "sab", false, false);
	$pericias[] = $pericia;
	
	
		echo "<div class='container caixaPericias bordas'>";
		echo "<div class='row'>";
		echo "<div class='checkbox caixaTitulo'>+</div>";
		echo "<div class='col-3 nomePericia caixaTitulo'>PERÍCIA</div>";
		echo "<div class='col-1'>TOTAL</div>";
		echo "<div class='col-1'>GRAD</div>";
		echo "<div class='col-1'>MOD. DE HABILIDADE</div>";
		echo "<div class='col-1'>OUTROS</div>";
		echo "</div>";

		echo "<tbody>";
		foreach ($pericias as $pericia) {
			echo "<div class='row pericia pericia$pericia->habchave'>";
			echo "<div class='checkbox'>";
			echo "<input type='checkbox'>";
			echo "</div>";
			if ($pericia->especificar) {
				echo "<div class='col-3'>";
				echo "<span>$pericia->nome</span>";
				echo "<input type='text' class='bordas'>";
				echo "</div>";
			} else {
				echo "<div class='col-3'>";
				echo "<span>$pericia->nome</span>";
				echo "</div>";
			}
			
			echo "<div class='col-1'><span><input type='number' step='1' class='caixaEntrada'>=</span> </div>";
			echo "<div class='col-1'><span><input type='number' step='1' class='caixaEntrada'>+</span></div>";
			echo "<div class='col-1'><span><input type='number' step='1' class='caixaEntrada mod_$pericia->habchave' size='3'>+</span></div>";
			echo "<div class='col-1'><input type='number' step='1' class='caixaEntrada'></div>";
			echo "</div>";
		}
		echo "</tbody>";

		echo "</div>";
