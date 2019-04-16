## Instalação

```sh
composer update
```

Subir um servidor
```sh
php artisan serve
```

## Renovar o banco de dados
Caso queira zerar o Banco de dados

```sh
php artisan migrate:refresh
```

## Semear Dados
Caso queira incluir dados aleatórios

```sh
php artisan db:seed
```

## Alternar banco de dados
Se quiser trocar para um banco mysql por exemplo crie o banco e configure a conexão no arquivo .env
basta duplicar o arquivo
```sh
.env.exemple
```

e fazer sua própria configuração
