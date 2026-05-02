-- Script de criação do banco de dados TodoMeuPet (Didático)

CREATE DATABASE IF NOT EXISTS todomeupet_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE todomeupet_db;

-- Tabela de Usuários (Tutores)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de Pets
CREATE TABLE IF NOT EXISTS pets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    especie VARCHAR(50),
    raca VARCHAR(50),
    nascimento DATE,
    peso DECIMAL(5,2),
    qr_code_hash VARCHAR(64) UNIQUE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);

-- Tabela de Histórico de Saúde (Vacinas, Consultas)
CREATE TABLE IF NOT EXISTS saude_historico (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pet_id INT NOT NULL,
    tipo VARCHAR(50) NOT NULL, -- ex: 'Vacina', 'Consulta', 'Exame', 'Vermífugo'
    descricao VARCHAR(255) NOT NULL,
    data_evento DATE NOT NULL,
    proxima_data DATE, -- usado para alertas/lembretes
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (pet_id) REFERENCES pets(id) ON DELETE CASCADE
);

-- Tabela de Notificações
CREATE TABLE IF NOT EXISTS notificacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    mensagem TEXT NOT NULL,
    lida BOOLEAN DEFAULT FALSE,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE
);
