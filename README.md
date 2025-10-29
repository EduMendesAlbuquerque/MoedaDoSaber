# Moeda do $aber

## Acesse nosso projeto no Figma [AQUI](https://www.figma.com/design/jNSQsr5dvKEtLoyroQcsGW/Moeda-do-Saber?node-id=0-1&t=T8CuNvRCV9i2Nl0Y-1)

## Contribuições da Equipe

- **GABRIEL MATSUZAKI** – Banco de Dados em SQL Server;  
- **KAIO HENRIQUE POSTAL DE ALMEIDA** – API em PHP com Laravel e configuração do Docker;  
- **RHAYSSAM HAMZE VITTI** – Telas, Design, UX UI, Figma, Readme;
- **EDUARDO MENDES ALBUQUERQUE** e **DAYANE CRISTINE MIRANDA DE MEIRELES** – Front-End com HTML5 e CSS3;
- **DAYANE CRISTINE MIRANDA DE MEIRELES** - Trabalho escrito;
- **RODRIGO HENRIQUE CORDEIRO** – Team Lead, consumir os Endpoints no Front-End com JavaScript e revisão técnica.

## Tecnologias
- Banco de Dados: **SQL Server**
- Back-End: **PHP com Laravel**
- Front-End: **HTML5, CSS3 e JavaScript**
- Docker: **container para Servidor Web, PHP e Banco de Dados.**

## Vídeo mostrando funcionamento do projeto

https://github.com/user-attachments/assets/b5255a15-2b68-47ec-914c-00be04a345d2

## Como executar o projeto
1. Subir os containeres no Docker com o comando: "**docker compose up -d**"
2. Iniciar a API em PHP com Laravel usando o comando: "**docker exec -it faculdade_php bash**"
   - Instalar dependencias: `composer install`  
   - Em seguida, copiar o arquivo `.env.example` para o `.env` e alterar as configurações de banco para conectar ao seu SQL.
   - Gerar as chaves do artisan:  `php artisan key:generate`  
3. No SQL Server executar o script **backend\database\script.sql**
4. No VS Code, instalar o **LiverServer** e ativar seu funcionamento para acessar a tela inicial com o login.

## Telas

### 1 - Tela de Login
![Tela de Login](frontend/Figma/1-Login.png)

### 2 - Tela de Criar Conta
![Tela de Criar Conta](frontend/Figma/2-CriarConta.png)

### 3 - Tela do Professor - Tela Inicial
![Tela do Professor - Tela Inicial](frontend/Figma/3-Professor-TelaInicial.png)

### 4 - Tela do Professor - Criação de Plano de Aula
![Tela do Professor - Criação de Plano de Aula](frontend/Figma/4-Professor-CriacaoDePlanoDeAula.png)

### 5 - Tela do Professor - Gerenciamento de Aulas
![Tela do Professor - Gerenciamento de Aulas](frontend/Figma/5-Professor-GerenciamentoDeAulas.png)

### 6 - Tela de Edição de Plano de Aula
![Tela de Edição de Plano de Aula](frontend/Figma/6-EditarPlanoDeAula.png)

### 7 - Tela do Coordenador - Tela Inicial
![Tela do Coordenador - Tela Inicial](frontend/Figma/7-Coordenador-TelaInicial.png)

### 8 - Tela do Coordenador - Gerenciar Professores
![Tela do Coordenador - Gerenciar Professores](frontend/Figma/8-Coordenador-GerenciarProfessores.png)

### 9 - Tela do Coordenador - Gerenciar Professores
![Tela do Coordenador - Gerenciar Professores](frontend/Figma/9-Coordenador-GerenciarProfessores.png)

### 10 - Tela do Coordenador - Adicionar Professor
![Tela do Coordenador - Adicionar Professor](frontend/Figma/10-Coordenador-AdicionarProfessor.png)

### 11 - Tela do Coordenador - Editar Professor
![Tela do Coordenador - Editar Professor](frontend/Figma/11-Coordenador-EditarProfessor.png)

### 12 - Tela do Coordenador - Gerenciar Turmas
![Tela do Coordenador - Gerenciar Turmas](frontend/Figma/12-Coordenador-GerenciarTurmas.png)

### 13 - Tela do Coordenador - Gerenciar Turmas
![Tela do Coordenador - Gerenciar Turmas](frontend/Figma/13-Coordenador-GerenciarTurmas.png)

### 14 - Tela do Coordenador - Adicionar Turma
![Tela do Coordenador - Adicionar Turma](frontend/Figma/14-Coordenador-AdicionarTurma.png)

### 15 - Tela do Coordenador - Editar Turma
![Tela do Coordenador - Editar Turma](frontend/Figma/15-Coordenador-EditarTurma.png)

### 16 - Tela do Coordenador - Gerenciar Disciplinas
![Tela do Coordenador - Gerenciar Disciplinas](frontend/Figma/16-Coordenador-GerenciarDisciplinas.png)

### 17 - Tela do Coordenador - Gerenciar Disciplinas
![Tela do Coordenador - Gerenciar Disciplinas](frontend/Figma/17-Coordenador-GerenciarDisciplinas.png)

### 18 - Tela do Coordenador - Adicionar Disciplina
![Tela do Coordenador - Adicionar Disciplina](frontend/Figma/18-Coordenador-AdicionarDisciplina.png)

### 19 - Tela do Coordenador - Editar Disciplina
![Tela do Coordenador - Editar Disciplina](frontend/Figma/19-Coordenador-EditarDisciplina.png)

### 20 - Tela do Coordenador - Gerenciar Alunos
![Tela do Coordenador - Gerenciar Alunos](frontend/Figma/20-Coordenador-GerenciarAlunos.png)

### 21 - Tela do Coordenador - Gerenciar Alunos
![Tela do Coordenador - Gerenciar Alunos](frontend/Figma/21-Coordenador-GerenciarAlunos.png)

### 22 - Tela do Coordenador - Adicionar Aluno
![Tela do Coordenador - Adicionar Aluno](frontend/Figma/22-Coordenador-AdicionarAluno.png)

### 23 - Tela do Coordenador - Editar Aluno
![Tela do Coordenador - Editar Aluno](frontend/Figma/23-Coordenador-EditarAluno.png)

### 24 - Tela do Aluno - Tela Inicial
![Tela do Aluno - Tela Inicial](frontend/Figma/24-Aluno-TelaInicial.png)

### 25 - Tela do Aluno - Extrato
![Tela do Aluno - Extrato](frontend/Figma/25-Aluno-Extrato.png)

### 26 - Tela do Aluno - Consultar Atividades
![Tela do Aluno - Consultar Atividades](frontend/Figma/26-Aluno-ConsultarAtividades.png)
