# SmartDev

Site institucional da SmartDev para divulgação de desenvolvimento de sistemas personalizados.

## Tecnologias

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL

## Estrutura

- `index.php` — página principal
- `style.css` — estilos
- `script.js` — interações
- `salvar_contato.php` — processamento do formulário
- `enviar.php` — compatibilidade com a versão antiga do formulário
- `conexao.php` — arquivo local de conexão com o MySQL (não publicar)
- `imagens/` — imagens do site

## Banco de dados

O formulário salva mensagens na tabela `contatos`.

Exemplo:

```sql
CREATE DATABASE smartdev;

USE smartdev;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

Configure a conexão no seu ambiente local. Não coloque senha real do banco no GitHub.

## Rodar no XAMPP

1. Copie a pasta para `C:\xampp\htdocs\smartdev`.
2. Inicie Apache e MySQL no XAMPP.
3. Crie o banco `smartdev` no phpMyAdmin.
4. Configure o `conexao.php`.
5. Abra `http://localhost/smartdev/`.

## GitHub

Este projeto pode ser versionado normalmente com Git. Arquivos locais, credenciais e bancos de dados não devem ser publicados.
