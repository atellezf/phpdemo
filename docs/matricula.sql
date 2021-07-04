DROP DATABASE IF EXISTS `matricula`;
CREATE DATABASE `matricula`;
USE `matricula`;

-- DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) NOT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rol` int(11) NOT NULL DEFAULT 2,
  PRIMARY KEY (`id`),
  KEY `idx_usuario_email` (`email`),
  CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`rol`)
	REFERENCES `rol`(`id`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` int(11) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_comentario_usuario` FOREIGN KEY (`usuario`)
	REFERENCES `usuario`(`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE VIEW `comentarios_por_usuario` AS
SELECT
	c.creado AS creado,
  c. texto AS texto,
  a.username AS username
FROM `comentario` c INNER JOIN `usuario` a ON c.`usuario` = a.`id`;

delimiter //
CREATE TRIGGER `usuario_actualizado` BEFORE UPDATE ON `usuario`
	for each row begin
		set NEW.modificado=current_timestamp;
	END; //
delimiter ;

INSERT INTO `rol`(`desc`) VALUES ('admin'), ('alumno');

INSERT INTO `usuario` (`nombre`, `apellidos`, `email`, `username`, `password`, `rol`) VALUES
('Admin','Admin','admin@test.com','admin', SHA2('12345', 256), 1);

INSERT INTO `usuario` (`nombre`, `apellidos`, `email`, `username`, `password`) VALUES
('Bruce', 'Wayne', 'b.wayne@test.com', 'b.wayne', SHA2('12345', 256)),
('Clark', 'Kent', 'c.kent@test.com', 'c.kent', SHA2('12345', 256)),
('Bruce', 'Banner', 'b.banner@test.com', 'b.banner', SHA2('12345', 256)),
('Steve', 'Rogers', 's.rogers@test.com', 's.rogers', SHA2('12345', 256)),
('Tony', 'Stark', 't.stark@test.com', 't.stark', SHA2('12345', 256));

INSERT INTO `comentario`(`usuario`, `texto`) VALUES
(1, 'No es quien soy debajo… sino mis acciones lo que me definen'),
(1, 'A veces, la verdad no es suficiente. A veces la gente merece más. A veces la gente merece que recompensen su fe'),
(2,'Lo asombroso solo puede ser creado si nos enfrentamos al riesgo, al miedo y al fracaso durante el proceso'),
(4, 'Esto será como encontrar una aguja en el pajar más grande de todo el planeta... ¡Afortunadamente traje un imán!');