-- DML

INSERT INTO CATEGORIA(DESC_CATEGORIA) 
VALUES('Eletrônicos'),('Limpeza'),('Hortifruti'),('Padaria'),('Carnes'),('Laticínios'),('Congelados'),('Mercearia'),('Bebidas'),('Higiene Pessoal'),('Pet Shop');

INSERT INTO PRODUTO(NOME, PRECO, DESCRICAO, ID_CATEGORIA) 
VALUES('Televisão', 2599.99, 'Televisor de 60 polegadas, ideal para salas de TV', 1),
('Fone Redragon Zeus X', 250.00, 'Fone gamer confortável com led lateral e entrada USB', 1),
('Vanish Max White', 29.99, 'Produto de limpeza qque deixa a roupa mais branca que o normal', 2), 
('Detergente YPÊ', 9.99, 'Detergente de limpeza extrema com odor industrial de côco', 2),
('Cebola Roxa', 2.95, 'Cebola Roxa R$2,95 o quilo', 3),
('Alho Poró', 3.15, 'Alho poró R$3.15 o quilo', 3),
('Pão Francês', 0.99, 'Pão francês por unidade', 4),
('Baguete', 5.49, 'Baguete artesanal com fermentação natural', 4),
('Filé Mignon', 59.90, 'Filé mignon por quilo, corte nobre de carne', 5),
('Costela Bovina', 25.90, 'Costela bovina por quilo, ideal para churrasco', 5),
('Queijo Muçarela', 32.99, 'Queijo muçarela por quilo, fresco e saboroso', 6),
('Iogurte Natural', 3.99, 'Iogurte natural 200ml', 6),
('Pizza Congelada', 19.99, 'Pizza congelada de quatro queijos', 7),
('Frango Empanado', 14.99, 'Frango empanado em embalagem de 500g', 7),
('Arroz Branco', 7.99, 'Arroz branco tipo 1 em pacote de 1kg', 8),
('Feijão Carioca', 8.99, 'Feijão carioca em pacote de 1kg', 8),
('Suco de Laranja', 6.49, 'Suco de laranja 1L, integral sem açúcar', 9),
('Cerveja Pilsen', 3.49, 'Cerveja pilsen em lata de 350ml', 9),
('Shampoo Dove', 15.99, 'Shampoo Dove para cabelos secos 200ml', 10),
('Creme Dental Colgate', 8.99, 'Creme dental Colgate de 90g', 10),
('Ração para Cães', 89.99, 'Ração premium para cães adultos 10kg', 11),
('Brinquedo para Gatos', 19.99, 'Brinquedo interativo para gatos', 11);

INSERT INTO GENEROS(DESC_GENERO)
VALUES('Masculino'), ('Feminino');

INSERT INTO USUARIO(CPF, NOME, DT_NASCIMENTO, EMAIL, ID_GENERO, TELEFONE)
VALUES('11223344556', 'TESTE DA SILVA', '2001-05-08', 'EMAIL.TESTE@TESTE.COM', 1, '123456789'),
('22334455667', 'ANA SOUSA', '1995-10-15', 'ana.sousa@email.com', 2, '987654321'),
('33445566778', 'JOÃO PEREIRA', '1987-07-25', 'joao.pereira@email.com', 1, '456123789'),
('44556677889', 'CAROLINE LIMA', '2000-01-30', 'caroline.lima@email.com', 2, '789123654'),
('55667788990', 'LUCA DIAS', '1998-09-22', 'luca.dias@email.com', 1, '654987321'),
('66778899001', 'TAYLOR SILVA', '1993-03-05', 'taylor.silva@email.com', 2, '123789456');

-- CONSULTAS

-- SELECT 
-- U.NOME Nome
-- ,U.CPF
-- -- ,FORMAT(DT_NASCIMENTO, 'dd/MM/yyyy') Nascimento
-- ,DT_NASCIMENTO Nascimento
-- ,G.DESC_GENERO Gênero
-- ,U.TELEFONE Telefone
-- ,U.EMAIL Email
-- FROM
-- USUARIO U
-- JOIN GENEROS G
-- ON U.ID_GENERO = G.ID;

-- SELECT 
-- P.ID
-- ,P.NOME
-- ,P.PRECO PREÇO
-- ,P.DESCRICAO
-- ,C.DESC_CATEGORIA
-- FROM PRODUTO P
-- JOIN CATEGORIA C
-- ON P.ID_CATEGORIA = C.ID
-- ORDER BY PREÇO DESC;