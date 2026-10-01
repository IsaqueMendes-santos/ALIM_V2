<div align="center">

# ALIM

### Sistema de Cadastro de Clientes e Produtos

<img src="https://img.shields.io/badge/Status-Conclu%C3%ADdo-e50914?style=for-the-badge&logo=github&logoColor=white" alt="Status" />
<img src="https://img.shields.io/badge/Vers%C3%A3o-1.0.0-0a0a0a?style=for-the-badge&logo=git&logoColor=white" alt="Versão" />
<img src="https://img.shields.io/badge/PHP-8.x-777bb4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/SQLite-loja.db-003b57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite" />
<img src="https://img.shields.io/badge/Licen%C3%A7a-MIT-333333?style=for-the-badge&logo=opensourceinitiative&logoColor=white" alt="Licença" />

</div>

---

## Sobre o Projeto

**ALIM** é um sistema web desenvolvido em **PHP + SQLite** para cadastro de clientes e produtos. Foi criado como projeto acadêmico para a disciplina de **Desenvolvimento de Sistemas**, aplicando conceitos de:

- Estruturação com **HTML5** semântico
- Estilização com **CSS3** (tema dark com destaque vermelho)
- Lógica de back-end com **PHP puro** (sem frameworks)
- Persistência de dados com **SQLite** (`loja.db`)
- Sessões PHP para mensagens de sucesso/erro
- Validações e sanitização de dados

A sigla **ALIM** representa os pilares do projeto:

| Letra | Significado |
| :---: | :--- |
| **A** | Automação |
| **L** | Logística |
| **I** | Inteligente |
| **M** | Mercadorias |

---

## Funcionalidades

| Página | Descrição |
| :--- | :--- |
| `index.php` | Página inicial com apresentação do sistema e atalhos para os cadastros. |
| `cliente.php` | Formulário de cadastro de clientes (nome, e-mail, telefone e endereço completo). |
| `produto.php` | Formulário de cadastro de produtos (nome, quantidade, valor de compra e valor de venda). |
| `dados_cliente.php` | Script PHP que recebe, valida e grava o cliente no banco. |
| `dados_produto.php` | Script PHP que recebe, valida e grava o produto no banco. |
| `banco.php` | Script de inicialização que cria o `loja.db` e as tabelas automaticamente. |

---

## Estrutura do Banco de Dados

O banco `loja.db` é criado automaticamente na primeira execução e contém duas tabelas:

### Tabela `cliente`

| Campo | Tipo | Descrição |
| :--- | :--- | :--- |
| `id` | INTEGER | Chave primária (auto incremento) |
| `nome` | TEXT | Nome completo do cliente |
| `email` | TEXT | E-mail |
| `telefone` | TEXT | Telefone de contato |
| `rua` | TEXT | Rua do endereço |
| `numero` | TEXT | Número |
| `complemento` | TEXT | Complemento (opcional) |
| `bairro` | TEXT | Bairro |
| `cidade` | TEXT | Cidade |
| `estado` | TEXT | Estado (UF) |

### Tabela `produto`

| Campo | Tipo | Descrição |
| :--- | :--- | :--- |
| `id` | INTEGER | Chave primária (auto incremento) |
| `nome` | TEXT | Nome do produto |
| `quantidade` | INTEGER | Quantidade em estoque |
| `valor_compra` | REAL | Valor de compra (R$) |
| `valor_venda` | REAL | Valor de venda (R$) |

---

## Tecnologias Utilizadas

<div align="center">

<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
<img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite" />
<img src="https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white" alt="Git" />
<img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub" />

</div>

- **HTML5** — Estrutura semântica das páginas
- **CSS3** — Estilização com tema dark (preto, branco e vermelho)
- **PHP** — Lógica de back-end, validações e sessões
- **SQLite** — Banco de dados em arquivo único (`loja.db`)
- **PDO** — Conexão segura com o banco (prepared statements)
- **Git e GitHub** — Versionamento do código

---

## Estrutura de Arquivos

```text
alim/
│
├── banco.php             # Cria o banco loja.db e as tabelas
├── index.php             # Página inicial
├── cliente.php           # Formulário de cadastro de cliente
├── produto.php           # Formulário de cadastro de produto
├── dados_cliente.php     # Recebe e grava os dados do cliente
├── dados_produto.php     # Recebe e grava os dados do produto
├── style.css             # Estilização do sistema
├── image.png             # Logo da ALIM
└── README.md             # Documentação (você está aqui)
