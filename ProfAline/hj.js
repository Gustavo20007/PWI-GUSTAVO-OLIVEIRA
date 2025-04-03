var salarioAtual = 2398.00; {
    var aumentoPercentual;
    var aumentoValor;
    var novoSalario;
    
        if (salarioAtual <= 1518.00) {
            aumentoPercentual = 20;
        } else if (salarioAtual > 1518.00 && salarioAtual <= 2700.00) {
            aumentoPercentual = 15;
        } else if (salarioAtual > 2700.00 && salarioAtual <= 5000.00) {
            aumentoPercentual = 10;
        } else {
            aumentoPercentual = 5;
        }
        console.log (aumentoPercentual,"%")
    }
    
    aumentoValor = (salarioAtual * aumentoPercentual) / 100;
    novoSalario = salarioAtual + aumentoValor;
    
    console.log("Salário antes do reajuste: R$ " + salarioAtual);
    console.log("Percentual de aumento: " + aumentoPercentual + "%");
    console.log("Valor do aumento: R$ " + aumentoValor);
    console.log("Novo salário após o aumento: R$ " + novoSalario);
    