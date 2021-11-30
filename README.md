# CRUD com Codeigniter 4
Aplicação simples para criar, visualizar, atualizar e deletar registros de usuários utilizando o framework Codeigniter 4

# Requisitos do servidor
- PHP v7.2^
- MySQL v5.7^

# Frameworks
- [x] Codeigniter 4
- [x] Bootstrap 5.1

# Páginas
## Página 1 - Página Inicial
A página inicial contém uma tabela com paginação para exibir todos os usuários com botão para editar e remover.

##  Página 2 - Adicionar Usuário
Página com formulário para adicionar usuario com os campos:
- Nome Completo (Obrigatório, mínimo 3 caracteres)
- E-mail (Obrigatório, email, unico)

## Página 3 - Editar Usuário
A página para editar usuário tem que passar o id do usuário na url
```
http://localhost:8080/editar-usuario/2
```

Campos do formuláro para editar
- Id (Obrigatório, númerico, ) 
- Nome Completo (Obrigatório, mínimo 3 caracteres)
- E-mail (Obrigatório, email, unico exceto se for do mesmo id)

# Instalação
Renomear o arquivo .env_example para .env e configurar o banco de dados MySQL

## Instalando pacotes necessários
```
composer install
```

## Executando os migrations
```
php spark migrate
```

## Executando os seeders (Gerando dados fakes para testes)
```
php spark db:seed UsuarioSeeder
```

## Iniciar servidor em localhost
```
php spark serve
```
