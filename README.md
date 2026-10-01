<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&color=0:e50914,100:0a0a0a&height=200&section=header&text=ALIM&fontSize=90&fontColor=ffffff&animation=fadeIn&fontAlignY=40&desc=Sistema%20de%20Cadastro%20de%20Clientes%20e%20Produtos&descAlignY=65&descSize=18&descColor=cccccc" width="100%" alt="ALIM Banner" />

<br>

<p>
  <img src="https://img.shields.io/badge/Status-Conclu%C3%ADdo-e50914?style=for-the-badge&logo=statuspage&logoColor=white" alt="Status" />
  <img src="https://img.shields.io/badge/Vers%C3%A3o-1.0.0-0a0a0a?style=for-the-badge&logo=git&logoColor=white" alt="Versão" />
  <img src="https://img.shields.io/badge/Licen%C3%A7a-MIT-333333?style=for-the-badge&logo=opensourceinitiative&logoColor=white" alt="Licença" />
  <img src="https://img.shields.io/badge/Idioma-PT--BR-ffffff?style=for-the-badge&logo=googletranslate&logoColor=black" alt="Idioma" />
</p>

<p>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP" />
  <img src="https://img.shields.io/badge/SQLite-003B57?style=for-the-badge&logo=sqlite&logoColor=white" alt="SQLite" />
  <img src="https://img.shields.io/badge/PDO-8892BF?style=for-the-badge&logo=php&logoColor=white" alt="PDO" />
  <img src="https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white" alt="Git" />
</p>

<br>

<p>
  <a href="#-sobre-o-projeto">Sobre</a> •
  <a href="#-demonstração">Demonstração</a> •
  <a href="#-funcionalidades">Funcionalidades</a> •
  <a href="#-arquitetura">Arquitetura</a> •
  <a href="#-estrutura-do-banco">Banco de Dados</a> •
  <a href="#-tecnologias">Tecnologias</a> •
  <a href="#-instalação">Instalação</a> •
  <a href="#-estrutura-de-arquivos">Estrutura</a> •
  <a href="#-roadmap">Roadmap</a> •
  <a href="#-autor">Autor</a>
</p>

</div>

---

## Sobre o Projeto

**ALIM** é um sistema web completo de **cadastro de clientes e produtos**, desenvolvido em **PHP puro + SQLite** como projeto acadêmico da disciplina de **Desenvolvimento de Sistemas**.

O objetivo é demonstrar, de forma prática e organizada, os fundamentos do desenvolvimento back-end moderno sem depender de frameworks externos. Todo o fluxo — desde o formulário HTML até a persistência em banco — foi construído do zero, aplicando boas práticas como **PDO com prepared statements**, **validações server-side** e **sanitização de dados**.

A identidade visual segue uma estética **dark + vermelho neon**, inspirada em dashboards e terminais de sistema, dando ao projeto um ar profissional desde a interface.

### A Sigla

<table>
  <tr>
    <th align="center">Letra</th>
    <th>Significado</th>
    <th>Representa no projeto</th>
  </tr>
  <tr>
    <td align="center"><b>A</b></td>
    <td>Automação</td>
    <td>Fluxo de cadastro automatizado com validações server-side</td>
  </tr>
  <tr>
    <td align="center"><b>L</b></td>
    <td>Logística</td>
    <td>Organização e controle de clientes e produtos</td>
  </tr>
  <tr>
    <td align="center"><b>I</b></td>
    <td>Inteligente</td>
    <td>Interface responsiva e código limpo e modular</td>
  </tr>
  <tr>
    <td align="center"><b>M</b></td>
    <td>Mercadorias</td>
    <td>Cadastro completo de produtos com cálculo de lucro</td>
  </tr>
</table>

---

## Demonstração

### Fluxo do Sistema

```mermaid
graph LR
    A[index.php] --> B[cliente.php]
    A --> C[produto.php]
    B --> D[dados_cliente.php]
    C --> E[dados_produto.php]
    D --> F[(loja.db)]
    E --> F
    F --> B
    F --> C
    style A fill:#e50914,stroke:#0a0a0a,color:#fff
    style B fill:#0a0a0a,stroke:#e50914,color:#fff
    style C fill:#0a0a0a,stroke:#e50914,color:#fff
    style D fill:#0a0a0a,stroke:#e50914,color:#fff
    style E fill:#0a0a0a,stroke:#e50914,color:#fff
    style F fill:#e50914,stroke:#0a0a0a,color:#fff
