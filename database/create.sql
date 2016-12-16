CREATE TABLE `contato` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(17) DEFAULT NULL,
  `celular` varchar(17) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
);