<h1 align="center">Site Limetal</h1>

Site Institucional totalmente dinâmico e configurado via painel administrativo.

### :rocket: Tecnologias:
- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)

### :briefcase: Arquitetura: 
 - [MVC - Model-View-Controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

### :books: Ferramentas e componentes:
- [NPM](https://nodejs.org/en/)
- [Composer](https://getcomposer.org/)
- [Migrations](https://laravel.com/docs/7.x/migrations)
- [Seeds](https://laravel.com/docs/7.x/seeding)
- [JWT- JSON Web Tokens](https://jwt.io/)

<h2 align="center">Demonstração</h2>

![](https://github.com/julionery/docs/blob/master/Limetal/limetal.png?raw=true)

<h2 align="center">Painel Administrativo</h2>

![](https://github.com/julionery/docs/blob/master/Limetal/painel1.PNG?raw=true)
![](https://github.com/julionery/docs/blob/master/Limetal/painel2.PNG?raw=true)
![](https://github.com/julionery/docs/blob/master/Limetal/painel3.PNG?raw=true)
![](https://github.com/julionery/docs/blob/master/Limetal/painel4.PNG?raw=true)


### :information_source: Como Usar:

Para executar corretamente esta aplicação você precisará do [Git](https://git-scm.com), [PHP](https://www.php.net/), [MySQL](https://www.mysql.com/), [Laravel](https://laravel.com/), [Composer](https://getcomposer.org/) e [NPM](https://nodejs.org/en/) já instalados e configurados. 

No seu terminal digite os comandos:

```bash
# Clone este repositório
$ git clone https://github.com/julionery/laravel-site-limetal.git

# Vá para a pasta do repositório
$ cd laravel-site-limetal/

# Instale as dependências
$ npm install
$ composer install

# Ajuste as configurações de conexão
$ renomeie o arquivo .env.example para .env e adicione as informações do banco de dados
$ e crie o banco de dados "limetal" no seu MySQL

# Crie as informações do banco de dados
$ php artisan migrate
$ php artisan db:seed

# Inicie a aplicação
$ php artisan serve

OBS: para ativar verificação por tipo de usuário (ACL) descomente o código em:
app/Provides/AuthServiceProvider.php

// foreach ($this->getPermissoes() as $permissao) {
//     $gate->define($permissao->nome,
//         function ($user) use ($permissao) {
//             return $user->existePapel($permissao->papeis)
//                 || $user->existeAdmin();
//         }
//     );
// }

```


---

<h4 align="center">
    Feito com ❤ por <a href="https://www.linkedin.com/in/julio-nery/" target="_blank">Júlio Nery</a>!
    <g-emoji class="g-emoji" alias="wave" fallback-src="https://github.githubassets.com/images/icons/emoji/unicode/1f44b.png">👋</g-emoji>
</h4>
