CREATE DATABASE IF NOT EXISTS loja_php
  CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE loja_php;

CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    data DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10,2) NOT NULL,
    categoria_id INT NOT NULL,
    data DATETIME DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_produtos_categorias
      FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

-- Usuário inicial: admin@teste.com
-- Senha: 123456
-- O hash abaixo corresponde à senha 123456.
INSERT IGNORE INTO usuarios (nome, senha, email)
VALUES ('Administrador', '$2y$12$UoKaX9b.vcqS.5koYYKkz.584uxpYQb9uwyApJ5ZvZWr3PS1HMOMm', 'admin@teste.com');

INSERT INTO categorias (nome)
SELECT 'Eletrônicos' WHERE NOT EXISTS
(SELECT 1 FROM categorias WHERE nome = 'Eletrônicos');

INSERT INTO categorias (nome)
SELECT 'Roupas' WHERE NOT EXISTS
(SELECT 1 FROM categorias WHERE nome = 'Roupas');

INSERT INTO categorias (nome)
SELECT 'Acessórios' WHERE NOT EXISTS
(SELECT 1 FROM categorias WHERE nome = 'Acessórios');
