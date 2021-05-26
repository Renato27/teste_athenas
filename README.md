## Teste Athenas3000

# Instalação

- Faça um git remote do repositório;
- Faça um git pull da branch master;
- Depois de ter terminado o pull, entre na pasta da aplicação e instale o composer com o comando (composer install);
- Criar uma banco de dados chamado teste_athenas;
- Ainda dentro da pasta da aplicação rode o mando (php artisan migrate --seed) para popular o banco de dados;
- Por fim rode o comando (php artisan serve) para subir o servidor;


# Observações

- É necessário se registrar para acessar a aplicação;
- A senha para se registrar deve ter no mínimo 8 digitos;
- Cada tipo de categoria tem uma determinada visualização;
    - Categoria ADMIN: Tem acesso a todas as pessoas cadastradas;
    - Categoria GERENTE: Tem acesso a todos os usuários do tipo de categoria NORMAL;
    - Categoria NORMAL: Tem acesso a somente aos seus dados;

