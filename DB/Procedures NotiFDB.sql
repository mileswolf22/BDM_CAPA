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
    
    UPDATE Usuario SET Comun = 1;
	UPDATE Usuario SET existe = 1;
	UPDATE Usuario SET Anonimo = 0;
END$$

USE NotiDB;
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
    
    UPDATE Usuario SET Reportero = 1 WHERE Nombre_usuario = pUsuario;
    UPDATE Usuario SET existe = 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Anonimo = 0 WHERE Nombre_usuario = pUsuario;/*indica que el usuario agregado es de tipo Reportero*/
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
    
    UPDATE Usuario SET Editor = 1 WHERE Nombre_usuario = pUsuario;
    UPDATE Usuario SET existe = 1 WHERE Nombre_usuario = pUsuario;
	UPDATE Usuario SET Anonimo = 0 WHERE Nombre_usuario = pUsuario; /*indica que el usuario agregado es de tipo Reportero*/
    
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

USE notidb;
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

USE notidb;
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
IN pFecha_publicacion varchar(20),
IN pFecha_suceso varchar(20),
IN pLugar_suceso varchar(100),
IN pTitulo varchar(100),
IN pDescripcion TEXT,
IN pTexto MEDIUMTEXT
)
BEGIN

INSERT INTO Noticia(
Autor,
Fecha_publicacion,
Fecha_suceso,
Lugar_suceso,
Titulo,
Descripcion,
Texto
)
VALUES(
pAutor,
pFecha_publicacion,
pFecha_suceso,
pLugar_suceso,
pTitulo,
pDescripcion,
pTexto
);

END $$

DELIMITER $$
CREATE PROCEDURE AgregarImagen_Noticia(
IN pImagen BLOB,
IN pCodigo_noticia INT
)
BEGIN

INSERT INTO Imagen
(
imagen,
noticia_id
)
VALUES(
pImagen,
pCodigo_noticia
);
SELECT *FROM Imagen
INNER JOIN Noticia ON Noticia.key_noticia = Imagen.noticia_id;


END$$

DELIMITER $$
CREATE PROCEDURE AgregarVideo_Noticia(
IN pVideo TINYTEXT,
IN pCodigo_noticia INT
)
BEGIN

INSERT INTO Imagen
(
video,
noticia_id
)
VALUES(
pVideo,
pCodigo_noticia
);
SELECT *FROM Video
INNER JOIN Noticia ON Noticia.key_noticia = Video.noticia_id;


END$$


DELIMITER $$
CREATE PROCEDURE Verificar_usuario(
IN pUsuario varchar(50)
)
BEGIN

SELECT
    
	existe

	FROM Usuario 
	WHERE Nombre_usuario = pUsuario;
    


END $$



