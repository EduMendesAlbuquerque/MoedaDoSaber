create database moeda_do_saber

use moeda_do_saber

CREATE TABLE dbo.pessoa
(
    id            int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    nome          nvarchar(100) NOT NULL,
    data_cadastro datetime      NOT NULL,
    email         nvarchar(100) NULL,
    senha         nvarchar(100) NULL,
    fone          nvarchar(20)  NULL
)

CREATE TABLE dbo.professor
(
    id              int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    id_pessoa       int           NOT NULL,
    nome            nvarchar(100) NULL,
    cpf             nvarchar(20)  NULL,
    data_nascimento date          NULL,
    CONSTRAINT FK_professor_pessoa FOREIGN KEY (id_pessoa) REFERENCES dbo.pessoa (id)
)

CREATE TABLE dbo.plano_aula
(
    id                   int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    id_professor         int           NOT NULL,
    titulo               nvarchar(100) NULL,
    objetivo             nvarchar(250) NULL,
    metodologia          nvarchar(250) NULL,
	conteudo			 nvarchar(250) NULL,
    recursos_necessarios nvarchar(250) NULL,
    criterios_avaliacao  nvarchar(250) NULL,
    inicio_cronograma    date          NULL,
    fim_cronograma       date          NULL,
    CONSTRAINT FK_plano_aula_professor FOREIGN KEY (id_professor) REFERENCES dbo.professor (id),
)

CREATE TABLE personal_access_tokens
(
    id             INT IDENTITY (1,1) PRIMARY KEY,
    tokenable_id   INT,
    tokenable_type NVARCHAR(255),
    name           NVARCHAR(255),
    token          NVARCHAR(64) UNIQUE,
    abilities      NVARCHAR(MAX),
    last_used_at   DATETIME,
    expires_at     DATETIME,
    created_at     DATETIME DEFAULT GETDATE(),
    updated_at     DATETIME DEFAULT GETDATE()
);

CREATE TABLE dbo.atividade
(
    id        int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    titulo    nvarchar(100) NOT NULL,
    descricao nvarchar(255) NOT NULL
)

CREATE TABLE dbo.atividade_resultado
(
    id           int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    id_atividade int           NOT NULL,
    nota         decimal(4, 2) NOT NULL,
    observacao   nvarchar(255) NOT NULL,
    CONSTRAINT FK_atividade_resultado FOREIGN KEY (id_atividade) REFERENCES dbo.atividade (id),
)


insert into atividade (titulo, descricao)
    values ('Atividade 1', 'Descrição da Atividade 1'),
           ('Atividade 2', 'Descrição da Atividade 2'),
           ('Atividade 3', 'Descrição da Atividade 3')

insert into atividade_resultado (id_atividade, nota, observacao)
    values (1, 9.5, 'Excelente desempenho na Atividade 1 do aluno morango do amor'),
           (2, 8.0, 'Bom desempenho na Atividade 2 do aluno bobbie goods'),
           (3, 7.5, 'Desempenho satisfatório na Atividade do aluno labubu')

CREATE TABLE dbo.aluno
(
    id           int           NOT NULL IDENTITY (1,1) PRIMARY KEY,
    aluno        nvarchar(255) NOT NULL,
    matricula    int           NOT NULL,
    curso        nvarchar(255) NOT NULL,
    statusCurso  nvarchar(255) NOT NULL
)

insert into aluno (aluno, matricula, curso, statusCurso)
    values ('Jadson Algeri', 1000, 'Análise e Desenvolvimento de Sistemas', 'Ativo'),
		   ('Rodrigo Cordeiro', 1001, 'Ciências Sociais', 'Trancado'),
		   ('Debora Correa', 1002, 'Educação Física', 'Concluido')
