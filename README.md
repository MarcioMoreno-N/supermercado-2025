# 🛒 Projeto Supermercado 2025

Aplicação web desenvolvida em **Laravel** para o gerenciamento dos cadastros básicos de um supermercado: **produtos**, **tipos de produtos** e **fornecedores**. O sistema permite listar os registros e oferece um CRUD completo para o cadastro de fornecedores.

## 📋 Descrição

O Projeto Supermercado 2025 é um sistema de cadastro simples, voltado para o controle de informações essenciais de um supermercado. Ele utiliza o padrão **MVC** do Laravel, com models, controllers e views (Blade) integrados a um banco de dados relacional.

As telas são construídas com **Bootstrap 5**, garantindo uma interface limpa e responsiva.

## ✨ Funcionalidades

- **Produtos**
  - Listagem de produtos com ID, nome, descrição, preço (formatado em R$) e quantidade.
- **Tipos de Produtos**
  - Listagem dos tipos/categorias de produtos cadastrados.
- **Fornecedores (CRUD completo)**
  - Listar todos os fornecedores.
  - Cadastrar um novo fornecedor (nome, razão social e CNPJ).
  - Editar um fornecedor existente.
  - Excluir um fornecedor (com confirmação).
  - Validação dos campos obrigatórios e CNPJ único.
  - Mensagens de feedback de sucesso após cada operação.

## 🗂️ Estrutura de dados

| Tabela            | Campos principais                                  |
|-------------------|----------------------------------------------------|
| `produtos`        | nome, descrição (opcional), preço, quantidade      |
| `tipos_produtos`  | nome                                               |
| `fornecedores`    | nome, razão social, CNPJ (único)                   |

## 🛠️ Tecnologias utilizadas

- [PHP 8.2+](https://www.php.net/)
- [Laravel 12](https://laravel.com/)
- [Blade](https://laravel.com/docs/blade) (engine de templates)
- [Eloquent ORM](https://laravel.com/docs/eloquent)
- [Bootstrap 5.3](https://getbootstrap.com/) (via CDN)
- [SQLite](https://www.sqlite.org/) (banco de dados padrão; configurável)
- [Composer](https://getcomposer.org/) e [Node.js / npm](https://nodejs.org/)

## 🚀 Instalação e execução local

### Pré-requisitos

- PHP 8.2 ou superior
- Composer
- Node.js e npm

### Passo a passo

1. **Clone o repositório:**
   ```bash
   git clone https://github.com/MarcioMoreno-N/supermercado-2025.git
   cd supermercado-2025
   ```

2. **Instale as dependências do PHP:**
   ```bash
   composer install
   ```

3. **Instale as dependências do front-end:**
   ```bash
   npm install
   ```

4. **Crie o arquivo de ambiente e gere a chave da aplicação:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Prepare o banco de dados (SQLite por padrão):**
   ```bash
   # Cria o arquivo do banco SQLite, se ainda não existir
   touch database/database.sqlite

   # Executa as migrations
   php artisan migrate
   ```
   > 💡 Para usar outro banco (MySQL, PostgreSQL, etc.), basta ajustar as variáveis `DB_*` no arquivo `.env`.

6. **Inicie o servidor de desenvolvimento:**
   ```bash
   php artisan serve
   ```

7. **Acesse no navegador:**
   ```
   http://localhost:8000
   ```

### Rotas disponíveis

| Método | Rota                          | Descrição                          |
|--------|-------------------------------|------------------------------------|
| GET    | `/produtos`                   | Lista de produtos                  |
| GET    | `/tipos-produtos`             | Lista de tipos de produtos         |
| GET    | `/fornecedores`               | Lista de fornecedores              |
| GET    | `/fornecedores/create`        | Formulário de cadastro             |
| POST   | `/fornecedores`               | Salva um novo fornecedor           |
| GET    | `/fornecedores/{id}/edit`     | Formulário de edição               |
| PUT    | `/fornecedores/{id}`          | Atualiza um fornecedor             |
| DELETE | `/fornecedores/{id}`          | Remove um fornecedor               |

## 🎓 Projeto acadêmico

Este é um **projeto acadêmico**, desenvolvido para fins de estudo e aprendizado do framework Laravel durante a faculdade. Não se destina a uso em produção.
