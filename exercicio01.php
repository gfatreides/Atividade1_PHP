<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP 🐘- Exercício 01</title>
    <link rel="stylesheet" href="exercicio01.css">
</head>
<body>
    <header id = "cabecalho"><!-- Cabeçalho -->
            <h2 id="titulo">🐘 DESENVOLVIMENTO DE SISTEMAS - PHP</h2>
    </header>
    
    <main id="margem">
        <br>
        <br>
        <?php 
           //Exercício 1. 
           echo "<h4><p>1. Sintaxe: Escreva um script PHP que exiba 'Olá, Mundo!' na tela.</p></h4>";
           //Mensagem com emoji. 
           echo "<p>Olá Mundo! 🌎</p>";
           //Quebra de linha.
           echo ("<br");
           echo "<p>Início da lista de exercícios em PHP. 🐘</>";

            echo ("<hr>");

            //Exercício 2
            echo "<h4><p>2. Comentários:
            Escreva um script PHP que inclua comentários explicativos sobre o que cada linha de código faz.</p></h4>";
            //  Exibe a hora para a time zone do Brasil
            date_default_timezone_set ("America/Sao_Paulo");
            // Formatando a data em dia, dia da semana, mês e ano.
            echo "Hoje é dia " . date("d/D/M/Y");
            // Hora no formato CET, mostra a hora do servidor.
            echo " e a hora atual é " . date("G:i:s");

            echo ("<br>");
            echo ("<hr>");

            //Exercício 3
            echo "<h4><p>3. Variáveis:
            Crie uma variável chamada 'nome' e atribua seu nome a ela. Em seguida, exiba o valor da variável na tela.</p></h4>";

            $nome = "Gustavo";
            $sobrenome = "Alves";

            echo "<p>Bem vindo ao curso de Desenvolvimento de Sistemas oferecido pelo SENAI/MG, $nome $sobrenome.</p>";

            echo ("<br>");
            echo ("<hr>");

            //Exercício 4
            echo "<h4><p>4. Echo e Print:
            Use `echo` e `print` para exibir uma mensagem na tela, por exemplo, PHP é divertido!.</h4></p>";
            //Usando echo:
            echo "<p>USANDO ECHO: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate nostrum a, quae quia doloremque dicta sequi aliquid placeat alias dolorem molestias veniam possimus suscipit repudiandae, accusamus corrupti, vitae quibusdam dignissimos?</p>";
            
            echo ("<br>");
            //Usando print
            print "USANDO O PRINT: PHP é divertido";

            echo ("<br>");
            echo ("<hr>");

            //Exercicio 5
            echo "<h4><p>5. Vardump:
            Crie uma variável com um valor complexo (por exemplo, uma matriz associativa) e use `var_dump()` para exibir informações sobre essa variável.</p></h4>";

            $imperadores = [
                ["romanos:", "Otávio Augusto", "Tibério", "Calígula", "Cláudio"],
                ["brasileiros:", "D Pedro I", "D Pedro II"],
                ["russos:", "Ivan, O Terrível", "Pedro, O Grande", "Catarian II"],
                [1, 2, 3, 3.14]
            ];
            //Detalhes dos dados da matriz.
            echo "Detalhes da matriz associativa IMPERADORES:";
            echo ("<br>");
            var_dump($imperadores);

            echo ("<br>");
            echo ("<hr>");

            //Exercício 6
            echo "<h4><p>6. Tipos de Dados - Inteiro:
            Declare uma variável inteira e atribua a ela um número. Em seguida, exiba o valor da variável na tela.</p></h4>";

            //Variável inteira:
            $nr_inteiro = 123;
            echo "Exibindo o valor da variável nr_inteiro: " .($nr_inteiro);

            echo ("<hr>");

            //Exercício 7
            echo "<h4><p>7. Tipos de Dados - Float:
            Declare uma variável de ponto flutuante e atribua a ela um número decimal. Em seguida, exiba o valor da variável na tela.</p></h4>";

            $nr_decimal = 3.1416;
            echo "Exibindo o valor da variável nr_decimal (nº de ponto flutuante): " .($nr_decimal);

            echo ("<hr>");

            //Exercício 8
            echo "<h4><p>8. Tipos de Dados - String:
            Declare uma variável de string e atribua a ela uma frase. Em seguida, exiba o valor da variável na tela</p></h4>";

            $frase = "O que fazemos agora ecoa na eternidade.";
            echo "Frase atribuida ao imperador romano Marco Aurélio: ";
            echo ($frase);

            echo ("<hr>");

            //Exercício 9
            echo"<h4><p>9. Tipos de Dados - Booleano:
            Declare uma variável booleana e atribua a ela um valor verdadeiro ou falso. Em seguida, exiba o valor da variável na tela.</p></h4>";

            $elefante = True;
            $golfinho = False;
            echo "True/Verdadeiro = 1";
            echo ("<br>");
            echo "O mascote da linguagem PHP é um elefante? " .$elefante;
            echo ("<br>");
            echo "False/Falso = 0: não exibe valor.";
            echo ("<br>");
            echo "O mascote da linguagem Python é um golfinho? " .$golfinho;

            //Exercício 10
            echo "<h4><p>10. Tipos de Dados - Array:
            Crie um array numérico ou associativo e exiba seus elementos na tela.</p></h4>";

            $imperadores = [
                ["romanos:", "Otávio Augusto", "Tibério", "Calígula", "Cláudio"],
                ["brasileiros:", "D Pedro I", "D Pedro II"],
                ["russos:", "Ivan, O Terrível", "Pedro, O Grande", "Catarian II"],
                [1, 2, 3, 3.14]
            ];

            print_r($imperadores);

            echo ("<hr>");

            //Exercício 11
            echo "<h4><p>11. Tipos de Dados - Objeto:
            Crie uma classe simples em PHP e instancie um objeto dessa classe. Em seguida, exiba uma propriedade do objeto na tela.</p></h4>";

            //Objeto
            class Pessoa {
                //Atributos (características)
                public $nome;
                public $idade;

                //Métodos (Ações realizadas, funções)
                //Exibindo métodos e atributos dentro da classe.
                public function Falar() {
                    echo $this -> nome. "Maxximiliam" . $this ->idade. " acabou de falar";
                }
            }

            //Instanciar a classe Pessoa
            //Escolhendo um nome
            $rodrigo = new Pessoa();
            //Verificando informações sobre a classe
            //Objeto e dois atributos
            var_dump($rodrigo);
            echo ("<br>");
            echo ("<br>");
            //Método Falar
            echo "Método Falar";
            echo ("<br>");
            $rodrigo->Falar();
            echo ("<br>");
            //Atribuir nome e idade
            $rodrigo -> nome = "Rodrigo Maxximiliam";
            $rodrigo -> idade = "55";
            echo ("<br>");
            //Verificando informações
            var_dump($rodrigo);
            echo ("<br>");
            //Exibindo as informações na tela
            echo ("<br>");
            echo "Exibindo o valor do atributo fora da classe: ";
            echo $rodrigo -> nome;

            echo ("<hr>");

            echo "<h4><p>12. Tipos de Dados - Null:
            Declare uma variável e atribua a ela o valor `null`. Em seguida, verifique se a variável é `null` e exiba uma mensagem correspondente.</p></h4>";

            //Variável sem valor no PHP;
            $var = NULL;
            echo ("<br>");
            echo "Foi mostrado um valor nulo (nada foi exibido).";
            echo ("<br>");
            //Verificando se a variável é nula
            if (is_null ($var)){
                echo "A variável é nula.";
            }
            
            echo ("<hr>");

            echo "<h4><p>13. Operadores Aritméticos:
            Crie uma expressão aritmética simples usando operadores como `+`, `-`, `*` e `/`, e exiba o resultado na tela.</p></h4>";

            $expressao_aritmetica = 5 + 5 - 8 * 2 / 10;
            echo "5 + 5 - 8 * 2 / 10  =  ";
            echo "$expressao_aritmetica";

            echo ("<hr>");

            echo "<h4><p>14. Operadores de Comparação:
            Use operadores de comparação como `==`, `!=`, `>`, `<`, `>=` e `<=` para comparar dois valores e exiba o resultado na tela.</p></h4>";

            //Variáveis
            $nr1 = 10;
            $nr2 = 20;
            //Verificando a igualdade
            echo "Verificando a igualdade: ";
            echo "20 == 10";
            echo ("<br>");
            var_dump($nr1 == $nr2);
            
            echo ("<br>");
            
            //Verificando a diferença
             echo "Verificando a diferença: ";
             echo "20 != 10";
             echo ("<br>");
             var_dump($nr1 != $nr2);

             echo ("<br>");
            
            //Verificando qual é o maior
             echo "Verificando qual é o maior: ";
             echo "20 > 10";
             echo ("<br>");
             var_dump($nr2 > $nr1);

             echo ("<br>");
            
            //Verificando qual é menor
             echo "Verificando qual é menor: ";
             echo "10 < 20";
             echo ("<br>");
             var_dump($nr1 < $nr2);

             echo ("<br>");
            
            //Verificando se é maior ou igual
             echo "Verificando se é maior ou igual: ";
             echo "20 >= 10";
             echo ("<br>");
             var_dump($nr2 >= $nr1);

             echo ("<br>");
            
            //Verificando se é menor ou igual
             echo "Verificando se é menor ou igual: ";
             echo "20 <= 10";
             echo ("<br>");
             var_dump($nr1 <= $nr2);

            echo ("<hr>");

            echo "<h4><p>15. Operadores Lógicos:
            Crie uma expressão lógica usando operadores como `&&`, `||` e `!`, e exiba o resultado na tela.</p></h4>";

            $nr1 = 10;
            $nr2 = 20;
            $nr3 = 30;

            //Verificando o operador lógico &&
            echo "Verificando o operador lógico &&: ";
            echo "10 < 20 e 10 < 30";
            echo ("<br>");
            var_dump(($nr1 < $nr2)&& ($nr2 < $nr3));

            echo ("<br>");

            //Verificando o operador lógico ||
            echo "Verificando o operador lógico ||: ";
            echo "10 < 20 ou 10 > 30";
            echo ("<br>");
            var_dump(($nr1 < $nr2) || ($nr2 < $nr3));

            echo ("<br>");

            //Verificando o operador lógico !
            echo "Verificando o operador lógico !: ";
            echo "! 10 < 20";
            echo ("<br>");
            var_dump(!($nr1 < $nr2));

            echo ("<hr>");

            echo "<h4><p>16. Estruturas Condicionais - If:
            Use a estrutura `if` para verificar se um número é par ou ímpar e exiba uma mensagem correspondente na tela.</p></h4>";

            echo "Verificando se o número dado é par ou ímpar.";
            echo ("<br>");
            $nr1 = 11;
            if ($nr1 % 2 == 0){
                echo "O número " . $nr1 . " é par";
            }else{
                echo "O número " .$nr1 . "é ímpar";
            }

            echo ("<hr>");

            echo "<h4><p>17. Estruturas Condicionais - Switch:
            Use a estrutura `switch` para exibir uma mensagem diferente com base no valor de uma variável.</p></h4>";

            $cor = "vermelho";

            switch ($cor){
                case "vermelho":
                    echo "Sua cor preferida é vermelho";
                break;
                case "verde":
                    echo "Sua cor preferida é verde.";
                break;
                case "azul":
                    echo "Sua cor preferida é azul.";
                break;
                }


            echo ("<hr>");

            echo "<h4><p>18. Estruturas de Repetição - For:
            Use um loop `for` para exibir os números de 1 a 10 na tela.</p></h4>";

            for ($i = 1; $i <= 10; $i++ ){
                echo "$i\n";
            }

            echo ("<hr>");

            echo "<h4><p>19. Estruturas de Repetição - While:
            Use um loop `while` para exibir os números de 1 a 10 na tela.</p></h4>";

            $contador = 1;
            while ($contador <= 10){
                echo "$contador * \n";
                $contador++;
            }
            echo " Fim";
            echo ("<hr>");

            echo "<h4><p>20. Funções:
            Crie uma função que receba dois números como parâmetros e retorne a soma deles. Em seguida, chame a função e exiba o resultado na tela.</p></h4>";

            $nr1 = 1;
            $nr2 = 2;

            $soma = $nr1 + $nr2;

            echo "A soma de " .$nr1 . " com " .$nr2 ." é igual a " .$soma;
        ?>
    </main>
</body>
</html>