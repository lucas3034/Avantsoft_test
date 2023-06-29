  
![print projeto](https://github.com/lucas3034/Avantsoft_test/assets/77418656/494e62da-3682-417b-84ef-c1a7572c345d)

  
                                                         ETAPAS DO PROCESSO:
                                                                                  
1- Baixar o Php, Laravel e Composer:
  
        º Eu não possuia o Php em meu computador anteriormente, mas não foi dificil baixa-lo, pelo próprio site(https://windows.php.net/download#php-8.2) eu consegui.
        
        a parte de editar a variável de ambiente foi um pouco chata, mas um pouco de pesquisa resolveu o problema.
        
        º O Composer é um gerenciador de depêndencias que foi importante para o processo, mas baixá-lo foi facil.
        
        ºEntão utilizando o Composer eu baixei o Laravel pelo próprio terminal e iniciei o servidor de desenvolvimento.
        
          
2- Alterar a rota:

    º Inicialmente a rota web estava levando para uma página de Welcome do próprio Laravel, então foi necessário trocar para minha nova página.
    
    º Criei a variavel "api" na resources/views que usava um metodo de HTTP get para puxar o link fornecido
    
	º foi necessario utilizar a função "withoutVerifying()" neste método, pois o certificado SSL não estava sendo validado, mas como a API era de confiança, programei para não verificar
 
	º A variavel apiArray foi criado para retornar a api como json() e ambas foram retornadas.
 
   
3- Criar o novo arquivo:

	º Criei uma linha simples para representar os títulos dos dados.
 
	º Depois criei um loop foreach para mostrar toda a tabela, e dentro do loop chamei as variaveis que eu criei, e dentro dela indiquei o arrey "users" da API e declarei como uma var: $user
 
	º Em outra tabela simples chamei cada dado como um array único da da var $user que foi criada agora pouco.
 
   
4- Estilizar a página:

	º Inicialmente pensei em estilizar a página toda do zero, mas então decidi usar a beleza da página welcome que me foi apresentada pelo Laravel, então passei os códigos para meu arquivo
 
	º Retirei os quadrados e informações desnecessárias e usei uma div para armazenar a tabela, também adicionei meu nome no rodapé da página.
 
	º Centralizei o bloco e os arrays, para ficar mais bonito. Adicionei um padding para impedir que ficassem muitos juntos, coloquei linhas horizontais e verticais para separar e mudei as cores.
 
