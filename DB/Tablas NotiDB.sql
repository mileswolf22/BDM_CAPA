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
Etiqueta varchar(20),
Seccion_principal varchar(20),
Seccion_secundaria varchar(20),
numero_referencia varchar(20),
Positivos INT DEFAULT 0,
Aprobada BOOL DEFAULT 0,
No_Aprobada BOOL DEFAULT 0,
Revision BOOL DEFAULT 0,
Devuelta BOOL DEFAULT 0,
Pendiente BOOL DEFAULT 1,
comentario_admin TINYTEXT
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


CREATE TABLE Imagen_noticia(
key_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(key_noticia),
id_noticia INT,
imagen TEXT,
direccion_imagen TEXT,
numero_referencia varchar(20),
contador INT
);

CREATE TABLE Video_noticia(
key_video INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
cod_noticia INT,
FOREIGN KEY (cod_noticia) REFERENCES Noticia(key_noticia),
id_noticia INT,
video TEXT,
direccion_video TEXT,
numero_referencia varchar(20)
);


select * from Usuario;
select * from Noticia;
select * from seccion;
select * from Imagen_noticia;
select * from Video_noticia;
select * from Seccion;
/*imagen LONGBLOB,
imagen_ubicaccion TEXT,
video TEXT,
video_ubicacion TEXT,*/
USE notidb;

 ALTER TABLE Noticia ADD comentario_admin TINYTEXT;
 ALTER TABLE Imagen_noticia ADD contador INT;
 ALTER TABLE Noticia Modify positivos INT DEFAULT 0;
 
 ALTER TABLE Noticia ADD contador_vistas INT DEFAULT 0;
 
CALL Agregar_Periodista('Admin','Adminn5!','','Armando Aguilar','decha@hotmail.com', '8126613666', '05/03/1995');
CALL Agregar_Editor('Admin5','Adminn5!','','Armando Aguilar','decha@hotmail.com', '8126613666', '05/03/1995');

CALL Cargar_Imagen('6270');

CALL Aprobar_Noticia('siquesi','5');
CALL Denegar_Noticia('La odio','5');
CALL Devolver_Noticia('Echale ganas','6');

CALL Mostrar_Noticia_D;


ALTER TABLE Noticia ADD ExisteAprobada  VARCHAR(2);
ALTER TABLE Noticia ADD ExisteRechazada VARCHAR(2);
ALTER TABLE Noticia ADD ExistePendiente VARCHAR(2);
ALTER TABLE Noticia ADD ExisteRevision VARCHAR(2);
ALTER TABLE Noticia ADD ExisteDevuelta VARCHAR(2);


/*La logica esta en que mediante un if si hay una noticia que tenga el estatus aprobada o lo que sea en 1
entonces convertira lA VARIABLE EXISTE EN 1 de esa forma recogere la variable 
*/
 
CALL Verificar_Aprobado;
DELETE FROM Noticia WHERE key_noticia = 1;
DELETE FROM Noticia WHERE key_noticia = 2;
DELETE FROM Noticia WHERE key_noticia = 3;

select Aprobada FROM Noticia;