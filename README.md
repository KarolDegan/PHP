# 📚 PHP - Estudos e Projetos

Repositório dedicado aos meus estudos em **PHP moderno**, **Orientação a Objetos**, **Banco de Dados** e **Gerenciamento de Dependências**, reunindo exercícios, anotações e aplicações práticas desenvolvidas ao longo da minha jornada de aprendizado.

---

## 📋 Índice

* [Visão Geral](#-visão-geral)
* [Tecnologias Utilizadas](#-tecnologias-utilizadas)
* [Estrutura do Repositório](#-estrutura-do-repositório)
* [Competências Desenvolvidas](#-competências-desenvolvidas)
* [Como Usar](#-como-usar)

---

## 🎯 Visão Geral

Este repositório tem como objetivo documentar meu aprendizado em **PHP** e tecnologias relacionadas, com foco na prática e consolidação de conceitos fundamentais e intermediários do desenvolvimento backend.

O conteúdo inclui:

* Conceitos básicos e avançados de PHP
* Programação Orientada a Objetos (POO)
* Princípios SOLID
* Manipulação de Banco de Dados com PDO
* Consumo e processamento de APIs
* Gerenciamento de dependências com Composer
* Testes unitários
* Análise estática de código
* Exercícios baseados em cursos da Alura e Curso em Vídeo
* Projetos práticos de aplicação real

---

## 🛠️ Tecnologias Utilizadas

### Linguagens de Programação

| Tecnologia       | Aplicação                                   |
| --------------- | ------------------------------------------- |
| **PHP (7.x+)**  | Lógica backend, processamento de dados      |
| **HTML5**       | Estrutura de páginas e formulários          |
| **CSS3**        | Estilização e responsividade                |
| **JavaScript**  | Interatividade e manipulação do DOM         |

### Frameworks e Bibliotecas

| Tecnologia                  | Aplicação                                   |
| --------------------------- | ------------------------------------------- |
| **Composer**                | Gerenciamento de dependências               |
| **Guzzle HTTP**             | Cliente HTTP para requisições                |
| **Symfony DOM Crawler**      | Parsing e manipulação de HTML/XML           |
| **PHPUnit**                 | Testes unitários                            |
| **Phan**                    | Análise estática de código                  |
| **PDO (PHP Data Objects)**  | Acesso a bancos de dados                    |

### Banco de Dados

| Tecnologia      | Aplicação                             |
| --------------- | ------------------------------------- |
| **SQLite**      | Banco de dados relacional leve         |
| **SQL**         | Linguagem de consulta e manipulação    |

### Ambiente de Desenvolvimento

| Ferramenta      | Uso                                      |
| --------------- | ---------------------------------------- |
| **PHP CLI**     | Execução de scripts PHP em linha de comando |
| **Composer**    | Gerenciamento de dependências            |
| **Git**         | Controle de versão                       |
| **GitHub**      | Hospedagem e versionamento remoto        |

---

## 📁 Estrutura do Repositório

```
PHP/
├── bases do php/                          # Conceitos fundamentais e avançados
│   ├── Basico-Avancado/
│   │   ├── primeira-aplicacao/            # Primeira aplicação prática
│   │   ├── conceitos-dados-loop-php/      # Conceitos, tipos de dados e loops
│   │   └── avancando-php/                 # Tópicos avançados
│   └── orientacao-objetos/
│       ├── primeiro-curso/                # Fundamentos de POO
│       ├── segundo-curso/                 # Conceitos avançados de POO
│       └── SOLID/                         # Princípios SOLID
├── buscador-cursos-alura/                 # Projeto: Buscador de cursos Alura
│   ├── src/                               # Código fonte
│   ├── .phan/                             # Configuração do analisador Phan
│   ├── composer.json                      # Dependências do projeto
│   ├── buscar-cursos.php                  # Script principal
│   └── anotacoes.md                       # Anotações do projeto
├── curso_em_video/                        # Exercícios do curso em vídeo
│   ├── ex000/ - ex006/                    # Exercícios 0-6
│   ├── desafio1/ - desafio12/             # Desafios 1-12
│   └── [...mais exercícios...]
├── PHPePDO/                               # Projeto: Gerenciador de alunos com PDO
│   ├── src/                               # Classes e módulos
│   ├── conexao.php                        # Configuração de banco de dados
│   ├── lista-alunos.php                   # Listar alunos
│   ├── inserir-aluno.php                  # Inserir novo aluno
│   ├── remover-aluno.php                  # Remover aluno
│   ├── criar-turma.php                    # Gerenciar turmas
│   └── banco.sqlite                       # Banco de dados SQLite
└── README.md                              # Este arquivo
```

---

## 🎯 Competências Desenvolvidas

* **Fundamentos PHP:** variáveis, tipos de dados, operadores, estruturas de controle
* **Arrays e métodos nativos:** manipulação e processamento de dados
* **Funções e escopos:** definição e utilização de funções
* **Programação Orientada a Objetos:** classes, herança, encapsulamento, polimorfismo
* **Princípios SOLID:** design patterns e boas práticas de arquitectura
* **Banco de Dados:** SQL, PDO, migrations, relacionamentos
* **Composer:** gerenciamento de dependências e autoloading
* **APIs HTTP:** consumo de APIs externas com Guzzle
* **Web Scraping:** parsing de HTML com Symfony DOM Crawler
* **Testes Unitários:** PHPUnit e metodologias de teste
* **Análise Estática:** Phan para detecção de bugs
* **Tratamento de Erros:** exceções e debugging
* **Segurança:** validação de dados, proteção contra injeção SQL
* **Organização e modularização:** arquitetura limpa e manutenível

---

## 💡 Projetos Principais

### 1. **Buscador de Cursos Alura**
Aplicação que busca cursos disponíveis no site da Alura, processando dados HTML e exibindo informações de forma estruturada.

**Tecnologias:** Guzzle, Symfony DOM Crawler, Composer, Phan, PHPUnit

### 2. **Gerenciador de Alunos com PDO**
Projeto completo de CRUD (Create, Read, Update, Delete) de alunos e turmas utilizando banco de dados SQLite e PDO.

**Funcionalidades:**
- Listar alunos
- Inserir novo aluno
- Remover aluno
- Criar turma
- Buscar alunos por turma

**Tecnologias:** PHP, PDO, SQLite, SQL

---

## 🚀 Como Usar

### Pré-requisitos

- PHP 7.4 ou superior
- Composer instalado
- Git instalado

### Instalação

1. Clone o repositório:
```bash
git clone https://github.com/KarolDegan/PHP.git
cd PHP
```

2. Para projetos que usam Composer, instale as dependências:
```bash
cd nome-do-projeto
composer install
```

3. Execute um projeto específico:
```bash
# Exemplo: Executar o buscador de cursos
cd buscador-cursos-alura
php buscar-cursos.php

# Exemplo: Listar alunos
cd PHPePDO
php lista-alunos.php
```

---

## 📈 Observações

Este repositório reúne principalmente exercícios e estudos práticos, servindo como base para evolução contínua em desenvolvimento backend com PHP. O código segue boas práticas e padrões de desenvolvimento profissional.

---

*Última atualização: 2025*
