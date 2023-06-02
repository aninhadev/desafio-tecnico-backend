## Problema 1:
Havia um erro na página inicial ao tentar navegar para as páginas "Produtos" ou "Categorias". Realizei uma correção na navegação, ajustando as rotas para que, caso o caminho da rota mude, não seja necessário alterar o código novamente.

## Problema 2:
Um usuário relatou dificuldades ao cadastrar uma nova categoria. Ao preencher os dados e clicar em "Salvar", a mensagem de sucesso era exibida, mas o cadastro não era efetuado. Realizei uma correção nesse procedimento, modificando a rota "Route::get('/produtos/cadastrar', 'ProductController@create');" para "Route::post('/produtos/cadastrar', 'ProductController@store');", pois o verbo HTTP adequado para a criação de dados é o POST.

Modifiquei a URL no formulário que estava no front para {{route('categorias.cadastrar')}}

## Problema 3:
Na página de listagem de produtos, os usuários identificaram que o nome da categoria relacionada não estava sendo exibido. Realizei uma correção para exibir o nome correto da categoria vinculada ao produto. Para isso, criei o relacionamento entre as tabelas de produtos e categorias. Utilizei o relacionamento "hasMany" para indicar que uma categoria pode ter muitos produtos e "belongsTo" para indicar que um produto pertence a uma categoria, por meio do campo "category_id". No front-end, utilizei a seguinte sintaxe para exibir o nome da categoria: "{{$produto->category->name}}". Dessa forma, sempre que houver um loop dentro da tabela de produtos, o Laravel irá acessar o relacionamento que foi criado com a categoria e retornará o nome da categoria desejada.
