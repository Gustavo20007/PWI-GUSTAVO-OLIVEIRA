var conceito;
var nota1 = 1;  
var nota2 = 1; 
var media = (nota1 + nota2) / 2;

var conceito;

if (media >= 9.1 && media <= 10.0) {
    conceito = "A";
} else if (media >= 7.6 && media < 9.1) {
    conceito = "B";
} else if (media >= 6.1 && media < 7.6) {
    conceito = "C";
} else if (media >= 4.1 && media < 6.1) {
    conceito = "D";
} else {
    conceito = "E";
}

var situacao = (conceito === "A" || conceito === "B" || conceito === "C") ? "APROVADO" : "REPROVADO";

console.log("Notas: " + nota1 + " e " + nota2 + "\nMédia: " + media.toFixed(2) + "\nConceito: " + conceito + "\n" + situacao);