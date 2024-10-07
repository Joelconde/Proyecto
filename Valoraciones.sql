CREATE DATABASE valoraciones_db;

USE valoraciones_db;

CREATE TABLE valoraciones (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(255) NOT NULL,
    comentario TEXT NOT NULL,
    puntuacion INT(1) NOT NULL CHECK (puntuacion BETWEEN 1 AND 5),
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



