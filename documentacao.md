# Leticia Cardoso
# Documentação do LARAVEL
**Introdução**

O Laravel é um framework moderno utilizado para facilitar o desenvolvimento web. Ele possui uma estrutura organizada e de fácil compreensão, tornando o trabalho do desenvolvedor mais ágil e produtivo.

---
**Requisitos Iniciais**

Antes de instalar o Laravel, é necessário ter instalado no seu sistema:

 - PHP
 - Composer
 - Banco de Dados (à sua escolha, por exemplo: MySQL)

---

**Instalação**

Para criar um novo projeto, utilize o Composer:

    composer create-project laravel/laravel nome-do-projeto

Esse comando baixa e configura o Laravel em uma pasta com o nome definido por você.

Para rodar o servidor local, utilize:

    php artisan serve

O comando acima inicia o servidor embutido do Laravel.


---

**Estrutura de Diretórios**

O Laravel oferece uma estrutura organizada e eficiente, adequada para projetos de todos os tamanhos.
Alguns diretórios importantes são:

 - bootstrap/ → Contém o arquivo app.php, responsável por inicializar o
   framework.
 - config/ → Contém os arquivos de configuração da aplicação.
 - routes/ → Contém todas as definições de rotas da aplicação.
 - resources/ → Armazena as visualizações e recursos (tanto compilados
   quanto não compilados).

---

**Exemplo de Rota Simples**

    // Rota básica que retorna um texto
    Route::get('/hello', function () {
        return 'Olá, mundo!';
    });


---

**Conclusão**

O Laravel se destaca como um dos frameworks PHP mais completos e acessíveis para o desenvolvimento de aplicações web modernas. Sua estrutura clara, recursos poderosos e comunidade ativa tornam possível criar soluções simples ou sistemas robustos com alta qualidade e produtividade, seguindo boas práticas de desenvolvimento.






