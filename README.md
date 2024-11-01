# Projeto de Estudos em PHP

Este projeto contém uma série de scripts em PHP desenvolvidos para praticar conceitos básicos de programação. Cada arquivo explora estruturas e funcionalidades fundamentais da linguagem PHP, como manipulação de arrays, laços de repetição, funções, e algoritmos simples.

## Estrutura dos Arquivos

### 1. `array.php`
- **Descrição**: Demonstra a criação e impressão de um array associativo em PHP.
- **Funcionamento**: Um array associativo é criado com as chaves `"olá"` e `"mundo"` e valores numéricos. O array é exibido usando `print_r`.

### 2. `estruturaRep.php`
- **Descrição**: Explora diferentes estruturas de repetição em PHP.
- **Funcionamento**:
  - `While`: Incrementa de 1 até 10 e imprime cada número.
  - `Do While`: Executa pelo menos uma vez e incrementa de 1 até 10.
  - `For`: Laço que imprime números de 0 a 10.
  - `Foreach`: Percorre um array de frutas, mostrando a posição e o nome de cada fruta.

### 3. `fibonacci.php`
- **Descrição**: Gera os primeiros 20 números da sequência de Fibonacci.
- **Funcionamento**: Calcula e exibe a sequência de Fibonacci usando um laço `for`, atualizando os valores dos termos para obter o próximo número da sequência.

### 4. `FizzBuzz.php`
- **Descrição**: Implementa o desafio FizzBuzz para identificar múltiplos de 3 e 5.
- **Funcionamento**:
  - Itera de 1 a 50, exibindo se um número é múltiplo de 3, de 5, ou de ambos.
  - Conta o número total de múltiplos de 3, de 5 e de 3 e 5.

### 5. `functions.php`
- **Descrição**: Exemplo simples de criação e uso de uma função em PHP.
- **Funcionamento**: Define uma função `olamundo()` que retorna a string passada como argumento e a exibe na tela.

### 6. `primos.php`
- **Descrição**: Identifica números primos no intervalo de 1 a 50.
- **Funcionamento**: Um laço `for` percorre os números de 1 a 50 e um laço interno verifica se o número tem divisores além de 1 e ele mesmo, imprimindo os números que são primos.

### 7. `somarImpar.php`
- **Descrição**: Calcula a soma de todos os números ímpares de 1 a 20.
- **Funcionamento**: Verifica cada número no intervalo de 1 a 20; se for ímpar, adiciona ao contador, exibindo o total ao final.

### 8. `tabuada.php`
- **Descrição**: Gera a tabuada de 1 a 10 para cada número no intervalo.
- **Funcionamento**: Para cada número de 1 a 10, um laço `for` aninhado calcula e exibe a tabuada até o número 10.

### 9. `bubblesort.php`
- **Descrição**: Ordena um array de números utilizando o algoritmo Bubble Sort.
- **Funcionamento**: Recebe um array de números como entrada e, através de laços `for` aninhados, compara e troca elementos adjacentes até que todos estejam em ordem crescente. O processo continua até que o array esteja totalmente ordenado, com o maior valor "flutuando" para o final a cada iteração.

## Requisitos
- **PHP**: Certifique-se de ter o PHP instalado em sua máquina para executar os scripts.

## Como Usar
1. Clone o repositório para sua máquina local.
2. No terminal, navegue até o diretório do projeto.
3. Execute cada script usando o comando: `php nome_do_arquivo.php`

## Notas
Este projeto é destinado a fins de estudo e prática dos conceitos básicos de programação em PHP. Ele abrange elementos fundamentais e visa reforçar o conhecimento de estruturas de controle, manipulação de arrays, funções, e algoritmos simples.
