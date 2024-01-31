/* 

Escreva uma consulta SQL para retornar dados únicos conforme tabela abaixo.
Caso o aluno tenha mais de dois responsáveis, traga apenas os dois primeiros
responsáveis encontrados na tabela.

*/

-- Dialeto: MariaDB

WITH RankedResponsaveis AS (
    SELECT
        p.IdAluno,
        p.IdResponsavel,
        p.Parentesco,
        a.Nome AS Aluno,
        r.Nome AS NomeResponsavel,
        DENSE_RANK() OVER (PARTITION BY p.IdAluno ORDER BY p.IdResponsavel) AS RowNum
    FROM
        Parentesco p
        INNER JOIN Aluno a ON p.IdAluno = a.Id
        INNER JOIN Responsavel r ON p.IdResponsavel = r.Id
)

SELECT
    Aluno,
    MAX(CASE WHEN RowNum = 1 THEN NomeResponsavel END) AS Responsavel,
    MAX(CASE WHEN RowNum = 1 THEN Parentesco END) AS Parentesco,
    MAX(CASE WHEN RowNum = 2 THEN NomeResponsavel END) AS Responsavel,
    MAX(CASE WHEN RowNum = 2 THEN Parentesco END) AS Parentesco
FROM
    RankedResponsaveis
WHERE
    IdAluno = 1 -- Id do aluno desejado
GROUP BY
    Aluno; 

/* 

Observações:

Caso necessite de uma consulta que retorne todos os alunos, basta remover a cláusula WHERE na linha 33.

*/