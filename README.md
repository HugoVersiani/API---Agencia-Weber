# TesteAgenciaWeber

## Considerações:

-Escolhi fazer essa pequena aplicação utilizando a arquitetura API REST e estrutura MVC;<br/>
-Também decidi fazer em PHP puro utilizando o composer/psr4;<br/>
-Para rodar a api localmente utilizei o xampp. E o Insomnia para realizar requisições;<br />
-Criei uma autenticação por JTW porém optei por não bloquear os endpoints pra facilitar os testes</br>


## EndPoints da API:

A API conta com 7 endpoints/funções sendo elas:

### localhost/public/api/auth/login:

**login:** <br/>
Faz login por JWT;<br/>
Método: POST;
Recebe:
{
	"email":"teste@gmail.com",
	"password":"123"
}

### localhost/public/api/category/addCategory:

**addCategory:** <br/>
Adiciona uma nova categoria ao catálogo;<br/>
Método: POST;
Recebe:
{
	"name":"carnes",
	"description":"carnes deliciosamente boas!!"
}

### localhost/public/api/category/editCategoryById

**addProduct:** <br/>
Edita uma categoria do catalogo;<br/>
Método: POST;
Recebe:
{
	"id":0,
	"name":"Frutos do Mar",
	"description":"Deliciosos frutos do mar"
}


### localhost/public/api/product/addProduct;

**addProduct:** <br/>
Adiciona um novo produto ao catalogo;<br/>
Método: POST;
Recebe:
{
	"name":"Alface com rucula",
	"price":99.00,
	"image":"imagens/img_lagosta.png",
	"category_id":3
}

### localhost/public/api/product/editProductById:

**editProductById:** <br/>
Edita um produto;<br/>
Método: POST;
Recebe:
{
	"id":2,
	"name":"lagostinha",
	"price":99.00,
	"image":"imagens/img_lagosta.png",
	"category_id":0,
	"status": 1
}


### localhost/public/api/product/deleteProductById:

**deleteProductById:** <br/>
Deleta um produto do catalogo;<br/>
Método: POST;
Recebe:
{
	"id":1
}

### localhost/public/api/product/getProductsByCategory:

**addProduct:** <br/>
Mostra todos os produtos e suas categorias<br/>
Método: GET;





Obs: código desenvolvido para teste técnico, não autorizo a utilização deste código para outros fins.