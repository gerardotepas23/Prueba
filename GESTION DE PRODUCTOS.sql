Create database gestionproductos;
Use gestionproductos;

-- Crear la tabla de productos
CREATE TABLE productos (
    idproducto INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    descripcion TEXT,
    preciounit DECIMAL(10,2)NOT NULL,
    cantidad INT NOT NULL
);