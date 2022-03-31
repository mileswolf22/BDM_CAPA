CREATE DATABASE NotiDB;
USE NotiDB;

CREATE TABLE Usuario(
key_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
Nombre_usuario varchar(50) UNIQUE,
Contraseña varchar(10),
Foto_perfil blob,
Nombre_completo varchar(100),
Correo varchar(20),
Numero_contacto INT,
Fecha_nacimiento varchar(10),
Editor bool DEFAULT 0,
Reportero bool DEFAULT 0,
Comun bool DEFAULT 0,
Anonimo bool DEFAULT 1
);

CREATE TABLE Noticia(
key_noticia INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_usuario INT,
FOREIGN KEY (cod_usuario) REFERENCES Usuario(key_usuario),
Autor varchar(200),
Fecha_publicacion varchar(10),
Fecha_suceso varchar(10),
Lugar_suceso varchar(100),
Titulo varchar(100),
Descripcion TEXT,
Texto MEDIUMTEXT,
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

CREATE TABLE Crear_Seccion(  /*Tabla para la creacion y almacen de las secciones*/
key_seccion INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
seccion varchar(20)
);

CREATE TABLE Seccion_Noticia( /*Tabla para apoyar el almacenamiento de registro en una noticia*/
key_secc INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_secnot INT,
cod_noticia INT,
FOREIGN KEY(cod_secnot) REFERENCES Crear_Seccion(key_seccion),
FOREIGN KEY (cod_noticia) REFERENCES Noticia(key_noticia),
noticia_id INT,
nombre_seccion varchar(20)
); 

CREATE TABLE Comentario(
key_comentario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_usuario INT,
cod_noticia INT,
FOREIGN KEY(cod_usuario) REFERENCES Usuario(key_usuario),
FOREIGN KEY(cod_noticia) REFERENCES Noticia(key_noticia),
Usuario_com varchar(50),
Foto_com BLOB,
Fecha_hora DATETIME,
Texto_comentario TEXT
);