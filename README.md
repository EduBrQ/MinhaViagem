# MinhaViagem
Projeto de Aluguel de quartos. FRONT: ANGULAR, BACK: LARAVEL

## Sistema de Locação de Quartos

Sistema que permitirá aos usuários locar quartos quando estiverem em viagem.

## Instruções da api

- Baixe o repositório
```bash
git clone https://github.com/EduBrQ/MinhaViagem.git
```


- Va para a pasta da api
```bash
cd MinhaViagem
```

- Rode o composer install

```bash
composer install
```


- Configure o .env

```bash
copiar .env.example .env
```

- Gere a key da aplicação

```bash
php artisan key:generate
```

- Rode as migrações

```bash
php artisan migrate
```

- Rode as seeders

```bash
php artisan db:seed
```

- Gera a chave jwt

```bash
php artisan jwt:secret
```

- Coloque o prefixo da api no .env

```bash
API_PREFIX=api

```

- Rode o servidor

```bash
php artisan serve
```

- Para ver a documentação abra o link 

```bash
http://localhost:8000/api/documentation
```

## Istruções do front

- Vá parar a pasta web

```bash
cd MinhaViagem/web
```

- Rode o npm install (Se necessário Atualize o npm)

```bash
npm install
```

- Atualize o angular cli

```bash
npm install -g @angular/cli@latest
```

- Rode o servidor

```bash
ng serve
```


- Abra o navegador 

```bash
http://localhost:4200
```



