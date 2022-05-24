USE NotiDB;

DELIMITER $$
CREATE PROCEDURE AgregarUsuario(
IN pUsuario varchar(30),
IN pContra varchar(30),
IN pFoto longblob,
IN pNombre varchar(100),
IN pCorreo varchar(50),
IN pNumero_contacto VARCHAR(10),
IN pFecha_nacimiento varchar(10)
)
BEGIN

	INSERT INTO Usuario
	(
    Nombre_usuario,
	Contraseña,
	Foto_perfil,
	Nombre_completo,
	Correo,
	Numero_contacto,
	Fecha_nacimiento 
    )
	VALUES
	(pUsuario,
	pContra,
    pFoto,
    pNombre,
    pCorreo,
    pNumero_contacto,
    pFecha_nacimiento
    );
    
    UPDATE Usuario SET Reportero 	= 0 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Editor 		= 0 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Comun 		= 1 WHERE Nombre_usuario = pUsuario;
    UPDATE Usuario SET existe 		= 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Anonimo 		= 0 WHERE Nombre_usuario = pUsuario;
END$$


DELIMITER $$
CREATE PROCEDURE Agregar_Periodista(/*Procedure para agregar periodistas siempre y cuando el usuario sea editor*/
IN pUsuario varchar(30),
IN pContra varchar(30),
IN pFoto longblob,
IN pNombre varchar(100),
IN pCorreo varchar(50),
IN pNumero_contacto varchar(20),
IN pFecha_nacimiento varchar(10)
) 
BEGIN

INSERT INTO Usuario
	(
    Nombre_usuario,
	Contraseña,
	Foto_perfil,
	Nombre_completo,
	Correo,
	Numero_contacto,
	Fecha_nacimiento 
    )
	VALUES
	(pUsuario,
	pContra,
    pFoto,
    pNombre,
    pCorreo,
    pNUmero_contacto,
    pFecha_nacimiento
    );
    
    UPDATE Usuario SET Reportero 	= 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Editor 		= 0 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Comun 		= 0 WHERE Nombre_usuario = pUsuario;
    UPDATE Usuario SET existe 		= 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Anonimo 		= 0 WHERE Nombre_usuario = pUsuario;/*indica que el usuario agregado es de tipo Reportero*/
    
END$$

USE NotiDB;
DELIMITER $$
CREATE PROCEDURE Agregar_Editor(
IN pUsuario varchar(30),
IN pContra varchar(30),
IN pFoto longblob,
IN pNombre varchar(100),
IN pCorreo varchar(50),
IN pNumero_contacto varchar(20),
IN pFecha_nacimiento varchar(10)
) /*Prodedure para agregar editores*/
BEGIN

INSERT INTO Usuario
	(
    Nombre_usuario,
	Contraseña,
	Foto_perfil,
	Nombre_completo,
	Correo,
	Numero_contacto,
	Fecha_nacimiento 
    )
	VALUES
	(pUsuario,
	pContra,
    pFoto,
    pNombre,
    pCorreo,
    pNUmero_contacto,
    pFecha_nacimiento
    );
    
    UPDATE Usuario SET Reportero 	= 0 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Editor 		= 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Comun 		= 0 WHERE Nombre_usuario = pUsuario;
    UPDATE Usuario SET existe 		= 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Anonimo 		= 0 WHERE Nombre_usuario = pUsuario; /*indica que el usuario agregado es de tipo Reportero*/
    
END$$

DELIMITER $$
CREATE PROCEDURE Logus2( /*Procedure para ingreso de usuario comun*/
IN pUsuario varchar (30),
IN pContra varchar (30)
)
BEGIN
SELECT

	Comun,
	key_usuario
    Nombre_usuario,
    Foto_perfil,
    Nombre_completo,
    Correo,
    Numero_contacto,
    Fecha_nacimiento
 FROM Usuario 
	WHERE Nombre_usuario = pUsuario AND Contraseña = pContra AND Comun = 1;

END $$


DELIMITER $$
CREATE PROCEDURE LogReportero( /*Procedure para ingreso de usuario comun*/
IN pUsuario varchar (30),
IN pContra varchar (30)
)
BEGIN

SELECT
	Reportero,
	key_usuario,
    Nombre_usuario,
    Foto_perfil,
    Nombre_completo,
    Correo,
    Numero_contacto,
    Fecha_nacimiento
    
    FROM Usuario 
	WHERE Nombre_usuario = pUsuario AND Contraseña = pContra AND Reportero = 1;
   
