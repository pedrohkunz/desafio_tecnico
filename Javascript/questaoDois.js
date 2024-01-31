/* Formate a variável “numero” para o seguinte formato: “(XX)_X_XXXX-XXXX” */

function removerNaoNumeros(numero) {
    return numero.replace(/[^0-9]/g, '')
}

function formatarNumero(numero) {
    const numeroLimpo = removerNaoNumeros(numero)
    return `(${numeroLimpo.slice(0, 2)})_${numeroLimpo.slice(2, 3)}_${numeroLimpo.slice(3, 7)}-${numeroLimpo.slice(7, 11)}`   
}

var numero = "5(1)9-876-543-21"
numero = formatarNumero(numero)

console.log(numero)