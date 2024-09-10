/*

Autores: Arthur Moura, Julia Peres, Fabricio Pisni, Gabriella Holanda 

Data: 30/07/2024

Horario: 14:10

Atividade sobre as olimpiadas

*/

//Atividade 03
let tempo
let altura

let valorAFunc = -5
let valorBFunc = 20

const formulaTempo = function calculaTempo(tempo) {
    let resultado = valorAFunc * Math.pow(tempo,2) + valorBFunc * tempo
    return resultado;
}


const formulaVertice = - valorBFunc / (2 * valorAFunc)


//questao 01
tempo = formulaVertice

console.log(`O tempo em que o atleta atingiu a altura maxima foi: ${tempo}s`)

//questao 02

tempo = 2

console.log (`A altura maxima atingida foi de ${formulaTempo(tempo)}M`)

//Atividade 04
const formulaEspectadores = function calculaTempo(tempo) {
    let resultado = Math.pow(tempo, 2) + 3 * tempo + 50
    return resultado;
}

//questão 01
tempo = 0

console.log(`A quantidade de espectadores no inicio do evento foi de ${formulaEspectadores(tempo)}`)

//questao 02
tempo = 5

console.log(`A quantidade de espectadores após 5h de evento foi de ${formulaEspectadores(tempo)}`)