END $$


DELIMITER $$
CREATE PROCEDURE LogEditor( /*ProceLogReporteroLogReporterodure para ingreso de usuario comun*/
IN pUsuario varchar (30),
IN pContra varchar (30)
)
BEGIN

SELECT
    
	Editor,
	key_usuario
    Nombre_usuario,
    Foto_perfil,
    Nombre_completo,
    Correo,
    Numero_contacto,
    Fecha_nacimiento
    
    FROM Usuario 
	WHERE Nombre_usuario = pUsuario AND Contraseña = pContra AND Editor = 1;


END $$


DELIMITER $$
CREATE PROCEDURE Modificar_usuario(
IN pUsuario varchar(50),
IN pNombre varchar(100),
IN pNumero_contacto varchar(10),
IN pFecha varchar(10),
IN pCorreo varchar(20),
IN pContra varchar(30)

)
BEGIN

UPDATE usuario
SET

Nombre_completo = pNombre,
Numero_contacto = pNumero_contacto,
Fecha_nacimiento = pFecha,
Correo = pCorreo,
Contraseña = pContra

WHERE nombre_usuario = pUsuario;

END$$

DELIMITER $$
CREATE PROCEDURE Modificar_foto(
IN pUsuario varchar(50),
IN pFoto longblob
)
BEGIN
UPDATE usuario
SET

Foto_perfil = pFoto

WHERE nombre_usuario = pUsuario;
END $$

DELIMITER $$
CREATE PROCEDURE Mostrar_Usuario(
IN pNombre varchar (50)
)
BEGIN
SELECT Nombre_usuario, Nombre_completo, Foto_perfil, Correo, Numero_contacto, Fecha_nacimiento, Contraseña
FROM Usuario
WHERE Nombre_usuario = pNombre;
END $$

DELIMITER $$
CREATE PROCEDURE Eliminar_Usuario(
IN pUsuario varchar(50)
)
BEGIN 

DELETE FROM Usuario WHERE Nombre_usuario = pUsuario;

END $$

DELIMITER $$
CREATE PROCEDURE Agregar_Noticia(
IN pAutor varchar (50),
IN pLugar_suceso varchar(100),
IN pFecha_suceso varchar(30),
IN pTitulo varchar(100),
IN pDescripcion TEXT,
IN pTexto MEDIUMTEXT,
IN pEtiqueta VARCHAR(20),
IN pSeccionP VARCHAR(20),
IN pSeccion1 VARCHAR(20),
IN pNumero VARCHAR(20)
)
BEGIN

INSERT INTO Noticia(
Autor,
Lugar_suceso,
Fecha_suceso,
Titulo,
Descripcion,
Texto,
Etiqueta,
Seccion_principal,
Seccion_secundaria,
numero_referencia
)
VALUES(
pAutor,
pLugar_suceso,
pFecha_suceso,
pTitulo,
pDescripcion,
pTexto,
pEtiqueta,
pSeccionP,
pSeccion1,
pNumero
);
UPDATE Noticia SET Fecha_publicacion = NOW();
END $$

DELIMITER $$
CREATE PROCEDURE Agregar_Imagen(
IN pImagen LONGBLOB,
IN pDireccionImagen TEXT,
IN pNumero VARCHAR(20),
IN pContador INT
)
BEGIN
INSERT INTO Imagen_noticia(
imagen,
direccion_imagen,
numero_referencia,
contador
)VALUES(
pImagen,
pDireccionImagen,
pNumero,
pContador
);
END$$

DELIMITER $$
CREATE PROCEDURE Agregar_Video(
IN pVideo TEXT,
IN pDireccionVideo TEXT,
IN pNumero VARCHAR(20)
)
BEGIN
INSERT INTO Video_noticia(
video,
direccion_video,
numero_referencia
)VALUES(
pVideo,
pDireccionVideo,
pNumero
);
END $$

use notidb;
DROP PROCEDURE Mostrar_Noticia_Completa;
DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_Completa(
IN pTitulo VARCHAR(100)
)
BEGIN
SELECT 
Autor, Fecha_publicacion, Fecha_suceso, Lugar_suceso, Titulo, Descripcion, Texto, Etiqueta, Seccion_principal, Seccion_secundaria, numero_referencia,Positivos, key_noticia
FROM Noticia 
WHERE Titulo = pTitulo;

