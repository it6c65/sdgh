CREATE DATABASE IF NOT EXISTS sdgh;
USE sdgh;
CREATE TABLE usuarios(
    id tinyint(1) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login varchar(15) NOT NULL,
    password varchar(32) NOT NULL,
    nivel enum("adm","usr") NOT NULL
);
CREATE TABLE herramientas(
    id int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre varchar(30) NOT NULL,
    num integer(4) NOT NULL,
    status tinyint(1) NOT NULL,
    serial varchar(8),
    UNIQUE(serial)
);
CREATE TABLE materiales(
    id int(6) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nombre varchar(30) NOT NULL,
    num integer(4) NOT NULL,
    status tinyint(1) NOT NULL
);
CREATE TABLE registro(
    id int(2) ZEROFILL PRIMARY KEY NOT NULL AUTO_INCREMENT,
    fecha_at date NOT NULL,
    hora time NOT NULL,
    usuarios_id tinyint(1) NOT NULL,
    FOREIGN KEY(usuarios_id) REFERENCES usuarios(id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

INSERT INTO usuarios(login,password,nivel) VALUES
    ( "Admin",MD5("pnfmadmin"),"adm" ),
    ( "Invitado",MD5("pnfmecanica"),"usr" );

