/* 

Escreva uma consulta SQL para trazer todos os dados. Seja criativo.

*/

-- Dialeto: MariaDB

SELECT 
    A.Id AS idAluno,
    A.Nome AS nomeAluno,
    GROUP_CONCAT(

        CONCAT('{ IdResponsavel: ', R.Id, ', NomeResponsavel: "', R.Nome, '", Parentesco: "', P.Parentesco, '" }')
        ORDER BY R.Id
        SEPARATOR ', '

    ) AS responsaveis
FROM Aluno AS A
LEFT JOIN Parentesco AS P ON A.Id = P.IdAluno
LEFT JOIN Responsavel AS R ON P.IdResponsavel = R.Id
GROUP BY A.Id, A.Nome;
