CREATE DATABASE vendas;
USE vendas;


CREATE TABLE duplicatas (
    numero INT PRIMARY KEY,
    nome VARCHAR(50),
    vencimento DATE,
    valor FLOAT,
    banco VARCHAR(50)
);


INSERT INTO duplicatas (numero, nome, vencimento, valor, banco) VALUES
(770710, 'LIVRARIA FERNANDES', '2023-05-10', 5000.00, 'Itaú'),
(770711, 'PAPELARIA SILVA', '2023-06-15', 3000.00, 'Santander'),
(770712, 'ABC PAPELARIA', '2017-07-20', 15000.00, 'Bradesco'),
(770713, 'PAPELARIA SILVA', '2016-11-30', 2000.00, 'Itaú'),
(770714, 'LER E SABER', '2017-03-15', 8000.00, 'Banco do Brasil'),
(770715, 'PAPELARIA SILVA', '2016-05-10', 2500.00, 'Santander'),
(770716, 'ABC PAPELARIA', '2017-01-10', 12000.00, 'Bradesco');


SELECT nome, vencimento, valor FROM duplicatas;


SELECT numero FROM duplicatas WHERE banco = 'Itaú';


SELECT COUNT(*) FROM duplicatas WHERE banco = 'Itaú';


SELECT numero, vencimento, valor, nome FROM duplicatas WHERE YEAR(vencimento) = 2017;


SELECT numero, vencimento, valor, nome FROM duplicatas WHERE banco NOT IN ('Itaú', 'Santander');


SELECT SUM(valor) AS total_divida, GROUP_CONCAT(numero) AS duplicatas FROM duplicatas WHERE nome = 'PAPELARIA SILVA';


DELETE FROM duplicatas WHERE numero = 770710 AND nome = 'LIVRARIA FERNANDES';


SELECT * FROM duplicatas ORDER BY nome;


SELECT nome, banco, valor, vencimento FROM duplicatas ORDER BY vencimento;


UPDATE duplicatas SET banco = 'Santander' WHERE banco = 'Banco do Brasil';


SELECT DISTINCT nome FROM duplicatas WHERE banco = 'Bradesco';


SELECT SUM(valor) FROM duplicatas WHERE vencimento BETWEEN '2016-01-01' AND '2016-12-31';


SELECT SUM(valor) FROM duplicatas WHERE vencimento BETWEEN '2016-08-01' AND '2016-08-30';




UPDATE duplicatas SET valor = valor * 1.15 WHERE vencimento < '2016-01-01' AND vencimento <= '2016-12-31';


UPDATE duplicatas SET valor = valor * 1.05 WHERE vencimento BETWEEN '2017-01-01' AND '2017-05-31' AND nome = 'LER E SABER';


SELECT AVG(valor) FROM duplicatas WHERE YEAR(vencimento) = 2016;


SELECT numero, nome FROM duplicatas WHERE valor > 10000.00;


SELECT SUM(valor) FROM duplicatas WHERE banco = 'Santander';


SELECT DISTINCT nome FROM duplicatas WHERE banco IN ('Bradesco', 'Itaú');