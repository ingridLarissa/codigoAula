
27 lines (25 sloc) 714 Bytes
<?php
	if(filter_input(INPUT_GET, "aluno") &&
		filter_input(INPUT_GET, "ano") &&
		filter_input(INPUT_GET, "n1") &&
		filter_input(INPUT_GET, "n2") &&
		filter_input(INPUT_GET, "n3") &&		
		filter_input(INPUT_GET, "n4")
	){
		$aluno = filter_input(INPUT_GET, "aluno");
		$ano = filter_input(INPUT_GET, "ano");
		$n1 = filter_input(INPUT_GET, "n1");
		$n2 = filter_input(INPUT_GET, "n2");
		$n3 = filter_input(INPUT_GET, "n3");
		$n4 = filter_input(INPUT_GET, "n4");
		
		echo "<fieldset>Aluno = " . $aluno;
		echo "<br>Ano = " . $ano;
		echo "<br>N1 = " . $n1;
		echo "<br>N2 = " . $n2;
		echo "<br>N3 = " . $n3;
		echo "<br>N4 = " . $n4;
		
		$media = ($n1 + $n2 + $n3 + $n4)/4;
		echo "<br>Média = " . $media;
		
		
		echo "</fieldset>";
		
	}else{
		echo "Campos não preenchidos!!!"; 
	}
?>