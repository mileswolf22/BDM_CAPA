CREATE DATABASE NotiDB;

USE NotiDB;

CREATE TABLE Usuario(
key_usuario INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
Nombre_usuario varchar(50) UNIQUE,
Contraseña varchar(10),
Foto_perfil longblob,
Nombre_completo varchar(100),
Correo varchar(50),
Numero_contacto varchar(10),
Fecha_nacimiento varchar(10),
Editor bool DEFAULT 0,
Reportero bool DEFAULT 0,
Comun bool DEFAULT 0,
Anonimo bool DEFAULT 1,
existe bool DEFAULT 0
);

CREATE TABLE Seccion(  /*Tabla para la creacion y almacen de las secciones*/
key_seccion INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nombre_seccion varchar(30),
color_seccion varchar(30),
icono_seccion varchar(120)
);

CREATE TABLE Noticia(
key_noticia INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_usuario INT,
cod_seccion INT,
FOREIGN KEY (cod_usuario) REFERENCES Usuario(key_usuario),
FOREIGN KEY (cod_seccion) REFERENCES Seccion(key_seccion),
Autor varchar(200),
Fecha_publicacion DATETIME,
Fecha_suceso varchar(30),
Lugar_suceso varchar(100),
Titulo varchar(100),
Descripcion TEXT,
Texto MEDIUMTEXT,
imagen TEXT,
direccion_imagen TEXT,
video TEXT,
direccion_video TEXT,
Etiqueta varchar(20),
Seccion_principal varchar(20),
Seccion_secundaria varchar(20),
Seccion_secundaria2 varchar(20),
Positivos INT,
Aprobada BOOL DEFAULT 0,
No_Aprovada BOOL DEFAULT 1,
Devuelta BOOL DEFAULT 0
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


/*CREATE TABLE Imagen_noticia(
key_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(id_noticia),
id_noticia INT,
imagen BLOB
);

CREATE TABLE Video_noticia(
key_video INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(id_noticia),
id_noticia INT,
video TEXT
);*/


select * from Noticia;
USE notidb;
select * from Seccion;
/*imagen LONGBLOB,
imagen_ubicaccion TEXT,
video TEXT,
video_ubicacion TEXT,*/


CALL Agregar_Periodista('Admin','Adminn5!','','Armando Aguilar','decha@hotmail.com', '8126613666', '05/03/1995');


