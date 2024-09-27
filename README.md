

---

# Notes

Sistema de criação de notas

## Índice

- [Instalação](#instala%C3%A7%C3%A3o)
- [Pré-requisitos](#pr%C3%A9-requisitos)
- [Configuração](#configura%C3%A7%C3%A3o)
- [Comandos Úteis](#comandos-%C3%BAteis)
- [Testes](#testes)
- [Deploy](#deploy)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Contribuição](#contribui%C3%A7%C3%A3o)
- [Licença](#licen%C3%A7a)

## Instalação

Clone este repositório em sua máquina:

```bash
git clone https://github.com/seu-usuario/seu-projeto.git cd seu-projeto
```

### Pré-requisitos

Certifique-se de ter o [Composer](https://getcomposer.org/) e o [PHP](https://www.php.net/) instalados.

Instale as dependências do projeto:

```bash
composer install
```

Instale as dependências do frontend (caso esteja usando Laravel Mix ou outra ferramenta de frontend):

```bash
npm install
```

### Configuração

1. Duplique o arquivo `.env.example` e renomeie para `.env`:

```bash
cp .env.example .env
```

2. Gere a chave da aplicação:

```bash
php artisan key:generate
```

3. Configure as credenciais do banco de dados no arquivo `.env`:

```bash
DB_CONNECTION=mysql 
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=seu_banco_de_dados
DB_USERNAME=seu_usuario 
DB_PASSWORD=sua_senha
```

4. Execute as migrações:

```bash
php artisan migrate
```

### Comandos Úteis

- **Rodar o servidor de desenvolvimento**:

```bash
php artisan serve
```

- **Compilar os assets do frontend** (se estiver usando Laravel Mix):

```bash
npm run dev
```

### Testes

Execute os testes da aplicação com o PHPUnit:

```bash
php artisan test`
```
### Deploy

Instruções para fazer o deploy da aplicação (por exemplo, usando o [Forge](https://forge.laravel.com/) ou outro serviço).

## Tecnologias Utilizadas

- [Laravel](https://laravel.com/) - Framework PHP
- [MySQL](https://www.mysql.com/) - Banco de dados relacional
- [Laravel Mix](https://laravel-mix.com/) - Compilador de assets (opcional)
- [PHPUnit](https://phpunit.de/) - Framework de testes

## Contribuição

Se você quiser contribuir com o projeto, siga as instruções abaixo:

1. Faça um fork do projeto.
2. Crie uma branch com a sua feature: `git checkout -b minha-nova-feature`.
3. Faça commit das suas mudanças: `git commit -m 'Adiciona nova feature'`.
4. Envie para a branch original: `git push origin minha-nova-feature`.
5. Crie um Pull Request.

---
