CREATE database bd_controlTrabajos;
use bd_controlTrabajos;
-- DROP DATABASE bd_controlTrabajos;

CREATE TABLE cliente(
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    rut VARCHAR(15),
    nombre_cliente VARCHAR(35),
    apellido_cliente VARCHAR(35),
    telefono VARCHAR(15),
    correo VARCHAR(35),
    direccion VARCHAR(35),
    localidad VARCHAR(35)
);


CREATE TABLE tipo_trabajo(
    id_tipo_trabajo INT AUTO_INCREMENT PRIMARY KEY,
    tipo_trabajo VARCHAR(35)
);

CREATE TABLE tipo_usuario(
    id_tipo_usuario INT AUTO_INCREMENT PRIMARY KEY,
    tipo_usuario VARCHAR (35)
);

CREATE TABLE usuario(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nom_usuario VARCHAR (35),
    pass VARCHAR (15),
    id_tipo_usuario INT,
    FOREIGN KEY (id_tipo_usuario) REFERENCES tipo_usuario(id_tipo_usuario)
);

CREATE TABLE tecnico(
    id_tecnico INT AUTO_INCREMENT PRIMARY KEY,
    nombre_tecnico VARCHAR(35),
    apellido_tecnico VARCHAR(35),
    telefono_tecnico VARCHAR(15),
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);
CREATE TABLE plan(
    id_plan INT AUTO_INCREMENT PRIMARY KEY ,
    nombre_plan VARCHAR(35)
);

CREATE TABLE trabajo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha date,
    id_tipo_trabajo INT,
    id_cliente INT,
    descripcion_trabajo VARCHAR(50),
    disponibilidad VARCHAR(50),
    id_plan INT,
    id_tecnico INT,
    FOREIGN KEY (id_tipo_trabajo) REFERENCES tipo_trabajo(id_tipo_trabajo),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_tecnico) REFERENCES tecnico(id_tecnico),
    FOREIGN KEY (id_plan) REFERENCES plan(id_plan)
);

CREATE TABLE rayo(
    id_rayo INT AUTO_INCREMENT PRIMARY KEY,
    nombre_rayo VARCHAR(15)
);

CREATE TABLE informe(
    id_informe INT AUTO_INCREMENT PRIMARY KEY,
    id_trabajo INT,
    latitud VARCHAR(35),
    longitud VARCHAR(35),
    fecha_ejecucion_informe DATETIME,
    estado_inicial VARCHAR(50),
    resultado VARCHAR(50),
    equipo VARCHAR(32),
    id_rayo INT,
    ip VARCHAR(35),
    mac VARCHAR(50),
    trabajo_realizado VARCHAR(50),
    comentario VARCHAR(50),
    FOREIGN KEY (id_trabajo) REFERENCES trabajo(id),
    FOREIGN KEY (id_rayo) REFERENCES rayo(id_rayo)
);
-- --------------------------------------------------------------------------
-- CLIENTE --
INSERT INTO cliente(rut, nombre_cliente, apellido_cliente, telefono, direccion, localidad)
    VALUES ("11-1","Marcelo","Vargas","09 87654321", "Villa Even Ezer 092", "Placilla");

INSERT INTO cliente(rut, nombre_cliente, apellido_cliente, telefono, direccion, localidad)
    VALUES ("11222333-4","Jose","Rubio","09 86549652", "Villa Even Ezer 092", "Placilla");


INSERT INTO cliente(rut, nombre_cliente, apellido_cliente, telefono, direccion, localidad)
    VALUES ("11222333-4","Juan","Perez","09 86549652", "Villa Even Ezer 092", "Placilla");

INSERT INTO cliente(rut, nombre_cliente, apellido_cliente, telefono, direccion, localidad)
    VALUES ("11222333-4","Francisco","Valenzuela","09 86549652", "Villa Even Ezer 092", "Placilla");

SELECT * FROM cliente;
-- CLIENTE --

-- TIPO TRABAJO --
INSERT INTO tipo_trabajo(tipo_trabajo) VALUES ("Asistencia");
INSERT INTO tipo_trabajo(tipo_trabajo) VALUES ("Instalacion");
INSERT INTO tipo_trabajo(tipo_trabajo) VALUES ("Retiro");
SELECT * FROM tipo_trabajo;
-- TIPO TRABAJO --


-- TIPO USUARIO --
INSERT INTO tipo_usuario(tipo_usuario) VALUES ("administrador");
INSERT INTO tipo_usuario(tipo_usuario) VALUES ("tecnico");
SELECT * FROM tipo_usuario;
-- TIPO USUARIO --


-- USUARIO --
INSERT INTO usuario(nom_usuario, pass, id_tipo_usuario) VALUES ("admin","1234", 1);
INSERT INTO usuario(nom_usuario, pass, id_tipo_usuario) VALUES ("lvargas","1234", 2);
INSERT INTO usuario(nom_usuario, pass, id_tipo_usuario) VALUES ("tecnico1","1234", 2);

