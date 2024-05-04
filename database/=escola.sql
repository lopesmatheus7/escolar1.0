-- Criar a tabela "alunos"
CREATE TABLE alunos (
    id_aluno SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    idade INTEGER,
    email VARCHAR(100),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserir dados na tabela "alunos"
INSERT INTO alunos (nome, idade, email) VALUES
    ('Evandro Thiago', 15, 'sergi@sergi.com'),
    ('Fabinho', 15, 'sergi@sergi.com'),
    ('Rosana costa', 15, 'sergi@sergi.com'),
    ('Luano Piovane', 17, 'lulu@piovane');

-- Criar a tabela "turmas"
CREATE TABLE turmas (
    id_turma SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    ano INTEGER,
    descricao VARCHAR(255),
    data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Inserir dados na tabela "turmas"
INSERT INTO turmas (nome, ano) VALUES
    ('Ciencias', 2024),
    ('Matemática', 2024),
    ('Educação Física', 2024);

-- Criar a tabela "enturmacao"
CREATE TABLE enturmacao (
    id_enturmacao SERIAL PRIMARY KEY,
    id_aluno INTEGER,
    id_turma INTEGER,
    data_enturmacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id_aluno),
    FOREIGN KEY (id_turma) REFERENCES turmas(id_turma)
);

-- Inserir dados na tabela "enturmacao"
INSERT INTO enturmacao (id_aluno, id_turma) VALUES
    (1, 2),
    (1, 3),
    (2, 3);
