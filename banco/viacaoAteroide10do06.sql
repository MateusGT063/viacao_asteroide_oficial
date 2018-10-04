-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_viacao_asteroide
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.25-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `acentosusados_view`
--

DROP TABLE IF EXISTS `acentosusados_view`;
/*!50001 DROP VIEW IF EXISTS `acentosusados_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `acentosusados_view` AS SELECT 
 1 AS `acentoOcupado`,
 1 AS `idViagem`,
 1 AS `ativo`,
 1 AS `idDestino`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `comprapassagem_view`
--

DROP TABLE IF EXISTS `comprapassagem_view`;
/*!50001 DROP VIEW IF EXISTS `comprapassagem_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `comprapassagem_view` AS SELECT 
 1 AS `idPassagem`,
 1 AS `idOnibus`,
 1 AS `acento`,
 1 AS `idTipoOnibus`,
 1 AS `tipo`,
 1 AS `qntLugares`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `destinos_view`
--

DROP TABLE IF EXISTS `destinos_view`;
/*!50001 DROP VIEW IF EXISTS `destinos_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `destinos_view` AS SELECT 
 1 AS `idViagem`,
 1 AS `origem`,
 1 AS `destino`,
 1 AS `primairaImagem`,
 1 AS `segundaImagem`,
 1 AS `dtPartida`,
 1 AS `hrPartida`,
 1 AS `tamanhoRota`,
 1 AS `idPontoPartida`,
 1 AS `idPontoChegada`,
 1 AS `codCidade`,
 1 AS `idDestino`,
 1 AS `idOnibus`,
 1 AS `idMotorista`,
 1 AS `nomeMotorista`,
 1 AS `hrChegada`,
 1 AS `descricao`,
 1 AS `idEpoca`,
 1 AS `valor`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `informacoesboleto_view`
--

DROP TABLE IF EXISTS `informacoesboleto_view`;
/*!50001 DROP VIEW IF EXISTS `informacoesboleto_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `informacoesboleto_view` AS SELECT 
 1 AS `idCliente`,
 1 AS `vencimento`,
 1 AS `valor`,
 1 AS `dataDocumento`,
 1 AS `numeroDocumento`,
 1 AS `agenciaCodBeneficiario`,
 1 AS `nomeCompleto`,
 1 AS `cpf`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `manutencao_view`
--

DROP TABLE IF EXISTS `manutencao_view`;
/*!50001 DROP VIEW IF EXISTS `manutencao_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `manutencao_view` AS SELECT 
 1 AS `TipoOnibus`,
 1 AS `placa`,
 1 AS `abertura`,
 1 AS `fechamento`,
 1 AS `quilometragem`,
 1 AS `item`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `passageiros_view`
--

DROP TABLE IF EXISTS `passageiros_view`;
/*!50001 DROP VIEW IF EXISTS `passageiros_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `passageiros_view` AS SELECT 
 1 AS `idPassagem`,
 1 AS `nomeCompleto`,
 1 AS `Destino`,
 1 AS `email`,
 1 AS `dtPartida`,
 1 AS `hrPartida`,
 1 AS `ativo`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `passagem_view`
--

DROP TABLE IF EXISTS `passagem_view`;
/*!50001 DROP VIEW IF EXISTS `passagem_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `passagem_view` AS SELECT 
 1 AS `idViagem`,
 1 AS `destinos`,
 1 AS `dataEmbarque`,
 1 AS `horaEmbarque`,
 1 AS `tipoOnibus`,
 1 AS `idPassagem`,
 1 AS `idCliente`,
 1 AS `nomeCompleto`,
 1 AS `rg`,
 1 AS `telefone`,
 1 AS `email`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `perfilusuario_view`
--

DROP TABLE IF EXISTS `perfilusuario_view`;
/*!50001 DROP VIEW IF EXISTS `perfilusuario_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `perfilusuario_view` AS SELECT 
 1 AS `idCliente`,
 1 AS `nome`,
 1 AS `sobrenome`,
 1 AS `dt_nasc`,
 1 AS `cpf`,
 1 AS `rg`,
 1 AS `sexo`,
 1 AS `celular`,
 1 AS `telefone`,
 1 AS `email`,
 1 AS `bairro`,
 1 AS `logradouro`,
 1 AS `cep`,
 1 AS `numero`,
 1 AS `nomeCidade`,
 1 AS `nomeEstado`,
 1 AS `sigla`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pg_missao`
--

DROP TABLE IF EXISTS `pg_missao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_missao` (
  `idVersao` int(11) NOT NULL AUTO_INCREMENT,
  `missao` text NOT NULL,
  `visao` text NOT NULL,
  `valores` text NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idVersao`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_missao`
--

LOCK TABLES `pg_missao` WRITE;
/*!40000 ALTER TABLE `pg_missao` DISABLE KEYS */;
INSERT INTO `pg_missao` VALUES (7,'gg','aa','bb',0),(12,'erfesf','efe','fefef',0),(13,'efesf','efefes','fefef',0),(14,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis \r\nvitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, \r\neu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur \r\nvel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. \r\nCurabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc \r\nplacerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, \r\neuismod aliquam eros.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1);
/*!40000 ALTER TABLE `pg_missao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_nossafrota`
--

DROP TABLE IF EXISTS `pg_nossafrota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_nossafrota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idTipoOnibus` int(11) DEFAULT NULL,
  `descricao` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_nossafrota_tipoOnibus_idx` (`idTipoOnibus`),
  CONSTRAINT `fk_nossafrota_tipoOnibus` FOREIGN KEY (`idTipoOnibus`) REFERENCES `tbl_tipoonibus` (`idTipoOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_nossafrota`
--

LOCK TABLES `pg_nossafrota` WRITE;
/*!40000 ALTER TABLE `pg_nossafrota` DISABLE KEYS */;
INSERT INTO `pg_nossafrota` VALUES (5,2,'43534','imagens/adventure-asphalt-california-533671.jpg',0),(16,4,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.','imagens/Busao2Andares.png',1),(17,2,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.','imagens/micro_onibus (1).png',0),(18,3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam erosoi.','imagens/Asteroidel (1).png',1),(19,2,'labalbalablet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.','imagens/Asteroidel (1).png',1),(20,1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.','imagens/micro_onibus (1).png',1);
/*!40000 ALTER TABLE `pg_nossafrota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_pontoturistico`
--

DROP TABLE IF EXISTS `pg_pontoturistico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_pontoturistico` (
  `idPontoTuristico` int(11) NOT NULL AUTO_INCREMENT,
  `idEpoca` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idPontoTuristico`),
  KEY `fk_pontoTuristico_epoca_idx` (`idEpoca`),
  CONSTRAINT `fk_pontoTuristico_epoca` FOREIGN KEY (`idEpoca`) REFERENCES `tbl_epoca` (`idEpoca`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_pontoturistico`
--

LOCK TABLES `pg_pontoturistico` WRITE;
/*!40000 ALTER TABLE `pg_pontoturistico` DISABLE KEYS */;
INSERT INTO `pg_pontoturistico` VALUES (3,3,'imagens/home.png','Invernoooooooooooooooo',0),(15,4,'imagens/passageiros2.png','Primaveraaaaaaaaaaaaa',0),(17,2,'imagens/home.png','Outonoooooooooo',0),(18,3,'imagens/usuario.png','Verããããããããããããããoooo',0),(21,1,'imagens/frota.png','Olá, tudo bem? Como você está? Bom, eu vou te rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu wefwer fwen vjb uihc b j ebew rjkwehf wefu hpu we',0),(22,1,'imagens/1486453055.jpg','Não sei o que dizer!',0),(23,1,'imagens/1486453055.jpg','Não sei o que dizer! 2ef3wefg3w',0),(26,2,'imagens/AAEAAQAAAAAAAAg-AAAAJGQxOTk3ZGMxLTgwZDctNDEwNS05NDM1LWUwOTI0ZDI4YTJkZQ.jpg','rgfverfg',0),(27,3,'imagens/1486453055.jpg','blablablablablablablablablablablablablablabla',0),(28,2,'imagens/on.png','hndthdhdfh',0),(32,1,'imagens/beautiful-road-wallpaper.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1),(38,4,'imagens/asphalt-black-and-white-clouds-715221.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1),(39,2,'imagens/autumn-autumn-leaves-dried-leaves-216798.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1),(40,3,'imagens/avenue-buildings-cars-754744.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1);
/*!40000 ALTER TABLE `pg_pontoturistico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pg_quemsomos`
--

DROP TABLE IF EXISTS `pg_quemsomos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pg_quemsomos` (
  `idVersao` int(11) NOT NULL AUTO_INCREMENT,
  `imagemSobre` varchar(255) NOT NULL,
  `textoSobre` text NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `idEpoca` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVersao`),
  KEY `fk_quemsomos_idx` (`idEpoca`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pg_quemsomos`
--

LOCK TABLES `pg_quemsomos` WRITE;
/*!40000 ALTER TABLE `pg_quemsomos` DISABLE KEYS */;
INSERT INTO `pg_quemsomos` VALUES (10,'imagens/logo_branca.png','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1,0),(14,'imagens/skateeua2.jpg','dfgdsfg',0,0),(18,'imagens/Acordo-Brasil-e-Estados-Unidos.jpg','TESTE BIEL 52',0,0),(19,'imagens/predio_2.gif','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1,0),(29,'imagens/businessman2.png','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed bibendum justo. Aenean justo elit, facilisis sed ultrices et, facilisis vitae erat. Praesent porta condimentum mattis. Aliquam id maximus augue. Morbi cursus elementum ante id faucibus. Fusce tristique metus ante, eu maximus arcu faucibus ac. Fusce malesuada finibus velit mattis rhoncus. Nam semper mi enim, non sollicitudin massa rhoncus nec. Curabitur vel varius est. Nullam velit sem, faucibus sed est at, malesuada pellentesque magna. Vivamus mollis dolor nisl, in consectetur enim mattis ac. Curabitur arcu nunc, porta a nulla nec, scelerisque ultricies odio. Fusce porta lobortis tortor, facilisis malesuada nisi feugiat id. Nunc placerat ornare ante, sit amet euismod odio finibus et. Nunc varius tellus vel sodales lacinia. Aliquam felis urna, elementum et justo mattis, euismod aliquam eros.',1,0),(30,'imagens/images.jpg','Teste Eduardo 4',0,0),(31,'imagens/images.jpg','Teste Eduardo 3',0,0),(32,'imagens/images.jpg','Teste Eduardo 2',0,0),(33,'imagens/images.jpg','Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, \"Lorem Ipsum dolor sit amet...\" vem de uma linha na seção 1.10.32.',0,0),(34,'imagens/testes_eht_soc.jpg','Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do \"de Finibus Bonorum et Malorum\" (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, \"Lorem Ipsum dolor sit amet...\" vem de uma linha na seção 1.10.32.',0,NULL);
/*!40000 ALTER TABLE `pg_quemsomos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `pontosparadas_view`
--

DROP TABLE IF EXISTS `pontosparadas_view`;
/*!50001 DROP VIEW IF EXISTS `pontosparadas_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pontosparadas_view` AS SELECT 
 1 AS `idPontos_viagem`,
 1 AS `nomePonto`,
 1 AS `idViagem`,
 1 AS `idPontoPartida`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `selectpassagens_view`
--

DROP TABLE IF EXISTS `selectpassagens_view`;
/*!50001 DROP VIEW IF EXISTS `selectpassagens_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `selectpassagens_view` AS SELECT 
 1 AS `idPassagem`,
 1 AS `hrPartida`,
 1 AS `dtPartida`,
 1 AS `destino`,
 1 AS `valor`,
 1 AS `ativo`,
 1 AS `idCliente`,
 1 AS `numeroDocumento`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tbl_acaofuncionario`
--

DROP TABLE IF EXISTS `tbl_acaofuncionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acaofuncionario` (
  `idAcaoFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `hora` time(5) NOT NULL,
  `idFuncionario` int(11) NOT NULL,
  `idTipoAcao` int(11) NOT NULL,
  PRIMARY KEY (`idAcaoFuncionario`),
  KEY `fk_aconFuncionario_TipoAcao_idx` (`idTipoAcao`),
  KEY `fk_acaoFuncionario_Funcionario_idx` (`idFuncionario`),
  CONSTRAINT `fk_acaoFuncionario_Funcionario` FOREIGN KEY (`idFuncionario`) REFERENCES `tbl_funcionario` (`idFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acaoFuncionario_TipoAcao` FOREIGN KEY (`idTipoAcao`) REFERENCES `tbl_tipoacao` (`idTipoAcao`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acaofuncionario`
--

LOCK TABLES `tbl_acaofuncionario` WRITE;
/*!40000 ALTER TABLE `tbl_acaofuncionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_acaofuncionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_acessorios`
--

DROP TABLE IF EXISTS `tbl_acessorios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acessorios` (
  `idAcessorios` int(11) NOT NULL AUTO_INCREMENT,
  `acessorio` varchar(100) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAcessorios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acessorios`
--

LOCK TABLES `tbl_acessorios` WRITE;
/*!40000 ALTER TABLE `tbl_acessorios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_acessorios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_acessoriotipoonibus`
--

DROP TABLE IF EXISTS `tbl_acessoriotipoonibus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_acessoriotipoonibus` (
  `idAcessorioTipoOnibus` int(11) NOT NULL AUTO_INCREMENT,
  `idAcessorios` int(11) NOT NULL,
  `idTipoOnibus` int(11) NOT NULL,
  PRIMARY KEY (`idAcessorioTipoOnibus`),
  KEY `fk_acessorioTipoOnibus_acessorios_idx` (`idAcessorios`),
  KEY `fk_acessorioTipoOnibus_tipoOnibus_idx` (`idTipoOnibus`),
  CONSTRAINT `fk_acessorioTipoOnibus_acessorios` FOREIGN KEY (`idAcessorios`) REFERENCES `tbl_acessorios` (`idAcessorios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_acessorioTipoOnibus_tipoOnibus` FOREIGN KEY (`idTipoOnibus`) REFERENCES `tbl_tipoonibus` (`idTipoOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_acessoriotipoonibus`
--

LOCK TABLES `tbl_acessoriotipoonibus` WRITE;
/*!40000 ALTER TABLE `tbl_acessoriotipoonibus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_acessoriotipoonibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_chegada`
--

DROP TABLE IF EXISTS `tbl_chegada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_chegada` (
  `idPontoChegada` int(11) NOT NULL AUTO_INCREMENT,
  `idPostoRodoviario` int(11) NOT NULL,
  `nomePonto` varchar(255) NOT NULL,
  PRIMARY KEY (`idPontoChegada`),
  KEY `fk_chegadaPostoRodoviario_idx` (`idPostoRodoviario`),
  CONSTRAINT `fk_chegadaPostoRodoviario` FOREIGN KEY (`idPostoRodoviario`) REFERENCES `tbl_postorodoviario` (`idPostoRodoviario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_chegada`
--

LOCK TABLES `tbl_chegada` WRITE;
/*!40000 ALTER TABLE `tbl_chegada` DISABLE KEYS */;
INSERT INTO `tbl_chegada` VALUES (1,6,'Formiga Doceira, MG-050'),(2,7,'Venda do Chico, BR-381'),(3,8,'Café com Prosa, BR-383'),(4,1,'Leiteria Nevada, BR-381'),(5,2,'Leite ao Pé da Vaca, BR-040'),(6,3,'Belleu’s Lanches, BR-381');
/*!40000 ALTER TABLE `tbl_chegada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cidade`
--

DROP TABLE IF EXISTS `tbl_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cidade` (
  `codCidade` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCidade` varchar(50) NOT NULL,
  `codEstado` int(11) NOT NULL,
  PRIMARY KEY (`codCidade`),
  KEY `fk_cidadeEstado_idx` (`codEstado`),
  CONSTRAINT `fk_cidadeEstado` FOREIGN KEY (`codEstado`) REFERENCES `tbl_estado` (`codEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cidade`
--

LOCK TABLES `tbl_cidade` WRITE;
/*!40000 ALTER TABLE `tbl_cidade` DISABLE KEYS */;
INSERT INTO `tbl_cidade` VALUES (1,'Jandira',25),(2,'Barueri',25),(3,'Osasco',25),(4,'Itapevi',25),(5,'Cotia',25),(6,'Vilhena',22),(7,'Porto Velho',22),(14,'Floriano',18),(15,'Cidade Base',20),(17,'Brasilia',7),(19,'Balsas',10),(20,'Campos do Jordão',25),(23,'Araraquara',25),(24,'São Luis',10),(25,'Alcântara',10),(26,'Colinas',10),(27,'Primeira Curz',10),(28,'Rolim de Moura',22),(29,'Pedro II',18),(30,'Caracol',18),(31,'Santo Antônio dos Milagres',18),(32,'Bom Jesus',18),(34,'Santo Amaro',25);
/*!40000 ALTER TABLE `tbl_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cliente`
--

DROP TABLE IF EXISTS `tbl_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(13) NOT NULL,
  `idEndereco` int(11) DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `idSubPassageiros` int(11) DEFAULT NULL,
  `ativo` tinyint(1) NOT NULL,
  `dt_nasc` date DEFAULT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `fk_clienteEndereco_idx` (`idEndereco`),
  KEY `fk_clienteSubPassageiros_idx` (`idSubPassageiros`),
  CONSTRAINT `fk_clienteEndereco` FOREIGN KEY (`idEndereco`) REFERENCES `tbl_endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_clienteSubPassageiros` FOREIGN KEY (`idSubPassageiros`) REFERENCES `tbl_subpassageiros` (`idSubPassageiros`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cliente`
--

LOCK TABLES `tbl_cliente` WRITE;
/*!40000 ALTER TABLE `tbl_cliente` DISABLE KEYS */;
INSERT INTO `tbl_cliente` VALUES (3,'Fulano','de Souza','125.468.268-12','30.458.165-5',1,'M','011 912548965','011 12687542','202cb962ac59075b964b07152d234b70','fulano@hotmail.com',1,1,'2012-05-25',NULL),(4,'Eduardo','Noronha','125.468.268-14','30.458.165-3',1,'F','011 912548689','011 12687356','456','eduardinho@asteroide.com',1,0,'2012-05-25','dukspp'),(7,'Mario','Bross gangsta','125.468.268-14','30.458.165-3',1,'F','011 912548689','011 12687356','122','mariozinho@asteroide.com',1,0,'2012-05-25',NULL),(8,'Bruno','Verdadeiro','125.468.268-14','30.458.165-3',23,'M','011 912548689','011 12687356','testeV','teste',NULL,0,'2012-05-25',NULL),(9,'Miguel','dfbfbb','125.468.268-14','30.458.165-3',1,'M','011 912548689','011 12687356','dqwdq','011 12687356',1,0,'2012-05-25',NULL),(18,'Yo','Disney','125.468.268-14','30.458.165-3',28,'F','011 912548689','011 12687356','ADAD','mariozinho@asteroide.com',NULL,0,'2012-05-25',NULL),(19,'SDFSDF','SDF','125.468.268-14','30.458.165-3',1,'F','011 912548689','011 12687356','ASDAS','mariozinho@asteroide.com',1,0,'2012-05-25',NULL),(20,'SFS','SDFS','125.468.268-14','30.458.165-3',23,'M','011 912548689','011 12687356','CXVXVC','mariozinho@asteroide.com',NULL,0,'2012-05-25',NULL),(21,'Andersin','Vrau Vrau','125.468.268-14','30.458.165-3',26,'F','011 912548689','011 12687356','SDFS','mariozinho@asteroide.com',1,0,'2012-05-25',NULL),(22,'FSDS','FSDS','125.468.268-14','30.458.165-3',1,'F','011 912548689','011 12687356','111','mariozinho@asteroide.com',1,0,'2012-05-25',NULL),(23,'Eduardo ','Teste Cadastro','123.456.789-15','55.124.487-89',44,'M','11 75412-8956','11 4002-4875','123','eduardo@asteroide.com',NULL,0,'2018-04-12',NULL),(34,'Mario ','Gangsta Teste','777.777.777-77','77.777.777-77',48,'F','77 97777-7777','77 42077-7777','gangsta','marioGangsta@asteroide.com',NULL,0,'2007-07-07',NULL),(39,'Gangstar','Teste Cadastro','123.456.789-15','55.124.487-89',51,'F','11 75412-8956','11 4002-4875','andsim','eduardo@asteroide.com',NULL,0,'2018-01-10',NULL),(40,'Eduardo','Teste Cadastro','123.456.789-15','55.124.487-89',47,'M','11 75412-8956','11 4002-4875','123','eduardo@asteroide.com',NULL,0,'2018-04-28',NULL),(42,'Testando Crud',' Inserir ','123.456.789-12','55.123.123-78',NULL,'M','11 94512-7845','11 4021-7845','edu123','edu@asteroide.com',NULL,0,'2018-01-15',NULL),(44,'Testando Crud',' Inserir ','123.456.789-12','55.123.123-78',64,'M','11 94512-7845','11 4021-7845','edu123','edu@asteroide.com',NULL,0,'2018-05-10',NULL),(45,'MAKDVSDV','QIOJDKJLDS','123.456.789-12','55.123.123-78',65,'F','11 94512-7845','11 4021-7845','edu123','edu@asteroide.com',NULL,0,'2018-05-15',NULL),(46,'Teste','Teste','123.456.789-12','55.123.123-78',NULL,'F','11 94512-7845','11 4021-7845','teste1','teste1@asteroide.com',NULL,0,'2009-05-15',NULL),(47,'VininhoGameplay','shajklfh','000.000.000-2','00.000.000-22',72,'M','011 4773-8232','011 47725699','123','vinny@gmail.com',NULL,0,'2085-02-12',NULL),(48,'VininhoGameplay','shajklfh','000.000.000-2','00.000.000-22',73,'M','011 4773-8232','011 47725699','123','vinny@gmail.com',NULL,0,'2222-02-12','Vinny'),(49,'','6rtr','000.000.000-12','51.123.123-50',74,'M','(11)95193-2547','(11) 4773-5687','12345','vinny@gmail.com',NULL,0,'2018-05-17','VinnyRodrigues'),(50,'VininhoGameplay','shajklfh','000.000.000-2','00.000.000-22',75,'M','(11) 4773-8232','(11) 47725699','123','vinny@gmail.com',NULL,0,'2018-05-08','Vinny'),(51,'VCASCV','Teste Cadastro','123.456.789-15','55.124.487-89',76,'F','11 75412-8956','11 4002-4875','andsim','edu@teste.com',NULL,0,'2018-05-16','eduardinho'),(52,'Mateus','Silva','455.585.589-55','55.555.555-55',77,'M','11 95652-6662','11 4141-5555','','fdf@dfdf.com',NULL,0,'2018-05-02','Mat'),(53,'Mateus','Silva','455.585.589-55','55.555.555-55',78,'M','11 95652-6662','11 4141-5555','','fdf@dfdf.com',NULL,0,'2018-05-02','Mat'),(54,'Du','Silva','455.585.589-55','55.555.555-55',79,'M','11 95652-6662','11 4141-5555','','fdf@dfdf.com',NULL,0,'2018-05-02','Mat'),(55,'Vinizão','Silva','455.585.589-55','55.555.555-55',80,'M','11 95652-6662','11 4141-5555','','fdf@dfdf.com',NULL,0,'2018-05-02','Mat'),(56,'Godzilla','Silva Sauro','495.555.555-22','55.555.545-55',81,'M','55 95959-2222','11 4002-8922','hihi','zilla@gmail.com',NULL,0,'2018-05-03','Zilla'),(57,'Bruno ','Souza','123.456.789-15','55.124.487-89',82,'M','11 75412-8956','11 4002-4875','123','bruno@asteroide.com',NULL,0,'1995-03-22','eduardinho'),(58,'Rosana','Souza','232.819.123-01','34.274.285-31',83,'F','1193240-0129','1144002123','202cb962ac59075b964b07152d234b70','rosana@asteroide.com',NULL,0,'1991-01-31','rosana');
/*!40000 ALTER TABLE `tbl_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_destino`
--

DROP TABLE IF EXISTS `tbl_destino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_destino` (
  `idDestino` int(11) NOT NULL AUTO_INCREMENT,
  `destino` varchar(100) NOT NULL,
  `imagem` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `hora_saida` time NOT NULL,
  `hora_chegada` time NOT NULL,
  `data` date NOT NULL,
  `idTipoOnibus` int(11) NOT NULL,
  `idEpoca` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDestino`),
  KEY `fk_destinoCliente_idx` (`idCliente`),
  CONSTRAINT `fk_destinoCliente` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_destino`
--

LOCK TABLES `tbl_destino` WRITE;
/*!40000 ALTER TABLE `tbl_destino` DISABLE KEYS */;
INSERT INTO `tbl_destino` VALUES (1,'São Paulo - Rio de Janeiro','imagens/Rio de Janeiro.jpg','weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug weha prfwehrpfu9 3howu hw yug.','12:00:00','13:30:00','2018-04-12',3,1,3),(2,'São Paulo - Rio de Janeiro','imagens/Rio de Janeiro.jpg','wfgwe feifyge icfw.','15:00:00','16:30:00','2018-04-20',2,4,3),(3,'São Paulo - Santos','imagens/organograma - departamental.png','Organograma departamental da empresa Legacy Tech.','10:15:00','11:45:00','2018-04-24',4,2,4),(4,'São Paulo - Santos','imagens/dd0e339340493f39217706ab2799d52c.jpg','Organograma linear da empresa Legacy Tech.','08:30:00','10:00:00','2018-04-16',1,1,3),(6,'Campinas - Santos','imagens/13634384473_22896dca7d_b.jpg','hdvf wiefej fhwiuef hçwqeu sdf.','20:00:00','20:50:00','2018-04-29',2,4,4);
/*!40000 ALTER TABLE `tbl_destino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_dicas`
--

DROP TABLE IF EXISTS `tbl_dicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_dicas` (
  `idDicas` int(11) NOT NULL AUTO_INCREMENT,
  `nomeLugar` varchar(255) NOT NULL,
  `descricaoDica` text NOT NULL,
  `imgDica` varchar(255) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idDicas`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_dicas`
--

LOCK TABLES `tbl_dicas` WRITE;
/*!40000 ALTER TABLE `tbl_dicas` DISABLE KEYS */;
INSERT INTO `tbl_dicas` VALUES (9,'Sorocabaa','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/601969.jpg',1),(10,'São Paulo','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/sp.jpg',1),(11,'Rio de Janeiro','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/rio.jpg',1),(12,'Espirito Santo','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/es.jpg',1),(23,'Viagem maravilhosa!','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/164696196-road-wallpapers.jpg',1),(26,'Alagoinha','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut mi massa, venenatis ac feugiat sed, faucibus ut risus. Duis iaculis ipsum nec eros egestas porttitor ac vitae eros. Nulla facilisi. Vestibulum vulputate purus eget magna laoreet convallis. Fusce sagittis odio mauris, ac ultricies arcu blandit ac. Fusce efficitur aliquet ornare. Vestibulum imperdiet dictum felis, a mattis risus feugiat vel. Ut nec euismod mauris, ultrices consequat erat. Suspendisse sed fringilla enim. Morbi quis pulvinar neque, a mollis purus. Donec sed dignissim augue. In iaculis massa id massa ultricies, ut malesuada elit vestibulum. Etiam euismod dictum tempus. Sed malesuada a libero in sollicitudin.','imagens/asteroid.jpg',1);
/*!40000 ALTER TABLE `tbl_dicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_duvida`
--

DROP TABLE IF EXISTS `tbl_duvida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_duvida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(255) NOT NULL,
  `resposta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_duvida`
--

LOCK TABLES `tbl_duvida` WRITE;
/*!40000 ALTER TABLE `tbl_duvida` DISABLE KEYS */;
INSERT INTO `tbl_duvida` VALUES (11,'O que voce acha de ir na praia fim de semana ano que vem? de onibus é claro','O que voce acha de ir na praia fim de semana ano que vem?  de onibus é claro haha h ahahaha hah ahah ahahahahahaha'),(13,'O que voce acha de ir na praia fim de semana ano que vem? de onibus é claro','QUERIA ESTAR MORTA :)'),(14,'fffffffffffffffffffffffffff','fgfffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),(15,'O que voce acha de ir na pria fim de semana ano que vem? de onibus é claro','O que voce acha de ir na pria fim de semana ano que vem? de onibus é claro'),(16,'Então dusdisisisdisd sdiusdi uisdu sidu sidu isdu isdu saoid sod sodso fudof udofg ','sdiiodsf d foiud oud fdoigu fogu fogu foh gf ugiuiggio hug go gio ugo hugo oguhoghu g');
/*!40000 ALTER TABLE `tbl_duvida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(100) NOT NULL,
  `logradouro` varchar(255) NOT NULL,
  `idTipoEndereco` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `codCidade` int(11) NOT NULL,
  `numero` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `fk_enderecoCidade_idx` (`codCidade`),
  KEY `fk_enderecoTipoEnd_idx` (`idTipoEndereco`),
  CONSTRAINT `fk_enderecoCidade` FOREIGN KEY (`codCidade`) REFERENCES `tbl_cidade` (`codCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_enderecoTipoEnd` FOREIGN KEY (`idTipoEndereco`) REFERENCES `tbl_tipoendereco` (`idTipoEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco`
--

LOCK TABLES `tbl_endereco` WRITE;
/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
INSERT INTO `tbl_endereco` VALUES (1,'Jardim Rosa Emilia','Rua Principal Miguel Alvaredo ',1,'06608-422',1,'41'),(21,'Jardim Rosa Emilia','Rua João Longo',1,'06608-420',1,'345'),(23,'Bairros do Grajaú‎','Rua Galvão Bueno',1,'01328-465',5,'71'),(26,'Bairros da Mooca‎ ','Rua Amaral Gama',1,'654687452',1,'55'),(27,'Bairros da Lapa‎','Rua Heitor Penteado',1,'654687452',1,'124'),(28,'Bairros do Ipiranga‎','Rua Doutor César',1,'654687452',1,'75'),(30,'Bairros da Mooca‎ ','Rua João Longo',1,'sxasdaa',3,'784'),(32,'Bairros da Lapa‎','Rua da Consolação',1,'32165',6,'456'),(33,'Bairros do Grajau','Rua João Cachoeira',1,'32165',6,'123'),(34,'Bairros da Mooca‎ ','Rua da Mooca',1,'32165',6,'789'),(35,'Bairros do Grajau','Rua João Cachoeira',1,'333',3,'987'),(36,'Bairros de Santana‎ ','Rua da Mooca',1,'555555',2,'654'),(37,'Bairros de Vila Sonia‎ ','Rua Conselheiro Saraiva',1,'55555',5,'321'),(38,'Bairros da Mooca‎ ','Rua da Mooca',1,'5555666',5,'12'),(39,'Bairros da Lapa‎','Rua Conselheiro Saraiva',1,'111',25,'21'),(40,'Bairros de Vila Sonia‎ ','Rua São Bento',1,'456',5,'22'),(41,'Bairros do Grajau','Rua Vergueiro',1,'456',5,'356'),(42,'Bairros de Santana‎ ','Rua Alto Tiete Nogueira',1,'456',5,'845'),(43,'Bairros do Ipiranga‎','Rua Tuiuti',1,'456',5,'557'),(44,'Bairros da Lapa‎','Rua da Consolação',1,'456',5,'698'),(45,'Bairros do Grajau','Rua Vergueiro',1,'456',5,'754'),(46,'Bairros do Ipiranga‎','Rua Alto Tiete Nogueira',1,'456',5,'124'),(47,'Bairros de Santana‎ ','Rua Tuiuti',1,'456',5,'457'),(48,'Bairros do Grajau','Rua da Consolação',1,'456',5,'7895'),(49,'Bairros de Santana‎ ','Rua Heitor Penteado',1,'7894-89',3,'45'),(50,'Bairros do Turiguara','Rua Alto Tiete Nogueira',1,'7894-89',1,'140'),(51,'Bairros do Grajau','Rua Tuiuti',1,'7894-89',1,'1248'),(52,'Parque Imperial','Rua Vicente Amato',1,'32165',3,'30'),(53,'Parque Imperial','Rua Vicente Amato',1,'32165',3,'11'),(54,'dvd','babelebleleb',1,'7887-854',14,'741'),(55,'dvd','babelebleleb',1,'7887-854',14,'741'),(56,'dvd','babelebleleb',1,'7887-854',25,'789'),(57,'dvd','babelebleleb',1,'7887-854',25,'789'),(58,'dvd','babelebleleb',1,'7887-854',25,'789'),(59,'efef','babelebleleb',1,'7887-854',17,'424'),(60,'dvd','babelebleleb',1,'7887-854',17,'123'),(61,'balbalablb','babelebleleb',1,'7887-854',17,'1023'),(62,'Parque Imperial','Rua Vicente Amato',1,'32165',29,'322'),(63,'Parque Imperial','Rua Vicente Amato',1,'32165',29,'322'),(64,'Parque Imperial','Rua Vicente Amato',1,'32165',29,'322'),(65,'Parque Villa Dirce II','Rua São Bento',1,'3216-500',14,'344'),(70,'usuario','user',1,'3212',29,'11'),(71,'balbalablb','babelebleleb',1,'7887-854',4,'123'),(72,'dff','1111',1,'0000-333',7,'123'),(73,'dff','1111',1,'0000-333',29,'123'),(74,'balbalablb','saddasda',1,'7887-854',27,'232'),(75,'1111','dfdfdf',1,'0000-333',29,'122'),(76,'Turiguara','Roment Ivilbert',1,'7894-89',34,'45'),(77,'DFDOF','Rua Baixada das pulgas',1,'06656-111',2,'22'),(78,'DFDOF','Rua Baixada das pulgas',1,'06656-111',2,'22'),(79,'DFDOF','Rua Baixada das pulgas',1,'06656-111',2,'22'),(80,'DFDOF','SLA VEI',1,'06656-111',2,'22'),(81,'Monsterverse','Rua Ghidorah',1,'06656-555',2,'33'),(82,'Sandariana','Familia Mada Neto',1,'7894-89',28,'2'),(83,'Sao Pedro II','Seringueira',1,'06449-360',2,'9');
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_epoca`
--

DROP TABLE IF EXISTS `tbl_epoca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_epoca` (
  `idEpoca` int(11) NOT NULL AUTO_INCREMENT,
  `epoca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEpoca`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_epoca`
--

LOCK TABLES `tbl_epoca` WRITE;
/*!40000 ALTER TABLE `tbl_epoca` DISABLE KEYS */;
INSERT INTO `tbl_epoca` VALUES (1,'Verão'),(2,'Outono'),(3,'Primavera'),(4,'Inverno');
/*!40000 ALTER TABLE `tbl_epoca` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_epocaquemsomos`
--

DROP TABLE IF EXISTS `tbl_epocaquemsomos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_epocaquemsomos` (
  `idEpocaQuemSomos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idEpocaQuemSomos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_epocaquemsomos`
--

LOCK TABLES `tbl_epocaquemsomos` WRITE;
/*!40000 ALTER TABLE `tbl_epocaquemsomos` DISABLE KEYS */;
INSERT INTO `tbl_epocaquemsomos` VALUES (1,'wdvvwrvawrgvgvawervsdv'),(2,'casaas'),(3,'anhaaaa');
/*!40000 ALTER TABLE `tbl_epocaquemsomos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estado`
--

DROP TABLE IF EXISTS `tbl_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_estado` (
  `codEstado` int(11) NOT NULL AUTO_INCREMENT,
  `nomeEstado` varchar(40) NOT NULL,
  `sigla` varchar(5) NOT NULL,
  PRIMARY KEY (`codEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estado`
--

LOCK TABLES `tbl_estado` WRITE;
/*!40000 ALTER TABLE `tbl_estado` DISABLE KEYS */;
INSERT INTO `tbl_estado` VALUES (1,'Acre','AC'),(2,'Alagoas','AL'),(3,'Amapá','AP'),(4,'Amazonas','AM'),(5,'Bahia','BA'),(6,'Ceará','CE'),(7,'Distrito Federal','DF'),(8,'Espírito Santo','ES'),(9,'Goiás','GO'),(10,'Maranhão','MA'),(11,'Mato Grosso','MT'),(12,'Mato Grosso do Sul','MS'),(13,'Minas Gerais','MG'),(14,'Pará','PA'),(15,'Paraíba','PB'),(16,'Paraná','PR'),(17,'Pernambuco','PE'),(18,'Piauí','PI'),(19,'Rio de Janeiro','RJ'),(20,'Rio Grande do Norte','RN'),(21,'Rio Grande do Sul','RS'),(22,'Rondônia','RO'),(23,'Roraima','RR'),(24,'Santa Catarina','SC'),(25,'São Paulo','SP'),(26,'Sergipe','SE'),(27,'Tocantins','TO');
/*!40000 ALTER TABLE `tbl_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_faleconosco`
--

DROP TABLE IF EXISTS `tbl_faleconosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_faleconosco` (
  `idFaleConosco` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `critica` varchar(300) DEFAULT NULL,
  `finalizado` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`idFaleConosco`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_faleconosco`
--

LOCK TABLES `tbl_faleconosco` WRITE;
/*!40000 ALTER TABLE `tbl_faleconosco` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_faleconosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_fichamanutencao`
--

DROP TABLE IF EXISTS `tbl_fichamanutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_fichamanutencao` (
  `idFichaManutencao` int(11) NOT NULL AUTO_INCREMENT,
  `idOnibus` int(11) NOT NULL,
  `abertura` date NOT NULL,
  `fechamento` date NOT NULL,
  `item` varchar(255) NOT NULL,
  `valorGasto` varchar(50) NOT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `finalizado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idFichaManutencao`),
  KEY `fk_ficha_onibus_idx` (`idOnibus`),
  CONSTRAINT `fk_ficha_onibus` FOREIGN KEY (`idOnibus`) REFERENCES `tbl_onibus` (`idOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_fichamanutencao`
--

LOCK TABLES `tbl_fichamanutencao` WRITE;
/*!40000 ALTER TABLE `tbl_fichamanutencao` DISABLE KEYS */;
INSERT INTO `tbl_fichamanutencao` VALUES (1,1,'2000-02-02','2000-02-02','Foi realizado a troca de Óleo do Onibus','45,99','A troca do oleo foi feita com sucesso',1),(2,2,'2018-05-05','2018-05-05','Foi realizado a troca dos 6 pneus','1500,00','A troca dos pneus foi feita com sucesso',1);
/*!40000 ALTER TABLE `tbl_fichamanutencao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_funcionario`
--

DROP TABLE IF EXISTS `tbl_funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_funcionario` (
  `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(70) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `rg` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idNivelFuncionario` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idFuncionario`),
  KEY `fk_funcionarioNivel_idx` (`idNivelFuncionario`),
  KEY `fk_funcionarioEndereco_idx` (`idEndereco`),
  CONSTRAINT `fk_funcionarioEndereco` FOREIGN KEY (`idEndereco`) REFERENCES `tbl_endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_funcionarioNivel` FOREIGN KEY (`idNivelFuncionario`) REFERENCES `tbl_nivelfuncionario` (`idNivelFuncionario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=big5;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_funcionario`
--

LOCK TABLES `tbl_funcionario` WRITE;
/*!40000 ALTER TABLE `tbl_funcionario` DISABLE KEYS */;
INSERT INTO `tbl_funcionario` VALUES (13,'Gabriel','de Melo Marcondes','39.471.030-7','500.695.508-24','biel','123',21,1,1),(15,'Eduardo','Rocha','12.501.864-8','124.568.137-52','edu','123',23,2,1),(18,'1111','1111','11111','1111','teste','202cb962ac59075b964b07152d234b70',39,1,1),(19,'Administrador','adm','1','1','admin','admin',23,1,1);
/*!40000 ALTER TABLE `tbl_funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_gastoadicional`
--

DROP TABLE IF EXISTS `tbl_gastoadicional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_gastoadicional` (
  `idGastoAdicional` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `idViagem` int(11) NOT NULL,
  PRIMARY KEY (`idGastoAdicional`),
  KEY `fk_viagem_gastoAdicional_idx` (`idViagem`),
  CONSTRAINT `fk_viagem_gastoAdicional` FOREIGN KEY (`idViagem`) REFERENCES `tbl_viagem` (`idViagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_gastoadicional`
--

LOCK TABLES `tbl_gastoadicional` WRITE;
/*!40000 ALTER TABLE `tbl_gastoadicional` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_gastoadicional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_guiche`
--

DROP TABLE IF EXISTS `tbl_guiche`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_guiche` (
  `idGuiche` int(11) NOT NULL AUTO_INCREMENT,
  `qntVendas` varchar(100) NOT NULL,
  `idPostoRodoviario` int(11) NOT NULL,
  PRIMARY KEY (`idGuiche`),
  KEY `fk_guichePostoRodoviario_idx` (`idPostoRodoviario`),
  CONSTRAINT `fk_guichePostoRodoviario` FOREIGN KEY (`idPostoRodoviario`) REFERENCES `tbl_postorodoviario` (`idPostoRodoviario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_guiche`
--

LOCK TABLES `tbl_guiche` WRITE;
/*!40000 ALTER TABLE `tbl_guiche` DISABLE KEYS */;
INSERT INTO `tbl_guiche` VALUES (1,'50',1),(2,'85',2);
/*!40000 ALTER TABLE `tbl_guiche` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `intervalo` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_item`
--

LOCK TABLES `tbl_item` WRITE;
/*!40000 ALTER TABLE `tbl_item` DISABLE KEYS */;
INSERT INTO `tbl_item` VALUES (1,'Pneu','pnel pirelli',20,1),(2,'Pneu','Pneu',20,1);
/*!40000 ALTER TABLE `tbl_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_manutencao`
--

DROP TABLE IF EXISTS `tbl_manutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_manutencao` (
  `idManutencao` int(11) NOT NULL AUTO_INCREMENT,
  `idOnibus` int(11) NOT NULL,
  `idFichaManutencao` int(11) NOT NULL,
  `idItem` int(11) NOT NULL,
  `quilometragem` int(11) NOT NULL,
  PRIMARY KEY (`idManutencao`),
  KEY `fk_manutencao_onibus_idx` (`idOnibus`),
  KEY `fk_manutencao_ficha_idx` (`idFichaManutencao`),
  KEY `fk_manutencao_item_idx` (`idItem`),
  CONSTRAINT `fk_manutencao_ficha` FOREIGN KEY (`idFichaManutencao`) REFERENCES `tbl_fichamanutencao` (`idFichaManutencao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencao_item` FOREIGN KEY (`idItem`) REFERENCES `tbl_item` (`idItem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_manutencao_onibus` FOREIGN KEY (`idOnibus`) REFERENCES `tbl_onibus` (`idOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_manutencao`
--

LOCK TABLES `tbl_manutencao` WRITE;
/*!40000 ALTER TABLE `tbl_manutencao` DISABLE KEYS */;
INSERT INTO `tbl_manutencao` VALUES (5,1,1,1,10),(6,2,2,2,20);
/*!40000 ALTER TABLE `tbl_manutencao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_maps`
--

DROP TABLE IF EXISTS `tbl_maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_maps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_maps`
--

LOCK TABLES `tbl_maps` WRITE;
/*!40000 ALTER TABLE `tbl_maps` DISABLE KEYS */;
INSERT INTO `tbl_maps` VALUES (1,'Love.Fish','580 Darling Street, Rozelle, NSW',-33.861034,151.171936,'restaurant'),(2,'Young Henrys','76 Wilford Street, Newtown, NSW',-33.898113,151.174469,'bar'),(3,'Hunter Gatherer','Greenwood Plaza, 36 Blue St, North Sydney NSW',-33.840282,151.207474,'bar'),(4,'The Potting Shed','7A, 2 Huntley Street, Alexandria, NSW',-33.910751,151.194168,'bar'),(5,'Nomad','16 Foster Street, Surry Hills, NSW',-33.879917,151.210449,'bar'),(6,'Three Blue Ducks','43 Macpherson Street, Bronte, NSW',-33.906357,151.263763,'restaurant'),(7,'Single Origin Roasters','60-64 Reservoir Street, Surry Hills, NSW',-33.881123,151.209656,'restaurant');
/*!40000 ALTER TABLE `tbl_maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_microonibus`
--

DROP TABLE IF EXISTS `tbl_microonibus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_microonibus` (
  `idMicroOnibus` int(11) NOT NULL,
  `acento` varchar(45) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL,
  `idTipoOnibus` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMicroOnibus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_microonibus`
--

LOCK TABLES `tbl_microonibus` WRITE;
/*!40000 ALTER TABLE `tbl_microonibus` DISABLE KEYS */;
INSERT INTO `tbl_microonibus` VALUES (1,'1',0,1),(2,'2',0,1),(3,'3',0,1),(4,'4',0,1),(5,'5',0,1),(6,'6',0,1),(7,'7',0,1),(8,'8',0,1),(9,'9',0,1),(10,'10',0,1),(11,'11',0,1),(12,'12',0,1),(13,'13',0,1),(14,'14',0,1),(15,'15',0,1),(16,'16',0,1),(17,'17',0,1),(18,'18',0,1),(19,'19',0,1),(20,'20',0,1),(21,'21',0,1),(22,'22',0,1),(23,'23',0,1),(24,'24',0,1),(25,'25',0,1),(26,NULL,NULL,0);
/*!40000 ALTER TABLE `tbl_microonibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_motorista`
--

DROP TABLE IF EXISTS `tbl_motorista`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_motorista` (
  `idMotorista` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobreNome` varchar(75) NOT NULL,
  `dtNasc` date NOT NULL,
  `RG` varchar(12) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `CNH` varchar(11) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `celular` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `idEnd` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idMotorista`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_motorista`
--

LOCK TABLES `tbl_motorista` WRITE;
/*!40000 ALTER TABLE `tbl_motorista` DISABLE KEYS */;
INSERT INTO `tbl_motorista` VALUES (1,'Guizex','Paixex','1990-05-05','12.123.456-8','123.456.789-78','123456','35 4791-7845','35 94545-1035','guizexPaixex@asteroide.com',1,1),(2,'Pedrex','Nunex','2000-12-12','12.456.789-4','123.456.789-12','45546564','11 4002-4512','11 94815-0236','pedrexNunex@asteroide.com',2,1),(3,'Mario','Gansta Broo','1885-10-10','22.460.069-7','321.789.654-20','265367112','88 4142-5027','88 90825-2434','marioGansta@asteroide.com',30,1);
/*!40000 ALTER TABLE `tbl_motorista` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_niveldesktop`
--

DROP TABLE IF EXISTS `tbl_niveldesktop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_niveldesktop` (
  `idNivel` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idNivel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_niveldesktop`
--

LOCK TABLES `tbl_niveldesktop` WRITE;
/*!40000 ALTER TABLE `tbl_niveldesktop` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_niveldesktop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivelfuncionario`
--

DROP TABLE IF EXISTS `tbl_nivelfuncionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_nivelfuncionario` (
  `idNivelFuncionario` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(50) NOT NULL,
  PRIMARY KEY (`idNivelFuncionario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivelfuncionario`
--

LOCK TABLES `tbl_nivelfuncionario` WRITE;
/*!40000 ALTER TABLE `tbl_nivelfuncionario` DISABLE KEYS */;
INSERT INTO `tbl_nivelfuncionario` VALUES (1,'Adiministração'),(2,'Marketing');
/*!40000 ALTER TABLE `tbl_nivelfuncionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_onibus`
--

DROP TABLE IF EXISTS `tbl_onibus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_onibus` (
  `idOnibus` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(8) NOT NULL,
  `idTipoOnibus` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `numFabricacao` varchar(9) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idOnibus`),
  KEY `fk_onibus_tipo_idx` (`idTipoOnibus`),
  CONSTRAINT `fk_onibus_tipoOnibus` FOREIGN KEY (`idTipoOnibus`) REFERENCES `tbl_tipoonibus` (`idTipoOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_onibus`
--

LOCK TABLES `tbl_onibus` WRITE;
/*!40000 ALTER TABLE `tbl_onibus` DISABLE KEYS */;
INSERT INTO `tbl_onibus` VALUES (1,'BCD 1274',1,'Micro Ônibus para viagens de curta distancia.','000456789',1),(2,'ABC 7548',1,'ahisiagvola','000007894',1),(3,'FAM 4512',4,'Nosso melhor Onibus','000004175',1),(8,'AMN 123',3,'Nosso Ônibus Executivo básico','001457215',1),(9,'QKQ 0245',4,'Premium 2 Andares','000728648',1);
/*!40000 ALTER TABLE `tbl_onibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_partida`
--

DROP TABLE IF EXISTS `tbl_partida`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_partida` (
  `idPontoPartida` int(11) NOT NULL AUTO_INCREMENT,
  `idPostoRodoviario` int(11) NOT NULL,
  `nomePonto` varchar(255) NOT NULL,
  PRIMARY KEY (`idPontoPartida`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_partida`
--

LOCK TABLES `tbl_partida` WRITE;
/*!40000 ALTER TABLE `tbl_partida` DISABLE KEYS */;
INSERT INTO `tbl_partida` VALUES (1,1,'Dona Cida Coffe, BR-451'),(2,2,'Venda do Chico, BR-381'),(3,3,'Café com Prosa, BR-343'),(4,6,'Leiteria Nevada, BR-211'),(5,7,'Leite ao Pé da Vaca, BR-040'),(6,8,'Belleu’s Lanches, BR-301'),(7,1,'Ponto Santa Clara'),(8,2,'Bom Jesus Do Parante'),(9,1,'Rancho 53'),(10,2,'Rodoserv Star'),(11,3,'Rancho da Pamonha'),(12,6,'Basílica de Aparecida'),(13,7,'Casa do Bacalhau'),(14,8,'Posto Arco-Íris');
/*!40000 ALTER TABLE `tbl_partida` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_passageiros`
--

DROP TABLE IF EXISTS `tbl_passageiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_passageiros` (
  `idPassageiros` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCompleto` varchar(255) NOT NULL,
  `destino` varchar(255) DEFAULT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idPassageiros`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_passageiros`
--

LOCK TABLES `tbl_passageiros` WRITE;
/*!40000 ALTER TABLE `tbl_passageiros` DISABLE KEYS */;
INSERT INTO `tbl_passageiros` VALUES (3,'TESTE','TESTE','12.123.123-8','testedoEmail@hotmail.com','12 1234-4567','1999-02-02','02:02:00',0),(4,'TESTETESTETaaaaaaaESTE','TESTE','12.123.123-8','testedoEmail@hotmail.com','12 1234-4567','1999-02-02','02:02:00',0),(5,'TESTE','TESTE','12.123.123-8','testedoEmail@hotmail.com','12 1234-4567','1999-02-02','02:02:00',0),(6,'Eduardo Rocha ','São Paulo/ Estados Unidos','12.123.123-8','eduardoEmaill@hotmail.com','70 7070-7070','2018-04-12','17:54:22',0),(7,'Mario Broo Gangsta','Roma/ Bahia','12.123.123-8','rafinhaGatinho@hotmail.com','77 7777-7777','2018-05-05','00:07:11',0);
/*!40000 ALTER TABLE `tbl_passageiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_passagem`
--

DROP TABLE IF EXISTS `tbl_passagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_passagem` (
  `idPassagem` int(11) NOT NULL AUTO_INCREMENT,
  `acento` varchar(2) DEFAULT NULL,
  `voltar` tinyint(1) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idGuiche` int(11) DEFAULT NULL,
  `idPontos_viagem` int(11) DEFAULT NULL,
  `idViagem` int(11) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `vencimento` varchar(45) DEFAULT NULL,
  `dataDocumento` varchar(45) DEFAULT NULL,
  `numeroDocumento` int(11) DEFAULT NULL,
  `agenciaCodBeneficiario` varchar(45) DEFAULT NULL,
  `idMicroOnibus` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPassagem`),
  KEY `fk_pasagemCliente_idx` (`idCliente`),
  KEY `fk_passagemGuiche_idx` (`idGuiche`),
  KEY `fk_passagemViagem_idx` (`idViagem`),
  KEY `fk_passagemPontoParada_idx` (`idPontos_viagem`),
  CONSTRAINT `fk_pasagemCliente` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_passagemGuiche` FOREIGN KEY (`idGuiche`) REFERENCES `tbl_guiche` (`idGuiche`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_passagemPontoParada` FOREIGN KEY (`idPontos_viagem`) REFERENCES `tbl_pontos_viagem` (`idPontos_viagem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_passagemViagem` FOREIGN KEY (`idViagem`) REFERENCES `tbl_viagem` (`idViagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_passagem`
--

LOCK TABLES `tbl_passagem` WRITE;
/*!40000 ALTER TABLE `tbl_passagem` DISABLE KEYS */;
INSERT INTO `tbl_passagem` VALUES (2,'1',1,4,2,2,2,1,'29/05/2018','28/05/2018',12,'2',NULL),(4,'3',NULL,7,NULL,1,1,1,'1',NULL,2,NULL,NULL),(5,'4',NULL,8,NULL,1,2,1,NULL,NULL,3,NULL,NULL),(6,'10',NULL,20,NULL,3,4,1,NULL,NULL,7,NULL,NULL),(7,'11',1,21,NULL,1,4,1,NULL,NULL,5,NULL,NULL),(8,'3',NULL,39,1,1,3,1,NULL,NULL,6,NULL,NULL),(9,'4',NULL,40,NULL,1,1,1,NULL,NULL,7,NULL,NULL),(10,'5',1,42,NULL,1,1,1,NULL,NULL,8,NULL,NULL),(11,'12',NULL,45,NULL,1,10,1,NULL,NULL,9,NULL,NULL),(13,'25',NULL,56,NULL,9,5,1,'29/05/2018','28/05/2018',11,'01245/7842',NULL),(19,'5',NULL,8,NULL,9,5,1,'29/05/2018','28/05/2018',30,'01245/7842',NULL),(20,'25',NULL,8,NULL,9,5,1,'29/05/2018','28/05/2018',28,'1',NULL),(24,'25',NULL,55,NULL,9,5,1,'29/05/2018','28/05/2018',28,'9',NULL),(25,'25',NULL,4,NULL,9,5,1,'29/05/2018','28/05/2018',28,'5',NULL),(30,'25',NULL,8,NULL,9,5,0,'07/06/2018','28/05/2018',28,'9',NULL),(31,'25',NULL,8,NULL,9,5,0,'07/06/2018','28/05/2018',28,'9',NULL),(32,'25',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',28,'5',NULL),(33,'25',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',28,'5',NULL),(34,'1',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',4,'5',NULL),(35,'17',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',20,'5',NULL),(36,'6',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',9,'5',NULL),(37,'10',NULL,4,NULL,10,5,0,'07/06/2018','28/05/2018',13,'5',NULL),(38,'10',NULL,4,NULL,10,5,0,'07/06/2018','28/05/2018',13,'5',NULL),(39,'10',NULL,4,NULL,10,5,0,'07/06/2018','28/05/2018',13,'5',NULL),(40,'10',NULL,4,NULL,10,5,0,'07/06/2018','28/05/2018',13,'5',NULL),(41,'10',NULL,4,NULL,10,5,0,'07/06/2018','28/05/2018',13,'5',NULL),(42,'14',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',17,'5',NULL),(43,'14',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',17,'5',NULL),(44,'12',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',15,'5',NULL),(45,'12',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',15,'5',NULL),(46,'12',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',15,'5',NULL),(47,'12',NULL,4,NULL,9,5,0,'07/06/2018','28/05/2018',15,'5',NULL),(48,'7',NULL,22,NULL,9,5,0,'08/06/2018','29/05/2018',10,'23',NULL),(49,'6',NULL,23,NULL,10,5,0,'11/06/2018','01/06/2018',9,'24',NULL),(50,'6',NULL,23,NULL,10,5,0,'11/06/2018','01/06/2018',9,'24',NULL),(51,'6',NULL,23,NULL,10,5,0,'11/06/2018','01/06/2018',9,'24',NULL),(52,'15',NULL,56,NULL,9,5,0,'15/06/2018','05/06/2018',18,'57',NULL),(53,'4',NULL,56,NULL,10,5,0,'15/06/2018','05/06/2018',7,'57',NULL),(54,'15',NULL,56,NULL,9,5,0,'15/06/2018','05/06/2018',18,'57',NULL),(55,'17',NULL,56,NULL,10,5,0,'16/06/2018','06/06/2018',20,'57',NULL),(56,'17',NULL,56,NULL,3,2,0,'16/06/2018','06/06/2018',20,'57',NULL),(57,'17',NULL,56,NULL,3,2,0,'16/06/2018','06/06/2018',20,'57',NULL),(58,'17',NULL,56,NULL,3,2,0,'16/06/2018','06/06/2018',20,'57',NULL),(59,'17',NULL,56,NULL,3,2,0,'16/06/2018','06/06/2018',20,'57',NULL),(60,'10',NULL,56,NULL,22,11,0,'16/06/2018','06/06/2018',13,'57',NULL),(61,'10',NULL,56,NULL,22,11,0,'16/06/2018','06/06/2018',13,'57',NULL),(62,'10',NULL,56,NULL,22,11,0,'16/06/2018','06/06/2018',13,'57',NULL),(63,'21',NULL,56,NULL,22,11,0,'16/06/2018','06/06/2018',24,'57',NULL),(64,NULL,NULL,57,NULL,22,11,1,'16/06/2018','06/06/2018',28,'510',1),(65,NULL,NULL,57,NULL,22,11,1,'16/06/2018','06/06/2018',20,'60',2);
/*!40000 ALTER TABLE `tbl_passagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pergunta`
--

DROP TABLE IF EXISTS `tbl_pergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pergunta` (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` varchar(200) NOT NULL,
  `idTipoPergunta` int(11) NOT NULL,
  PRIMARY KEY (`idPergunta`),
  KEY `fk_perguntaTipo_idx` (`idTipoPergunta`),
  CONSTRAINT `fk_perguntaTipo` FOREIGN KEY (`idTipoPergunta`) REFERENCES `tbl_tipopergunta` (`idTipoPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pergunta`
--

LOCK TABLES `tbl_pergunta` WRITE;
/*!40000 ALTER TABLE `tbl_pergunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_pergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_perguntaresposta`
--

DROP TABLE IF EXISTS `tbl_perguntaresposta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_perguntaresposta` (
  `idPerguntaResposta` int(11) NOT NULL AUTO_INCREMENT,
  `idPergunta` int(11) NOT NULL,
  `idResposta1` int(11) NOT NULL,
  PRIMARY KEY (`idPerguntaResposta`),
  KEY `fk_perguntaResposta_Pergunta_idx` (`idPergunta`),
  KEY `fk_perguntaResposta_Resposta_idx` (`idResposta1`),
  CONSTRAINT `fk_perguntaResposta_Pergunta` FOREIGN KEY (`idPergunta`) REFERENCES `tbl_pergunta` (`idPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_perguntaResposta_Resposta` FOREIGN KEY (`idResposta1`) REFERENCES `tbl_resposta1` (`idResposta1`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_perguntaresposta`
--

LOCK TABLES `tbl_perguntaresposta` WRITE;
/*!40000 ALTER TABLE `tbl_perguntaresposta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_perguntaresposta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pontoparada`
--

DROP TABLE IF EXISTS `tbl_pontoparada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pontoparada` (
  `idPontoParada` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `statusMotorista` tinyint(1) NOT NULL,
  `idViagem` int(11) NOT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `idCidade` int(11) DEFAULT NULL,
  `idDestino` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPontoParada`),
  KEY `fk_pontoParada_Viagem_idx` (`idViagem`),
  KEY `fk_parada_viagem_idx` (`idDestino`),
  KEY `fk_parada_Cidade_idx` (`idCidade`),
  CONSTRAINT `fk_pontoParada_Viagem` FOREIGN KEY (`idViagem`) REFERENCES `tbl_viagem` (`idViagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pontoparada`
--

LOCK TABLES `tbl_pontoparada` WRITE;
/*!40000 ALTER TABLE `tbl_pontoparada` DISABLE KEYS */;
INSERT INTO `tbl_pontoparada` VALUES (1,'Teste Eduardo',1,1,'100',5,1),(2,'Teste2',1,1,'80',4,1),(3,'Castelo Ponto Alcares  24 ',1,3,'150',15,5);
/*!40000 ALTER TABLE `tbl_pontoparada` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pontos_viagem`
--

DROP TABLE IF EXISTS `tbl_pontos_viagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pontos_viagem` (
  `idPontos_viagem` int(11) NOT NULL AUTO_INCREMENT,
  `idViagem` int(11) NOT NULL,
  `idPontoPartida` int(11) NOT NULL,
  PRIMARY KEY (`idPontos_viagem`),
  KEY `fk_pontos_viagem_idx` (`idViagem`),
  KEY `fk_paradas_viagem_idx` (`idPontoPartida`),
  CONSTRAINT `fk_paradas_viagem` FOREIGN KEY (`idPontoPartida`) REFERENCES `tbl_partida` (`idPontoPartida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pontos_viagem` FOREIGN KEY (`idViagem`) REFERENCES `tbl_viagem` (`idViagem`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pontos_viagem`
--

LOCK TABLES `tbl_pontos_viagem` WRITE;
/*!40000 ALTER TABLE `tbl_pontos_viagem` DISABLE KEYS */;
INSERT INTO `tbl_pontos_viagem` VALUES (1,1,1),(2,1,7),(3,2,2),(4,2,8),(5,3,12),(6,3,8),(7,4,7),(8,4,4),(9,5,3),(10,5,12),(11,6,14),(12,6,5),(13,7,2),(14,7,4),(15,8,7),(16,8,5),(17,9,4),(18,9,1),(19,10,10),(20,10,14),(21,11,14),(22,11,5),(23,12,7),(24,12,8),(25,1,14),(26,13,8),(27,13,4),(28,14,5),(29,14,10);
/*!40000 ALTER TABLE `tbl_pontos_viagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_postorodoviario`
--

DROP TABLE IF EXISTS `tbl_postorodoviario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_postorodoviario` (
  `idPostoRodoviario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(80) NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  PRIMARY KEY (`idPostoRodoviario`),
  KEY `fk_postoEndereco_idx` (`idEndereco`),
  CONSTRAINT `fk_postoEndereco` FOREIGN KEY (`idEndereco`) REFERENCES `tbl_endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_postorodoviario`
--

LOCK TABLES `tbl_postorodoviario` WRITE;
/*!40000 ALTER TABLE `tbl_postorodoviario` DISABLE KEYS */;
INSERT INTO `tbl_postorodoviario` VALUES (1,'Tiete',65,'11 4002-893'),(2,'João Barreto 2',1,'11 4707-2731'),(3,'Terminal Barra Funda',30,'11 4705-2115'),(6,'São Jose Viagens',36,'11 4745-2115'),(7,'Ipiranga',37,'11 4745-2115'),(8,'Expresso Sul',38,'11 4745-2115');
/*!40000 ALTER TABLE `tbl_postorodoviario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_primeira_teste`
--

DROP TABLE IF EXISTS `tbl_primeira_teste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_primeira_teste` (
  `idtbl_primeira_teste` int(11) NOT NULL AUTO_INCREMENT,
  `textoComum` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtbl_primeira_teste`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_primeira_teste`
--

LOCK TABLES `tbl_primeira_teste` WRITE;
/*!40000 ALTER TABLE `tbl_primeira_teste` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_primeira_teste` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resposta1`
--

DROP TABLE IF EXISTS `tbl_resposta1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resposta1` (
  `idResposta1` int(11) NOT NULL AUTO_INCREMENT,
  `resposta` varchar(255) NOT NULL,
  `idTipoPergunta` int(11) NOT NULL,
  PRIMARY KEY (`idResposta1`),
  KEY `fk_resposta1Tipo_idx` (`idTipoPergunta`),
  CONSTRAINT `fk_resposta1Tipo` FOREIGN KEY (`idTipoPergunta`) REFERENCES `tbl_tipopergunta` (`idTipoPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resposta1`
--

LOCK TABLES `tbl_resposta1` WRITE;
/*!40000 ALTER TABLE `tbl_resposta1` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resposta1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resposta1resposta2`
--

DROP TABLE IF EXISTS `tbl_resposta1resposta2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resposta1resposta2` (
  `idResposta1Resposta2` int(11) NOT NULL AUTO_INCREMENT,
  `idResposta1` int(11) NOT NULL,
  `idResposta2` int(11) NOT NULL,
  PRIMARY KEY (`idResposta1Resposta2`),
  KEY `fk_respostaResposta_resposta1_idx` (`idResposta1`),
  KEY `fk_respostaResposta_resposta2_idx` (`idResposta2`),
  CONSTRAINT `fk_respostaResposta_resposta1` FOREIGN KEY (`idResposta1`) REFERENCES `tbl_resposta1` (`idResposta1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_respostaResposta_resposta2` FOREIGN KEY (`idResposta2`) REFERENCES `tbl_resposta2` (`idResposta2`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resposta1resposta2`
--

LOCK TABLES `tbl_resposta1resposta2` WRITE;
/*!40000 ALTER TABLE `tbl_resposta1resposta2` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resposta1resposta2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resposta2`
--

DROP TABLE IF EXISTS `tbl_resposta2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_resposta2` (
  `idResposta2` int(11) NOT NULL AUTO_INCREMENT,
  `resposta1` varchar(255) NOT NULL,
  `idTipoPergunta` int(11) NOT NULL,
  PRIMARY KEY (`idResposta2`),
  KEY `fk_resposta2Tipo_idx` (`idTipoPergunta`),
  CONSTRAINT `fk_resposta2Tipo` FOREIGN KEY (`idTipoPergunta`) REFERENCES `tbl_tipopergunta` (`idTipoPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resposta2`
--

LOCK TABLES `tbl_resposta2` WRITE;
/*!40000 ALTER TABLE `tbl_resposta2` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resposta2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_subpassageiros`
--

DROP TABLE IF EXISTS `tbl_subpassageiros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_subpassageiros` (
  `idSubPassageiros` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `documento` varchar(30) NOT NULL,
  PRIMARY KEY (`idSubPassageiros`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_subpassageiros`
--

LOCK TABLES `tbl_subpassageiros` WRITE;
/*!40000 ALTER TABLE `tbl_subpassageiros` DISABLE KEYS */;
INSERT INTO `tbl_subpassageiros` VALUES (1,'ergergh','edhgerghehge','erhtreth'),(2,'sreghreth','rdshtrdht','rehtsreht');
/*!40000 ALTER TABLE `tbl_subpassageiros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sugestao`
--

DROP TABLE IF EXISTS `tbl_sugestao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_sugestao` (
  `idSugestao` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`idSugestao`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sugestao`
--

LOCK TABLES `tbl_sugestao` WRITE;
/*!40000 ALTER TABLE `tbl_sugestao` DISABLE KEYS */;
INSERT INTO `tbl_sugestao` VALUES (1,'',''),(2,'',''),(3,'teste2@asteroide.com','qwfqwefqwefe'),(4,'jhjhj@fgfgfg.com','hjhjhj'),(5,'jhjhj@fgfgfg.com','hjhjhj'),(6,'jvsjcvsj@gmail.com','dsfsfffffddfdfdsafdsgdfgf'),(7,'',''),(8,'','');
/*!40000 ALTER TABLE `tbl_sugestao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipoacao`
--

DROP TABLE IF EXISTS `tbl_tipoacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipoacao` (
  `idTipoAcao` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoAcao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipoacao`
--

LOCK TABLES `tbl_tipoacao` WRITE;
/*!40000 ALTER TABLE `tbl_tipoacao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipoacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipoendereco`
--

DROP TABLE IF EXISTS `tbl_tipoendereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipoendereco` (
  `idTipoEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`idTipoEndereco`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipoendereco`
--

LOCK TABLES `tbl_tipoendereco` WRITE;
/*!40000 ALTER TABLE `tbl_tipoendereco` DISABLE KEYS */;
INSERT INTO `tbl_tipoendereco` VALUES (1,'residencial'),(2,'comercial');
/*!40000 ALTER TABLE `tbl_tipoendereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipoonibus`
--

DROP TABLE IF EXISTS `tbl_tipoonibus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipoonibus` (
  `idTipoOnibus` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  `qntLugares` varchar(2) NOT NULL,
  `andares` int(11) NOT NULL,
  PRIMARY KEY (`idTipoOnibus`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipoonibus`
--

LOCK TABLES `tbl_tipoonibus` WRITE;
/*!40000 ALTER TABLE `tbl_tipoonibus` DISABLE KEYS */;
INSERT INTO `tbl_tipoonibus` VALUES (1,'Micro ônibus','25',1),(2,'Tradicional','50',1),(3,'Executivo Básico','50',1),(4,'Executivo Premium','90',2);
/*!40000 ALTER TABLE `tbl_tipoonibus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipopergunta`
--

DROP TABLE IF EXISTS `tbl_tipopergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tipopergunta` (
  `idTipoPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) NOT NULL,
  PRIMARY KEY (`idTipoPergunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipopergunta`
--

LOCK TABLES `tbl_tipopergunta` WRITE;
/*!40000 ALTER TABLE `tbl_tipopergunta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipopergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuariodesktop`
--

DROP TABLE IF EXISTS `tbl_usuariodesktop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuariodesktop` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `email` varchar(80) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `fk_niveldesktop_idx` (`nivel`),
  CONSTRAINT `fk_niveldesktop` FOREIGN KEY (`nivel`) REFERENCES `tbl_niveldesktop` (`idNivel`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuariodesktop`
--

LOCK TABLES `tbl_usuariodesktop` WRITE;
/*!40000 ALTER TABLE `tbl_usuariodesktop` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_usuariodesktop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_viagem`
--

DROP TABLE IF EXISTS `tbl_viagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_viagem` (
  `idViagem` int(11) NOT NULL AUTO_INCREMENT,
  `dtPartida` date NOT NULL,
  `hrPartida` time NOT NULL,
  `hrChegada` time NOT NULL,
  `hrChegadaReal` time DEFAULT NULL,
  `descricao` varchar(255) NOT NULL,
  `tamanhoRota` decimal(10,0) DEFAULT NULL,
  `idPontoPartida` int(11) NOT NULL,
  `idPontoChegada` int(11) NOT NULL,
  `idOnibus` int(11) NOT NULL,
  `idMotorista` int(11) NOT NULL,
  `idEpoca` int(11) NOT NULL,
  `finalizada` tinyint(1) NOT NULL,
  `imagem1` varchar(255) DEFAULT NULL,
  `imagem2` varchar(255) DEFAULT NULL,
  `codCidade` int(11) DEFAULT NULL,
  `idDestino` int(11) DEFAULT NULL,
  `valor` decimal(5,2) NOT NULL,
  PRIMARY KEY (`idViagem`),
  KEY `fk_viagemPartida_idx` (`idPontoPartida`),
  KEY `fk_viagemChegada_idx` (`idPontoChegada`),
  KEY `fk_viagem_onibus_idx` (`idOnibus`),
  KEY `fk_viagem_motorista_idx` (`idMotorista`),
  KEY `fk_viagem_epoca_idx` (`idEpoca`),
  KEY `fk_viagem_cidade_idx` (`codCidade`),
  KEY `fk_viagem_cidade_destino_idx` (`idDestino`),
  CONSTRAINT `fk_viagemChegada` FOREIGN KEY (`idPontoChegada`) REFERENCES `tbl_chegada` (`idPontoChegada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagemPartida` FOREIGN KEY (`idPontoPartida`) REFERENCES `tbl_partida` (`idPontoPartida`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_cidade_destino` FOREIGN KEY (`idDestino`) REFERENCES `tbl_cidade` (`codCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_cidade_origem` FOREIGN KEY (`codCidade`) REFERENCES `tbl_cidade` (`codCidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_epoca` FOREIGN KEY (`idEpoca`) REFERENCES `tbl_epoca` (`idEpoca`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_motorista` FOREIGN KEY (`idMotorista`) REFERENCES `tbl_motorista` (`idMotorista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_viagem_onibus` FOREIGN KEY (`idOnibus`) REFERENCES `tbl_onibus` (`idOnibus`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_viagem`
--

LOCK TABLES `tbl_viagem` WRITE;
/*!40000 ALTER TABLE `tbl_viagem` DISABLE KEYS */;
INSERT INTO `tbl_viagem` VALUES (1,'2018-05-05','10:25:01','12:30:00','22:40:10','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',15,1,1,1,1,1,0,'imagens/viagem_es.jpg','imagens/viagem_sc.jpg',1,2,75.00),(2,'2014-05-05','22:20:01','23:55:30','00:00:05','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',23,2,2,2,2,2,0,'imagens/spp.jpg','imagens/viagem_sc.jpg',2,3,80.00),(3,'2010-01-01','10:25:01','09:55:00','10:02:20','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',231,1,1,1,2,3,0,'imagens/viagem_es.jpg','imagens/spp.jpg',15,3,83.00),(4,'2017-02-02','22:30:02','00:30:00','14:22:00','Viagem para bahamas no boing 777 classe A',577,3,3,3,3,4,0,'imagens/spp.jpg','imagens/viagem_sc.jpg',4,15,123.00),(5,'2018-05-10','11:12:00','03:03:00','15:40:05','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',312,1,1,1,1,1,0,'imagens/viagem_es.jpg','imagens/spp.jpg',2,34,132.45),(6,'2018-05-29','01:31:00','05:30:55','08:10:00','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',112,2,3,3,1,3,0,'imagens/rio.jpg','imagens/spp.jpg',2,4,123.58),(7,'2018-05-29','01:31:00','19:03:00','20:00:02','Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',112,2,3,3,1,3,0,'imagens/rio.jpg','imagens/spp.jpg',2,4,123.58),(8,'2018-05-16','22:22:00','23:23:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',121,1,1,9,1,4,0,'imagens/viagem_sc.jpg','imagens/viagem_sp_centro.jpg',6,17,121.00),(9,'2018-07-18','22:22:00','23:23:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',123,2,2,3,1,2,0,'imagens/viagem_sp_centro.jpg','imagens/viagem_sc.jpg',23,32,21.00),(10,'2018-05-09','05:55:00','07:44:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',80,3,2,8,1,1,0,'imagens/viagem_sp_centro.jpg','imagens/viagem_es.jpg',19,26,90.00),(11,'2018-05-09','05:55:00','10:35:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',255,3,3,9,3,2,0,'imagens/spp.jpg','imagens/viagem_sp_centro.jpg',25,31,155.54),(12,'2018-05-09','05:55:00','10:35:00','20:00:02','Viagem para bahamas no boing 777 classe A',255,3,3,9,3,3,0,'imagens/viagem_sp_centro.jpg','imagens/rio.jpg',23,31,100.00),(13,'2018-05-21','03:45:00','23:56:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',2500,1,1,1,1,4,0,'imagens/viagem_es.jpg','imagens/viagem_sp_centro.jpg',25,6,28.00),(14,'2018-05-09','22:22:00','23:23:00',NULL,'Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado.',451,2,2,8,1,2,0,'imagens/spp.jpg','imagens/viagem_es.jpg',19,23,451.45);
/*!40000 ALTER TABLE `tbl_viagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `viagens_view`
--

DROP TABLE IF EXISTS `viagens_view`;
/*!50001 DROP VIEW IF EXISTS `viagens_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `viagens_view` AS SELECT 
 1 AS `idViagem`,
 1 AS `Destino`,
 1 AS `primairaImagem`,
 1 AS `segundaImagem`,
 1 AS `descricao`,
 1 AS `dtPartida`,
 1 AS `hrPartida`,
 1 AS `hrChegada`,
 1 AS `numeroOnibus`,
 1 AS `placa`,
 1 AS `acentosOnibus`,
 1 AS `tipo`,
 1 AS `idTipoOnibus`,
 1 AS `hrChegadaReal`,
 1 AS `valor`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `acentosusados_view`
--

/*!50001 DROP VIEW IF EXISTS `acentosusados_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `acentosusados_view` AS select `passagem`.`acento` AS `acentoOcupado`,`passagem`.`idViagem` AS `idViagem`,`passagem`.`ativo` AS `ativo`,`viagem`.`idDestino` AS `idDestino` from (`tbl_passagem` `passagem` join `tbl_viagem` `viagem`) where ((`passagem`.`idViagem` = `viagem`.`idViagem`) and (`passagem`.`idViagem` <> 0)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `comprapassagem_view`
--

/*!50001 DROP VIEW IF EXISTS `comprapassagem_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `comprapassagem_view` AS select `pass`.`idPassagem` AS `idPassagem`,`v`.`idOnibus` AS `idOnibus`,`pass`.`acento` AS `acento`,`oni`.`idTipoOnibus` AS `idTipoOnibus`,`tip`.`tipo` AS `tipo`,`tip`.`qntLugares` AS `qntLugares` from (((`tbl_passagem` `pass` join `tbl_viagem` `v`) join `tbl_onibus` `oni`) join `tbl_tipoonibus` `tip`) where ((`pass`.`idViagem` = `v`.`idViagem`) and (`v`.`idOnibus` = `oni`.`idOnibus`) and (`oni`.`idTipoOnibus` = `tip`.`idTipoOnibus`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `destinos_view`
--

/*!50001 DROP VIEW IF EXISTS `destinos_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `destinos_view` AS select `c`.`idViagem` AS `idViagem`,`cid`.`nomeCidade` AS `origem`,`dest`.`nomeCidade` AS `destino`,`c`.`imagem1` AS `primairaImagem`,`c`.`imagem2` AS `segundaImagem`,`c`.`dtPartida` AS `dtPartida`,`c`.`hrPartida` AS `hrPartida`,`c`.`tamanhoRota` AS `tamanhoRota`,`c`.`idPontoPartida` AS `idPontoPartida`,`c`.`idPontoChegada` AS `idPontoChegada`,`c`.`codCidade` AS `codCidade`,`c`.`idDestino` AS `idDestino`,`c`.`idOnibus` AS `idOnibus`,`moto`.`idMotorista` AS `idMotorista`,`moto`.`nome` AS `nomeMotorista`,`c`.`hrChegada` AS `hrChegada`,`c`.`descricao` AS `descricao`,`c`.`idEpoca` AS `idEpoca`,`c`.`valor` AS `valor` from (((`tbl_viagem` `c` join `tbl_cidade` `cid`) join `tbl_cidade` `dest`) join `tbl_motorista` `moto`) where ((`c`.`codCidade` = `cid`.`codCidade`) and (`c`.`idDestino` = `dest`.`codCidade`) and (`c`.`idMotorista` = `moto`.`idMotorista`)) order by `c`.`idDestino` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `informacoesboleto_view`
--

/*!50001 DROP VIEW IF EXISTS `informacoesboleto_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `informacoesboleto_view` AS select `pass`.`idCliente` AS `idCliente`,`pass`.`vencimento` AS `vencimento`,`vig`.`valor` AS `valor`,`pass`.`dataDocumento` AS `dataDocumento`,`pass`.`numeroDocumento` AS `numeroDocumento`,`pass`.`agenciaCodBeneficiario` AS `agenciaCodBeneficiario`,concat_ws(' ',`cli`.`nome`,`cli`.`sobrenome`) AS `nomeCompleto`,`cli`.`cpf` AS `cpf` from ((`tbl_passagem` `pass` join `tbl_cliente` `cli`) join `tbl_viagem` `vig`) where ((`pass`.`idCliente` = `cli`.`idCliente`) and (`pass`.`idViagem` = `vig`.`idViagem`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `manutencao_view`
--

/*!50001 DROP VIEW IF EXISTS `manutencao_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `manutencao_view` AS select `o`.`tipo` AS `TipoOnibus`,`p`.`placa` AS `placa`,`i`.`abertura` AS `abertura`,`i`.`fechamento` AS `fechamento`,`m`.`quilometragem` AS `quilometragem`,`i`.`item` AS `item` from (((`tbl_onibus` `p` join `tbl_tipoonibus` `o` on((`p`.`idTipoOnibus` = `o`.`idTipoOnibus`))) join `tbl_manutencao` `m` on((`m`.`idOnibus` = `p`.`idOnibus`))) join `tbl_fichamanutencao` `i` on((`i`.`idOnibus` = `p`.`idOnibus`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `passageiros_view`
--

/*!50001 DROP VIEW IF EXISTS `passageiros_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `passageiros_view` AS select `a`.`idPassagem` AS `idPassagem`,concat_ws(' ',`cli`.`nome`,`cli`.`sobrenome`) AS `nomeCompleto`,concat_ws(' / ',`c`.`nomeCidade`,`a11`.`nomeCidade`) AS `Destino`,`cli`.`email` AS `email`,`v`.`dtPartida` AS `dtPartida`,left(`v`.`hrPartida`,8) AS `hrPartida`,`a`.`ativo` AS `ativo` from ((((`tbl_passagem` `a` join `tbl_viagem` `v`) join `tbl_cidade` `c`) join `tbl_cidade` `a11`) join `tbl_cliente` `cli`) where ((`a`.`idViagem` = `v`.`idViagem`) and (`a`.`idCliente` = `cli`.`idCliente`) and (`v`.`idDestino` = `a11`.`codCidade`) and (`v`.`codCidade` = `c`.`codCidade`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `passagem_view`
--

/*!50001 DROP VIEW IF EXISTS `passagem_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `passagem_view` AS select `v`.`idViagem` AS `idViagem`,concat_ws(' / ',`cid`.`nomeCidade`,`des`.`nomeCidade`) AS `destinos`,`v`.`dtPartida` AS `dataEmbarque`,left(`v`.`hrPartida`,8) AS `horaEmbarque`,`tos`.`tipo` AS `tipoOnibus`,`pass`.`idPassagem` AS `idPassagem`,`pass`.`idCliente` AS `idCliente`,concat_ws(' ',`cli`.`nome`,`cli`.`sobrenome`) AS `nomeCompleto`,`cli`.`rg` AS `rg`,`cli`.`telefone` AS `telefone`,`cli`.`email` AS `email` from ((((((`tbl_viagem` `v` join `tbl_onibus` `o` on((`v`.`idOnibus` = `o`.`idOnibus`))) join `tbl_tipoonibus` `tos` on((`o`.`idTipoOnibus` = `tos`.`idTipoOnibus`))) join `tbl_cidade` `cid` on((`v`.`codCidade` = `cid`.`codCidade`))) join `tbl_cidade` `des` on((`v`.`idDestino` = `des`.`codCidade`))) join `tbl_passagem` `pass`) join `tbl_cliente` `cli`) where ((`pass`.`idViagem` = `v`.`idViagem`) and (`pass`.`idCliente` = `cli`.`idCliente`)) order by `v`.`dtPartida` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `perfilusuario_view`
--

/*!50001 DROP VIEW IF EXISTS `perfilusuario_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `perfilusuario_view` AS select `cli`.`idCliente` AS `idCliente`,`cli`.`nome` AS `nome`,`cli`.`sobrenome` AS `sobrenome`,`cli`.`dt_nasc` AS `dt_nasc`,`cli`.`cpf` AS `cpf`,`cli`.`rg` AS `rg`,`cli`.`sexo` AS `sexo`,`cli`.`celular` AS `celular`,`cli`.`telefone` AS `telefone`,`cli`.`email` AS `email`,`ender`.`bairro` AS `bairro`,`ender`.`logradouro` AS `logradouro`,`ender`.`cep` AS `cep`,`ender`.`numero` AS `numero`,`cid`.`nomeCidade` AS `nomeCidade`,`est`.`nomeEstado` AS `nomeEstado`,`est`.`sigla` AS `sigla` from (((`tbl_cliente` `cli` join `tbl_endereco` `ender`) join `tbl_cidade` `cid`) join `tbl_estado` `est`) where ((`cli`.`idEndereco` = `ender`.`idEndereco`) and (`ender`.`codCidade` = `cid`.`codCidade`) and (`cid`.`codEstado` = `est`.`codEstado`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pontosparadas_view`
--

/*!50001 DROP VIEW IF EXISTS `pontosparadas_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pontosparadas_view` AS select `ptv`.`idPontos_viagem` AS `idPontos_viagem`,`part`.`nomePonto` AS `nomePonto`,`vg`.`idViagem` AS `idViagem`,`ptv`.`idPontoPartida` AS `idPontoPartida` from ((`tbl_pontos_viagem` `ptv` join `tbl_viagem` `vg`) join `tbl_partida` `part`) where ((`ptv`.`idViagem` = `vg`.`idViagem`) and (`ptv`.`idPontoPartida` = `part`.`idPontoPartida`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `selectpassagens_view`
--

/*!50001 DROP VIEW IF EXISTS `selectpassagens_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `selectpassagens_view` AS select `pass`.`idPassagem` AS `idPassagem`,time_format(`vig`.`hrPartida`,'%H:%i') AS `hrPartida`,date_format(`vig`.`dtPartida`,'%d/%m/%Y') AS `dtPartida`,concat_ws('/',`cid`.`nomeCidade`,`cid1`.`nomeCidade`) AS `destino`,`vig`.`valor` AS `valor`,`pass`.`ativo` AS `ativo`,`pass`.`idCliente` AS `idCliente`,`pass`.`numeroDocumento` AS `numeroDocumento` from (((`tbl_passagem` `pass` join `tbl_viagem` `vig`) join `tbl_cidade` `cid`) join `tbl_cidade` `cid1`) where ((`pass`.`idViagem` = `vig`.`idViagem`) and (`vig`.`codCidade` = `cid`.`codCidade`) and (`vig`.`idDestino` = `cid1`.`codCidade`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `viagens_view`
--

/*!50001 DROP VIEW IF EXISTS `viagens_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `viagens_view` AS select `c`.`idViagem` AS `idViagem`,concat_ws(' > ',`cid`.`nomeCidade`,`dest`.`nomeCidade`) AS `Destino`,`c`.`imagem1` AS `primairaImagem`,`c`.`imagem2` AS `segundaImagem`,`c`.`descricao` AS `descricao`,date_format(`c`.`dtPartida`,'%d/%m/%y') AS `dtPartida`,time_format(`c`.`hrPartida`,'%H:%i') AS `hrPartida`,time_format(`c`.`hrChegada`,'%H:%i') AS `hrChegada`,`o`.`idOnibus` AS `numeroOnibus`,`o`.`placa` AS `placa`,`tip`.`qntLugares` AS `acentosOnibus`,`tip`.`tipo` AS `tipo`,`tip`.`idTipoOnibus` AS `idTipoOnibus`,`c`.`hrChegadaReal` AS `hrChegadaReal`,`c`.`valor` AS `valor` from ((((`tbl_viagem` `c` join `tbl_cidade` `cid`) join `tbl_cidade` `dest`) join `tbl_onibus` `o`) join `tbl_tipoonibus` `tip`) where ((`c`.`codCidade` = `cid`.`codCidade`) and (`c`.`idDestino` = `dest`.`codCidade`) and (`c`.`idOnibus` = `o`.`idOnibus`) and (`o`.`idTipoOnibus` = `tip`.`idTipoOnibus`)) order by `c`.`idDestino` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-10 22:29:41
