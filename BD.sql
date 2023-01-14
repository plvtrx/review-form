CREATE DATABASE FormESTUDO;

USE FormESTUDO;

CREATE TABLE dados (
    id int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome varchar(50) NOT NULL,
    email varchar(40) NOT NULL,
    mensagem varchar(100) NOT NULL
);

-- para listar
SELECT * from dados;

-- para excluir 
DROP TABLE dados;