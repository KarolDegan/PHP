# Composer

- composer install: para instalar tudo o que está no json, mas não está no projeto
- composer update: para atualizar os pacotes que já existem

## Aula 2

- codigo

```bash
# pode definir o html depois
$crawler = new Crawler(); 
$crawler->addHtmlContent($html);
```

- para pegar o nome do curso dentro do html, inpecionar:

```html
<span class="card-curso__nome">Curso PHP: conceitos, lidando com dados, loops e mais</span>
```

### php.ini

- precisar baixar o certificado `cacert.pem` e colocar dentro de `extrar\ssl`
- atualizar o caminha no php.ini nos pontos `curl.cainfo` e `openssl.cafile` com o `caminho\cacert.pem`

### classsmap

- colocar no composer.json
- clases e arquivos que não seguem a psr-4

### files

- arquivos que sempre serão incluidos

## Aula 4

- os arquivos executáveis que são instalados via composer ficam na pasta vendor/bin

- separa dependencias de produção de desenvolvimento: `composer require --dev`
- php vendor\bin\phan --allow-polyfill-parser src\Buscador.php

- configurar arquivo dentro de pasta .phan como config.php e clocar os
- php vendor\bin\phan --allow-polyfill-parser

- usar o flag no-dev para baixar apenas as dependências de produção.

## Aula 5

### composição de scripts

```php
        "check":[
            "@phan",
            "@cs",
            "@test"
        ]
```

- é poosível rodar eventos `https://getcomposer.org/doc/articles/scripts.md`, escolhendo o momento que o script vai rodar