END $$

/* Los siguientes porcedure llevan una inicial en su nombre
A = Aprobada
R = Revision
D = Devuelta
P = Pendiente
NA = No Aprobada
*/


DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_Portada_A(
)
BEGIN
Select
numero_referencia, 
Seccion_principal,
Titulo,
Descripcion,
Seccion_principal
FROM Noticia WHERE Aprobada = 1;

END $$


DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_R(
)
BEGIN
Select
numero_referencia, 
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Revision = 1;

END $$

DROP PROCEDURE Mostrar_Noticia_D;
DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_D(
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Devuelta = 1;

END $$

DROP PROCEDURE Mostrar_Noticia_P;
DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_P(
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Pendiente = 1;
END $$

DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_NA(
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE No_Aprobada = 1;

END $$

DELIMITER $$
CREATE PROCEDURE Modificar_Noticia(
)
BEGIN

END $$

DELIMITER $$
CREATE PROCEDURE Eliminar_Noticia(
)
BEGIN

END $$

DROP PROCEDURE Aprobar_Noticia;
DELIMITER $$
CREATE PROCEDURE Aprobar_Noticia(
IN pComentario TINYTEXT,
IN pID INT
)
BEGIN
UPDATE Noticia SET comentario_admin = pComentario WHERE key_noticia = pID;

UPDATE Noticia SET Aprobada 	= 1 WHERE key_noticia = pID;
UPDATE Noticia SET No_Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Pendiente 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Revision 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Devuelta 	= 0 WHERE key_noticia = pID;
END $$

DROP PROCEDURE Denegar_Noticia;
DELIMITER $$
CREATE PROCEDURE Denegar_Noticia(
IN pComentario TINYTEXT,
IN pID INT
)
BEGIN
UPDATE Noticia SET comentario_admin = pComentario WHERE key_noticia = pID;

UPDATE Noticia SET Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET No_Aprobada 	= 1 WHERE key_noticia = pID;
UPDATE Noticia SET Pendiente 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Revision 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Devuelta 	= 0 WHERE key_noticia = pID;
END $$

DROP PROCEDURE Revisar_Noticia;
DELIMITER $$
CREATE PROCEDURE Revisar_Noticia(
IN pComentario TINYTEXT,
IN pID INT
)
BEGIN 
UPDATE Noticia SET comentario_admin = pComentario WHERE key_noticia = pID;

UPDATE Noticia SET Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET No_Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Pendiente 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Revision 	= 1 WHERE key_noticia = pID;
UPDATE Noticia SET Devuelta 	= 0 WHERE key_noticia = pID;
END $$

DROP PROCEDURE Devolver_Noticia;
DELIMITER $$
CREATE PROCEDURE Devolver_Noticia(
IN pComentario TINYTEXT,
IN pID INT
)
BEGIN 
UPDATE Noticia SET comentario_admin = pComentario WHERE key_noticia = pID;

UPDATE Noticia SET Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET No_Aprobada 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Pendiente 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Revision 	= 0 WHERE key_noticia = pID;
UPDATE Noticia SET Devuelta 	= 1 WHERE key_noticia = pID;
END $$


DELIMITER $$
CREATE PROCEDURE Agregar_Comentario(
IN pNoticia_id INT,
IN pUsuario varchar(50),
IN pFoto BLOB,
IN pTexto TEXT
)
BEGIN
INSERT INTO Comentario(
noticia_id,
Usuario_com,
Foto_com,
Fecha_hora,
Texto_comentario
)VALUES(
pNoticia_id,
pUsuario,
pFoto,
NOW(),
pTexto
);
END $$

DELIMITER $$
CREATE PROCEDURE Modificar_Comentario(
IN pID INT,
IN pNoticia INT,
IN pUsuario varchar(50),
IN pFoto BLOB,
IN pFecha DATETIME,
IN pTexto TEXT
)
BEGIN
UPDATE Comentario
SET

noticia_id 			= pNoticia,
Usuario_com    		= pUsuario,
Foto_com			= pFoto, 
Fecha_hora			= NOW(), 
Texto_comentario 	= pTexto

WHERE key_comentario = pID;

END $$

DELIMITER $$
CREATE PROCEDURE Eliminar_Comentario(
IN pID INT
)
BEGIN
DELETE FROM Comentario WHERE key_comemntario = pID;
END $$

DELIMITER $$
CREATE PROCEDURE Mostrar_Comentario_Usuario(
IN pID INT,
IN pUsuario varchar(50)
)
BEGIN

SELECT 
key_comentario,
Usuario_com,
Foto_com,
Fecha_hora,
Texto_comentario 
FROM Comentario 
WHERE key_comentario = pID AND Usuario_com = pUsuario;

END $$

DELIMITER $$
CREATE PROCEDURE Mostrar_Comentarios(
IN pID INT
)
BEGIN

SELECT 
key_comentario,
Usuario_com,
Foto_com,
Fecha_hora,
Texto_comentario 
WHERE noticia_id = pID; 

END $$

DELIMITER $$
CREATE PROCEDURE Agregar_Like(
IN pID INT
)
BEGIN
UPDATE Comentario SET Positivos = Positivos +1 WHERE key_noticia = pID;
END $$

DELIMITER $$
CREATE PROCEDURE Cantidad_Like(

)
BEGIN
SELECT Positivos FROM Noticia WHERE key_noticia = pID;
END $$

DELIMITER $$
CREATE PROCEDURE Agregar_Seccion(
IN pSeccion VARCHAR(30),
IN pColor VARCHAR(30),
IN pIcono VARCHAR(120)
)
BEGIN

INSERT INTO Seccion(
nombre_seccion,
color_seccion,
icono_seccion
)VALUES(
pSeccion,
pColor,
pIcono
);
END$$

use notidb;


DELIMITER $$
CREATE PROCEDURE Mostrar_Secciones()
BEGIN
Select * FROM Seccion;
END$$

/*DELIMITER $$
CREATE PROCEDURE Agregar_imagen(
IN pId INT,
IN pImagen BLOB
)
BEGIN
INSERT INTO Imagen_noticia(
id_noticia,
imagen,
)VALUES(
pId,
pImagen,
);
END

DELIMITER $$
CREATE PROCEDURE Agregar_video(
IN pId INT,
IN pVideo TEXT,
IN pDireccion TEXT
)
BEGIN
INSERT INTO Imagen_noticia(
id_noticia,
video,
direccion_video
)VALUES(
pId,
pVideo,
pDireccion
);
END*/

drop procedure Mostrar_Noticia_A_Usuario;
DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_A_Usuario(
IN pUsuario VARCHAR(50)
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Aprobada = 1
AND Autor = pUsuario;

END $$

drop procedure Mostrar_Noticia_R_Usuario;
DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_R_Usuario(
IN pUsuario VARCHAR(50)
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Revision = 1
AND Autor = pUsuario;

END $$


DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_D_Usuario(
IN pUsuario VARCHAR(50)
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Devuelta = 1
AND Autor = pUsuario;

END $$

DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_P_Usuario(
IN pUsuario VARCHAR(50)
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE Pendiente = 1
AND Autor = pUsuario;

END $$


DELIMITER $$
CREATE PROCEDURE Mostrar_Noticia_NA_Usuario(
IN pUsuario VARCHAR(50)
)
BEGIN
Select 
numero_referencia,
Seccion_principal,
Titulo,
Descripcion
FROM Noticia WHERE No_Aprobada = 1
AND Autor = pUsuario;

END $$

drop procedure Cargar_Imagen;
DELIMITER $$
CREATE PROCEDURE Cargar_Imagen(
IN pID varchar(20)
)
BEGIN
Select imagen FROM Imagen_Noticia WHERE numero_referencia = pID AND contador = 1;
END $$

DELIMITER $$
CREATE PROCEDURE Cargar_Video(
IN pID varchar(20)
)
BEGIN
Select video FROM Video_noticia WHERE numero_referencia = pID;
END $$

DELIMITER $$
CREATE PROCEDURE Imagen_NotaCompleta(
IN pID varchar(20)
)
BEGIN
Select imagen FROM Imagen_Noticia WHERE numero_referencia = pID;
END $$

drop procedure Video_NotaCompleta;
DELIMITER $$
CREATE PROCEDURE Video_NotaCompleta(
IN pID varchar(20)
)
BEGIN
Select video FROM Video_Noticia WHERE numero_referencia = pID;
END $$

drop procedure Cargar_SeccionNoticia;
DELIMITER $$
CREATE PROCEDURE Cargar_SeccionNoticia(
IN pSeccion varchar(20)
)
BEGIN
Select color_seccion, icono_seccion FROM Seccion WHERE key_seccion = pSeccion;
END$$

USE notidb;
DROP PROCEDURE Modificar_Seccion;
DELIMITER $$
CREATE PROCEDURE Modificar_Seccion(
IN pSeccion VARCHAR(30),
IN pColor VARCHAR(30),
IN pIcono VARCHAR(120)
)
BEGIN
UPDATE Seccion SET 
color_seccion = pColor, 
icono_seccion = pIcono 
WHERE pSeccion = nombre_seccion;
END$$

DELIMITER $$
CREATE PROCEDURE Eliminar_Seccion(
IN pID INT
)
BEGIN
DELETE FROM Seccion WHERE key_seccion = pID;
END $$

drop procedure Verificar_Aprobado
DELIMITER $$
CREATE PROCEDURE Verificar_Aprobado(
)
BEGIN

SELECT Aprobada FROM Noticia;
IF Aprobada = 1 THEN 
UPDATE Noticia SET ExisteAprobada = '1' WHERE Aprobada = 1;
END IF;
END$$ 

DELIMITER $$
CREATE PROCEDURE Etiqueta_Noticia(
)
BEGIN
SELECT Etiqueta FROM Noticia;
END $$


DROP PROCEDURE Mostrar_Etiquetas;
DELIMITER $$
CREATE PROCEDURE Mostrar_Etiquetas(
)
BEGIN
SELECT key_noticia, Etiqueta FROM Noticia;
END $$

DELIMITER $$
CREATE PROCEDURE TraerSeccion(
IN pSeccion VARCHAR(10)
)
BEGIN 
SELECT color_seccion, icono_seccion FROM Seccion WHERE nombre_seccion = pSeccion; 

END$$


DELIMITER $$
CREATE PROCEDURE TraerUsuario(
)
BEGIN
SELECT key_usuario, Nombre_usuario FROM Usuario WHERE Reportero = 1;
END $$

DROP PROCEDURE Eliminar_Seccion;
DROP PROCEDURE Eliminar_Usuario;

DELIMITER $$
CREATE PROCEDURE EliminarUsuario(
IN pUser VARCHAR(50)
)
BEGIN
DELETE FROM Usuario WHERE Nombre_usuario = pUser;
DELETE FROM Noticia WHERE Autor = pUser;
END $$

DELIMITER $$
CREATE PROCEDURE EliminarSeccion(
IN pSeccion VARCHAR(50)
)
BEGIN
DELETE FROM Seccion WHERE key_seccion = pSeccion;
DELETE FROM Noticia WHERE Seccion_principal = pSeccion;
END $$

DELIMITER $$
CREATE PROCEDURE Eliminar_Noticia(
IN pID varchar(20)
)
BEGIN
DELETE FROM Noticia WHERE key_noticia = pID;
END $$

DROP PROCEDURE Modificar_Noticia;
DELIMITER $$
CREATE PROCEDURE Modificar_Noticia(
IN pID VARCHAR(20),
IN pAutor VARCHAR(50),
IN pLugar VARCHAR (50),
IN pFecha VARCHAR(50),
IN pTitulo VARCHAR(100),
IN pDescripcion TEXT, 
IN pTexto MEDIUMTEXT,
IN pEtiqueta VARCHAR(20),
IN pSeccion VARCHAR(20),
IN pSeccionS1 VARCHAR(20)
)
BEGIN
UPDATE Noticia 
SET
 Autor 					= pAutor,
 Lugar_suceso 			= pLugar,
 Fecha_publicacion  	= pFecha,
 Titulo 				= pTitulo,
 Descripcion 			= pDescripcion,
 Texto 					= pTexto,
 Etiqueta 				= pEtiqueta,
 Seccion_principal 		= pSeccion,
 Seccion_secundaria 	= pSeccionS1
 WHERE key_noticia = pID;
END$$

DELIMITER $$
CREATE PROCEDURE MostrarModif(
IN pNum VARCHAR(20)
)
BEGIN
SELECT Autor, key_noticia FROM Noticia WHERE numero_referencia = pNum;
END $$


DELIMITER $$
CREATE PROCEDURE TraerPeliculas(
)
BEGIN
SELECT * FROM Noticia WHERE Aprobada = 1;
END $$