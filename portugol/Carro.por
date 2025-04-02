programa {
  funcao inicio()
  {
   cadeia cor, marca, modelo
   inteiro portas
   real km

   escreva("Marca do automóvel: ")
   leia(marca)
   
   escreva("Modelo do automóvel: ")
   leia(modelo)
   
   escreva("Cor do automóvel: ")
   leia(cor)
   
   escreva("Quantidade de portas do automóvel: ")
   leia(portas)
   
   escreva("Quilometragem do automóvel: ")
   leia(km)

   escreva("Informações do Automóvel:\n",
   "Marca: ", marca, "\n",
   "Modelo: ", modelo, "\n",
   "Cor: ", cor, "\n",
   "Quantidade de portas: ", portas, "\n",
   "Quilometragem: ", km, " km", "\n")
  }
}
