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
IN pImagen LONGBLOB,
IN pDireccionImagen TEXT,
IN pVideo TEXT,
IN pDireccionVideo TEXT,
IN pEtiqueta VARCHAR(20),
IN pSeccionP VARCHAR(20),
IN pSeccion1 VARCHAR(20),
IN pSeccion2 VARCHAR(20)
)
BEGIN

INSERT INTO Noticia(
Autor,
Lugar_suceso,
Fecha_suceso,
Titulo,
Descripcion,
Texto,
imagen,
direccion_imagen,
video,
direccion_video,
Etiqueta,
Seccion_principal,
Seccion_secundaria,
Seccion_secundaria2
)
VALUES(
pAutor,
pLugar_suceso,
pFecha_suceso,
pTitulo,
pDescripcion,
pTexto,
pImagen,
pDireccionImagen,
pVideo,
pDireccionVideo,
pEtiqueta,
Seccion_principal,
pSeccion1,
pSeccion2
);
 INSERT INTO Noticia (Fecha_publicacion) VALUES (NOW());
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


DELIMITER $$
CREATE PROCEDURE Eliminar_Seccion(
IN pNombre VARCHAR(30)
)
BEGIN
DELETE FROM Seccion WHERE key_seccion = pNombre;
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
