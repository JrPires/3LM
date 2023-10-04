CREATE TABLE cargos (
                        id INT AUTO_INCREMENT PRIMARY KEY,
                        descricao VARCHAR(255) NOT NULL
);

CREATE TABLE funcionarios (
                              id INT AUTO_INCREMENT PRIMARY KEY,
                              nome VARCHAR(50) NOT NULL,
                              sobrenome VARCHAR(50) NOT NULL,
                              id_cargo INT,
                              data_nascimento DATE,
                              salario DECIMAL(10, 2),
                              FOREIGN KEY (id_cargo) REFERENCES cargos(id)
);
