programa
{
	
	funcao inicio()
	{
		

    
    real banana, laranja, maca, uva
    real desconto_banana, desconto_laranja, desconto_maca, desconto_uva
    real preco_com_desconto_banana, preco_com_desconto_laranja, preco_com_desconto_maca, preco_com_desconto_uva
    real desconto_percentual

    
    banana = 12.30
    laranja = 13.50
    maca = 11.80
    uva = 17.60

    
    desconto_percentual = 0.10

    
    desconto_banana = banana * desconto_percentual
    desconto_laranja = laranja * desconto_percentual
    desconto_maca = maca * desconto_percentual
    desconto_uva = uva * desconto_percentual

    
    preco_com_desconto_banana = banana - desconto_banana
    preco_com_desconto_laranja = laranja - desconto_laranja
    preco_com_desconto_maca = maca - desconto_maca
    preco_com_desconto_uva = uva - desconto_uva

    
    escreva("Preço da Banana com 10% de desconto: R$", preco_com_desconto_banana, "\n")
    escreva("Preço da Laranja com 10% de desconto: R$", preco_com_desconto_laranja, "\n")
    escreva("Preço da Maçã com 10% de desconto: R$", preco_com_desconto_maca, "\n")
    escreva("Preço da Uva com 10% de desconto: R$", preco_com_desconto_uva, "\n")


	}
}
/* $$$ Portugol Studio $$$ 
 * 
 * Esta seção do arquivo guarda informações do Portugol Studio.
 * Você pode apagá-la se estiver utilizando outro editor.
 * 
 * @POSICAO-CURSOR = 296; 
 * @PONTOS-DE-PARADA = ;
 * @SIMBOLOS-INSPECIONADOS = ;
 * @FILTRO-ARVORE-TIPOS-DE-DADO = inteiro, real, logico, cadeia, caracter, vazio;
 * @FILTRO-ARVORE-TIPOS-DE-SIMBOLO = variavel, vetor, matriz, funcao;
 */