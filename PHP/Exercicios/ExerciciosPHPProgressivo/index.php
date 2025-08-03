<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP</title>
</head>
<body>
    <h1>Exercícios Resolvidos</h1>
    <h2>01: Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</h2>

    <pre>
        <code>
&lt;?php
    function PosNegNul($num):String{

        if($num > 0){
            return"Valor Positivo";
        }

        if($num < 0){
            return "Valor Negativo";
        }

        return "Igual a Zero";

    }

    $res = PosNegNul(0);

    echo "$res";
?>

R: <?php
    function PosNegNul($num):String{

        if($num > 0){
            return"Valor Positivo";
        }

        if($num < 0){
            return "Valor Negativo";
        }

        return "Igual a Zero";

    }

    $res = PosNegNul(0);

    echo "$res";
?>
        </code>
    </pre>

    <h2>
        02: Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: Entrada = 4, Saída = 4 X 0 = 0...4 X 10 = 40.
    </h2>

    <pre><code>
&lt;?php
    function tabuada($num){
        
        for($cont = 1; $cont <= 10;$cont++){
            $res = $cont * $num;
            echo "$num x $cont = ". "$res" .PHP_EOL;
        }
        
    }
    
    tabuada(10);
?>

R:
<?php
    function tabuada($num){
        
        for($cont = 1; $cont <= 10;$cont++){
            $res = $cont * $num;
            echo "$num x $cont = ". "$res" .PHP_EOL;
        }
        
    }
    
    tabuada(10);
?>
    </code></pre>

    <h2>
        03: Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6
    </h2>

    <pre><code>
&lt;?php
	function fatorial($num){
		$fat = 1;
		for($cont = $num; $cont > 0; $cont--){
			$fat *= $cont;
		}
		
		echo "$fat";
	}
	
	fatorial(5);
?>

R:
<?php
	function fatorial($num){
		$fat = 1;
		for($cont = $num; $cont > 0; $cont--){
			$fat *= $cont;
		}
		
		echo "$fat";
	}
	
	fatorial(5);
?>
    </code></pre>

  <h2>
    05: solicite a entrada de um número e descubra se o número digitado é par ou ímpar.
  </h2>  

  <pre><code>
&lt;?php
	function parOuImpar($num){
		if($num % 2 == 0){
			echo "Par";
			return;
		}
		
		echo "Impar";
	}
	
	parOuImpar(45);
?>

R:
<?php
	function parOuImpar($num){
		if($num % 2 == 0){
			echo "Par";
			return;
		}
		
		echo "Impar";
	}
	
	parOuImpar(45);
?>
  </code></pre>

  <h2>
    06: Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".    
  </h2>
  <pre><code>
&lt;?php
	function decres($num1, $num2){
		$maior = ($num1 + $num2 + (abs($num1 - $num2)))/2;
		
		if($maior == $num1){
			echo "$num2, $num1";
			return;
		}
		
		echo "$num1, $num2";
	}
	
	decres(5,1);
	
?>

R:
<?php
	function decres($num1, $num2){
		$maior = ($num1 + $num2 + (abs($num1 - $num2)))/2;
		
		if($maior == $num1){
			echo "$num2, $num1";
			return;
		}
		
		echo "$num1, $num2";
	}
	
	decres(5,1);
	
?>
  </code></pre>

  <h2>
    07: Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.
  </h2>

  <pre><code>
&lt;?php
	function maior($a, $b){
		$maior = ($a + $b + (abs($a - $b)))/2;
		
		if($maior == $a){
			echo "A maior que B";
			return;
		}

		if($a == $b){
			echo "Números iguais";
			return;
		}
		echo "B menor que A";
	}
	
	maior(12,45);
?>

R:
<?php
	function maior($a, $b){
		$maior = ($a + $b + (abs($a - $b)))/2;
		
		if($maior == $a){
			echo "A maior que B";
			return;
		}

		if($a == $b){
			echo "Números iguais";
			return;
		}
		echo "B menor que A";
	}
	
	maior(12,45);
?>
  </code></pre>

  <h2>
    08: Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
    Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]
  </h2>
    <pre>
        <code>