SELECT * FROM usuario;
-- USUARIO --

-- TECNICO --
INSERT INTO tecnico(nombre_tecnico, apellido_tecnico, telefono_tecnico, id_usuario)
VALUES ("Orlando", "Marquez", "09 98765432", 2);
INSERT INTO tecnico(nombre_tecnico, apellido_tecnico, telefono_tecnico, id_usuario)
VALUES ("tecnico", "1", "09 91234567", 2);
INSERT INTO tecnico(nombre_tecnico, apellido_tecnico, telefono_tecnico, id_usuario)
VALUES ("luis", "Vargas", "09 91234567", 2);
SELECT * FROM tecnico;
-- TECNICO --

-- PLAN --
INSERT INTO plan(nombre_plan) VALUES ('Plan 4 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 6 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 8 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 10 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 15 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 20 MEGAS');
INSERT INTO plan(nombre_plan) VALUES ('Plan 30 MEGAS');

SELECT * FROM trabajo;
delete from tecnico where nombre_tecnico = '';

INSERT INTO rayo(nombre_rayo) VALUES ('CFR1');
INSERT INTO rayo(nombre_rayo) VALUES ('CFR2');
INSERT INTO rayo(nombre_rayo) VALUES ('CFR3');
-- TRABAJO --
INSERT INTO trabajo(fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico)
VALUES ("2020-10-31",2,1,"Se cambio de Rayo","inmediata",1,1);

INSERT INTO trabajo(fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico)
VALUES (now(),3,2,"Se cambio de Rayo","inmediata",3,2);

SELECT * FROM trabajo;
-- TRABAJO --

SELECT id, fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico from trabajo;

SELECT id, fecha, id_tipo_trabajo, id_cliente, descripcion_trabajo, disponibilidad, id_plan, id_tecnico from trabajo
                WHERE id =50;

SELECT fecha, tt.tipo_trabajo as "tipo trabajo" ,concat(c.nombre_cliente,' ',c.apellido_cliente) as 'cliente', descripcion_trabajo, disponibilidad, p.nombre_plan , concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico' from trabajo t2
inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
inner join cliente c on t2.id_cliente = c.id_cliente
inner join tecnico t on t2.id_tecnico = t.id_tecnico
INNER JOIN plan p on t2.id_plan = p.id_plan
;

SELECT fecha, tt.tipo_trabajo as 'tipo trabajo' ,concat(c.nombre_cliente,' ',c.apellido_cliente) as 'cliente',
    descripcion_trabajo, disponibilidad, id_plan as 'Plan', concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico' from trabajo t2
    inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
    inner join cliente c on t2.id_cliente = c.id_cliente
    inner join tecnico t on t2.id_tecnico = t.id_tecnico
    INNER JOIN plan p on t2.id_plan = p.id_plan
    ;


SELECT id, fecha, tt.tipo_trabajo as 'tipo trabajo' ,concat(c.nombre_cliente,' ',c.apellido_cliente) as 'cliente',
       descripcion_trabajo, disponibilidad, p.nombre_plan , concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico'
FROM trabajo t2
                inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
                inner join cliente c on t2.id_cliente = c.id_cliente
                inner join tecnico t on t2.id_tecnico = t.id_tecnico
                INNER JOIN plan p on t2.id_plan = p.id_plan
where t2.id_tecnico = 1;

SELECT fecha, tt.tipo_trabajo as 'tipo trabajo' ,concat(c.nombre_cliente,' ',c.apellido_cliente) as 'cliente', c.direccion as 'direccion cliente',c.telefono as 'telefono cliente' , descripcion_trabajo, disponibilidad, p.nombre_plan , concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico' from trabajo t2
    inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
    inner join cliente c on t2.id_cliente = c.id_cliente
    inner join tecnico t on t2.id_tecnico = t.id_tecnico
    INNER JOIN plan p on t2.id_plan = p.id_plan
    where t2.id_tecnico = 2;


SELECT t2.id, fecha, tt.tipo_trabajo as 'tipo trabajo' ,concat(c.nombre_cliente,' ',c.apellido_cliente) as 'cliente', c.direccion as 'direccion cliente',c.telefono as 'telefono cliente' , descripcion_trabajo, disponibilidad, p.nombre_plan , concat(t.nombre_tecnico,' ',t.apellido_tecnico) as 'tecnico' from trabajo t2
    inner join tipo_trabajo tt on t2.id_tipo_trabajo = tt.id_tipo_trabajo
    inner join cliente c on t2.id_cliente = c.id_cliente
    inner join tecnico t on t2.id_tecnico = t.id_tecnico
    INNER JOIN plan p on t2.id_plan = p.id_plan
    where t2.id_tecnico = 2 ;


select * from rayo;