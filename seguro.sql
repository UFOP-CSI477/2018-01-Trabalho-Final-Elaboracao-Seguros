--
-- Banco de Dados: `seguro`
--

DROP DATABASE IF EXISTS seguro;
CREATE DATABASE  `seguro` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;

/* DROP USER `sistemaweb`@`localhost`; */

GRANT ALL PRIVILEGES ON seguro.* TO `sistemaweb`@`localhost`;

USE seguro;

-- --------------------------------------------------------

--
-- Estrutura das tabelas
--
DROP TABLE IF EXISTS `funcionarios`;
DROP TABLE IF EXISTS `solicitacoes`;
DROP TABLE IF EXISTS `veiculos`;
DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `cpf` varchar(14) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(30) COLLATE latin1_general_ci NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

CREATE TABLE `veiculos` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `marca` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `modelo` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `fipe` int(7) COLLATE latin1_general_ci NOT NULL, 
  `ano` int(4) COLLATE latin1_general_ci NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------


CREATE TABLE `solicitacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `cliente_id` smallint(6) COLLATE latin1_general_ci NOT NULL,
  `veiculo_id` smallint(6) COLLATE latin1_general_ci NOT NULL,
  `aprovado` int(11) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `solicitacao_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `solicitacao_veiculo` FOREIGN KEY (`veiculo_id`) REFERENCES `veiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

CREATE TABLE `funcionarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `senha` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- INSERCAO DOS DADOS
--

INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Chevrollet', 'Camaro', 300000, 2012);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Chevrollet', 'Celta', 12000, 2007);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Chevrollet', 'Onix', 38000, 2017);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Fiat', 'Palio', 18000, 2009);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Fiat', 'Uno', 13000, 2012);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Fiat', 'Uno', 11000, 2010);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Fiat', 'Uno', 7000, 2005);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Toyota', 'Corolla', 103000, 2018);
INSERT INTO `veiculos` ( `marca`, `modelo`, `fipe`, `ano`) VALUES('Toyota', 'Etios', 60000, 2018);


INSERT INTO `funcionarios` ( `id`, `login`, `senha`) VALUES(1, 'funcionario', '123456');


INSERT INTO `clientes` ( `nome`, `email`, `cpf`, `senha`) VALUES('Joao', 'joao@email.com', '111.111.111-11', '123456');
INSERT INTO `clientes` ( `nome`, `email`, `cpf`, `senha`) VALUES('Pedro', 'pedro@email.com', '222.222.222-22', '123456');
INSERT INTO `clientes` ( `nome`, `email`, `cpf`, `senha`) VALUES('Zeca', 'zeca@email.com', '333.333.333-33', '123456');
INSERT INTO `clientes` ( `nome`, `email`, `cpf`, `senha`) VALUES('Juca', 'juca@email.com', '444.444.444-44', '123456');

INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('HOJ-1234', 1, 1, 1);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('TUM-1234', 1, 2, 2);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('FDQ-1234', 1, 3, 3);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('GUM-1234', 2, 4, 2);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('QWE-1234', 2, 5, 3);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('REW-1234', 3, 6, 2);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('QWE-1234', 4, 7, 1);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('QWE-1234', 4, 8, 2);
INSERT INTO `solicitacoes` ( `placa`, `cliente_id`, `veiculo_id`, `aprovado`) VALUES('QWE-1234', 4, 9, 3);
