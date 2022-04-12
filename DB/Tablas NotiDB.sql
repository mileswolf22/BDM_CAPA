CREATE DATABASE NotiDB;

USE NotiDB;
ALTER TABLE Usuario AUTO_INCREMENT = 0;
CREATE TABLE Usuario(
key_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
Nombre_usuario varchar(50) UNIQUE,
Contraseña varchar(10),
Foto_perfil longblob,
Nombre_completo varchar(100),
Correo varchar(20),
Numero_contacto varchar(10),
Fecha_nacimiento varchar(10),
Editor bool DEFAULT 0,
Reportero bool DEFAULT 0,
Comun bool DEFAULT 0,
Anonimo bool DEFAULT 1
);

CREATE TABLE Crear_Seccion(  /*Tabla para la creacion y almacen de las secciones*/
key_seccion INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
seccion varchar(20)
);

CREATE TABLE Noticia(
key_noticia INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_usuario INT,
cod_seccion INT,
FOREIGN KEY (cod_usuario) REFERENCES Usuario(key_usuario),
FOREIGN KEY (cod_seccion) REFERENCES Crear_Seccion(key_seccion),
Autor varchar(200),
Fecha_publicacion varchar(10),
Fecha_suceso varchar(10),
Lugar_suceso varchar(100),
Titulo varchar(100),
Descripcion TEXT,
Texto MEDIUMTEXT,
Etiqueta varchar(20),
Seccion_principal varchar(20),
Seccion_secundaria varchar(20),
Positivos INT,
Aprobada BOOL DEFAULT 0,
No_Aprovada BOOL DEFAULT 1,
Devuelta BOOL DEFAULT 0
);

CREATE TABLE Imagen(
key_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(key_noticia),
noticia_id INT,  /*Guardara el ID de la noticia a la cual esta ligado la imagen subida*/
imagen BLOB
);

CREATE TABLE Video(
key_video INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(key_noticia),
noticia_id INT,   /*Guardara el ID de la noticia a la cual esta ligado el video subido*/
video TINYTEXT
);


CREATE TABLE Comentario(
key_comentario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_usuario INT,
cod_noticia INT,
FOREIGN KEY(cod_usuario) REFERENCES Usuario(key_usuario),
FOREIGN KEY(cod_noticia) REFERENCES Noticia(key_noticia),
noticia_id INT,
Usuario_com varchar(50),
Foto_com BLOB,
Fecha_hora DATETIME,
Texto_comentario TEXT
);

USE notidb;
select * from Usuario;


ALTER TABLE Usuario MODIFY correo varchar(50);

ALTER TABLE Usuario ADD existe bool DEFAULT 0;

CALL Agregar_Periodista('Admin','Adminn5!','','Armando Aguilar','decha@hotmail.com', '8126613666', '05/03/1995');


