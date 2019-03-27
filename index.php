<?php

	header('Content-Type: text/html; charset=utf-8');

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
	
	
		echo '<div class="caixaPericias">';
		echo '<div class="row cabecalho align-items-end" style="padding: 0px;">';
		echo '<div class="col-1 caixaTitulo"><i id="peric-add-new" class="fas fa-plus" style="cursor: pointer;"></i></div>';
		
		echo '
		<div class="col-2 nomePericia caixaTitulo" >PERÍCIA</div>';
		echo '<div class="col-1 caixaTitulo"><i id="peric-open-close" class="fas fa-angle-down" style="cursor: pointer;"></i></div>';
		echo '
		<div class="col-2">TOTAL</div>
		<div class="col-2">GRAD</div>
		<div class="col-2">MOD. DE HABILIDADE</div>
		<div class="col-2">OUTROS</div>';
		echo "</div>";

		echo "<tbody>";
		foreach ($pericias as $pericia) {
			echo "<div class='row pericia pericia$pericia->habchave'>";
			
			if ($pericia->especificar) {
				echo "<div class='col-1'>";
				echo "<i id='peric-add-newline' class='fas fa-plus $pericia->habchave</i>' style='cursor: pointer;' onclick='addPericia(this, \"$pericia->habchave\");'></i>";
				echo "</div>";
				echo "<div class='col-3'>";
				echo "<span>$pericia->nome</span>";
				//echo "<input type='text' class='bordas'>";
				echo "</div>";
			} else {
				echo "<div class='col-1'>";
				echo "<input type='checkbox'>";
				echo "</div>";
				echo "<div class='col-3'>";
				echo "<span>$pericia->nome</span>";
				//echo "<input type='text' class='bordas'>";
				echo "</div>";
			}
			
			echo "<div class='col-2'><input type='number' step='1' class='caixaEntrada'></div>";
			echo "<div class='col-2'><input type='number' step='1' class='caixaEntrada'></div>";
			echo "<div class='col-2'><input type='number' step='1' class='caixaEntrada mod_$pericia->habchave' size='3'></div>";
			echo "<div class='col-2'><input type='number' step='1' class='caixaEntrada'></div>";
			echo "</div>";
		}
		echo "</tbody>";

		echo "</div>";
