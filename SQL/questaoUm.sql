/* 

Escreva comandos SQL para inserir os dados abaixo conforme o diagrama
apresentado.

a) Pablo é Pai de Lucas
b) Brenda é Mãe de Lucas

*/

-- Dialeto: MariaDB

INSERT INTO Responsavel (Nome) VALUES ('Pablo'), ('Brenda');

INSERT INTO Aluno (Nome) VALUES ('Lucas');

INSERT INTO Parentesco (IdResponsavel, IdAluno, Parentesco) VALUES ('1', '1', 'Pai'), ('2', '1', 'Mãe');



