CREATE DATABASE `pweb`;

CREATE TABLE  `pweb`.`usuarios` (
  `id_usuario` int(10) NOT NULL auto_increment,
  `nome` varchar(200) NOT NULL default '',
  `notas` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;