CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    lugar VARCHAR(100) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    ocupacion VARCHAR(100),
    escolaridad VARCHAR(100)
);
