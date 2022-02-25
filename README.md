# Avaliação PHP

Avaliação PHP realizada por Paulo Amaral para a empresa Titan Software

Este teste tem como pré-requisitos o conhecimento básico em PHP, MYSQL, JAVASCRIPT.

Pontos a se considerar:
Código legível, comentado e manutenível.
Separe cada responsabilidade no seu arquivo correto.
Não poderá ser utilizado nenhuma forma de framework.

PHP & HTML

1)	Crie uma página com dois campos PRODUTOS, PREÇOS, COR.
2)	Crie botões de INSERÇÃO, ATUALIZAÇÃO e de EXCLUSÃO.
3)	Monte uma tabela (HTML) para Listar os Produtos.
4)	Bônus: Crie um Filtro Básico para a página.<br>
a)	Filtrar por Nome<br>
b)	Filtrar por Cor. Em um campo de SELECT.<br>
c)	Filtrar por preço. Quando for MAIOR, MENOR OU IGUAL.


MYSQL:
1)	Crie DUAS as Tabelas para Produtos e Preço.
2)	Tabela de Produtos, Coluna: IDPROD, NOME, COR;
3)	Tabela de Preço, Coluna: IDPRECO, PRECO ( com 2 casas Decimais);


REGRA DE NEGÓCIO:
1)	Produtos das cores AZUL e VERMELHO, Terão um desconto de 20%.
2)	Produtos das cores AMARELO, terão um desconto de 10%.
3)	Produtos de cor VERMELHO e com VALOR MAIOR que R$ 50.00.  Será aplicado um desconto de 5%.
4)	Uma Vez escolhida a COR do produto NÃO poderá ser feita  troca por outra.
5)	Exibição da tabela deverá conter os números no seguinte formato Brasileiro. 
a)	Exemplo: R$ 2.000,99
