/* Percorra o objeto clientes e mostre o nome da cada cliente da seguinte maneira:
“ultimoSobrenome, primeiroNome” */

var clientes = [
    {
        'id': 1,
        'nome': 'Luis santos Silveira',
        'idade': 18
    },
    {
        'id': 2,
        'nome': 'Ricardo Lopes Alves',
        'idade': 30
    },
    {
        'id': 3,
        'nome': 'Gustavo Silva Junior',
        'idade': 26
    }
];

clientes.forEach(cliente => {
    const nomeDividido = cliente.nome.split(' ')

    console.log(`${nomeDividido[nomeDividido.length - 1]}, ${nomeDividido[0]}`)
})

/* 

Observações:

A variável 'Clientes' estava originalmente definida como um objeto no documento. No entanto, um objeto é uma coleção de pares chave/valor, 
enquanto a variável 'Clientes' é, na verdade, uma coleção de objetos. Portanto, decidi transformar 'Clientes' em uma lista de objetos para evitar 
erros durante a execução do código.

A alteração feita foi alterar '{}' por '[]' na definição da variável 'Clientes'.

*/