&lt;?php
	function mediaAluno($num1, $num2, $num3){
		$array = [$num1,$num2,$num3];
		$media = ($array[0] + $array[1] + $array[2]) / 3;
		
		if($media >= 6){
			echo "Aprovado".PHP_EOL;
			printf ("Média Final: %.2f",$media);
			return;
		}
		
		if($media < 6){
			echo "Reprovado".PHP_EOL;
			printf ("Média Final: %.2f",$media);
			return;
		}
	}
		mediaAluno(8,7,10);
?>     

R:
<?php
	function mediaAluno($num1, $num2, $num3){
		$array = [$num1,$num2,$num3];
		$media = ($array[0] + $array[1] + $array[2]) / 3;
		
		if($media >= 6){
			echo "Aprovado".PHP_EOL;
			printf ("Média Final: %.2f",$media);
			return;
		}
		
		if($media < 6){
			echo "Reprovado".PHP_EOL;
			printf ("Média Final: %.2f",$media);
			return;
		}
	}
		mediaAluno(8,7,10);
?>      
        </code>
    </pre>

    <h2>
    09: Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.
    </h2>
    <pre><code>
&lt;?php
	function situacao(String $nome, int $idade):String{
		if($idade >= 18){
			return "$nome é maior que 18 e tem $idade anos";
		}
		
		return "$nome não é maior de 18 e tem $idade anos";
	}
	
	$pessoa1 = situacao("Murilo", 12);
	$pessoa2 = situacao("Augusto", 45);
	echo "$pessoa1".PHP_EOL;
	echo "$pessoa2";
?>
R:
<?php
	function situacao(String $nome, int $idade):String{
		if($idade >= 18){
			return "$nome é maior que 18 e tem $idade anos";
		}
		
		return "$nome não é maior de 18 e tem $idade anos";
	}
	
	$pessoa1 = situacao("Murilo", 12);
	$pessoa2 = situacao("Augusto", 45);
	echo "$pessoa1".PHP_EOL;
	echo "$pessoa2";
?>
    </code></pre>

    <h2>
        10:  Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.
    </h2>
    <pre><code>
&lt;?php
	function mes(int $num){
		switch ($num){
			case 1: echo "Mês correspondente: JANEIRO";
			break;
			case 2: echo "Mês correspondente: FEVEREIRO";
			break;
			case 3: echo "Mês correspondente: MARÇO";
			break;
			case 4: echo "Mês correspondente: ABRIL";
			break;
			case 5: echo "Mês correspondente: MAIO";
			break;
			case 6: echo "Mês correspondente: JUNHO";
			break;
			case 7: echo "Mês correspondente: JULHO";
			break;
			case 8: echo "Mês correspondente: AGOSTO";
			break;
			case 9: echo "Mês correspondente: SETEMBRO";
			break;
			case 10: echo "Mês correspondente: OUTUBRO";
			break;
			case 11: echo "Mês correspondente: NOVEMBRO";
			break;
			case 12: echo "Mês correspondente: DEZEMBRO";
			break;
			default:
				echo "Mês inexistente";
				break;
		}
	}
	
	mes(8);
?>

R:  
<?php
	function mes(int $num){
		switch ($num){
			case 1: echo "Mês correspondente: JANEIRO";
			break;
			case 2: echo "Mês correspondente: FEVEREIRO";
			break;
			case 3: echo "Mês correspondente: MARÇO";
			break;
			case 4: echo "Mês correspondente: ABRIL";
			break;
			case 5: echo "Mês correspondente: MAIO";
			break;
			case 6: echo "Mês correspondente: JUNHO";
			break;
			case 7: echo "Mês correspondente: JULHO";
			break;
			case 8: echo "Mês correspondente: AGOSTO";
			break;
			case 9: echo "Mês correspondente: SETEMBRO";
			break;
			case 10: echo "Mês correspondente: OUTUBRO";
			break;
			case 11: echo "Mês correspondente: NOVEMBRO";
			break;
			case 12: echo "Mês correspondente: DEZEMBRO";
			break;
			default:
				echo "Mês inexistente";
				break;
		}
	}
	
	mes(8);
?>

    </code></pre>
</body>
</html>