-- MySQL dump 10.13  Distrib 5.5.9, for osx10.4 (i386)
--
-- Host: localhost    Database: guia_maestra_desa
-- ------------------------------------------------------
-- Server version	5.5.9

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
-- Table structure for table `subcategoria`
--

DROP TABLE IF EXISTS `subcategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subcategoria` (
  `IdSubCategoria` int(11) NOT NULL,
  `IdCategoria` int(11) DEFAULT NULL,
  `NombreSubCategoria` varchar(150) DEFAULT NULL,
  `PagInicio` int(11) DEFAULT NULL,
  `PagFin` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdSubCategoria`),
  KEY `fkCategoria` (`IdCategoria`),
  CONSTRAINT `fkCategoria` FOREIGN KEY (`IdCategoria`) REFERENCES `categorias` (`IdCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategoria`
--

LOCK TABLES `subcategoria` WRITE;
/*!40000 ALTER TABLE `subcategoria` DISABLE KEYS */;
INSERT INTO `subcategoria` VALUES (1,1,'Morteros Técnicos',2,9),(2,1,'Ladrillos',10,11),(3,1,'Bloques/Pastelones de Hormigón',12,13),(4,1,'Aditivos Topex',14,15),(5,1,'Aditivos Sika',16,18),(6,1,'Microcementos',19,19),(7,1,'Aditivos Impermeabilizantes',20,21),(8,1,'Membrana Asfálticas',22,23),(9,1,'Pilares / Mallas / Cadenas',24,25),(10,1,'Perfiles',26,29),(11,1,'Fierros',30,30),(12,1,'Cañererías',31,31),(13,1,'Aislantes',32,33),(14,1,'Metalcon',34,34),(15,1,'Yeso-Cartón',35,37),(16,1,'Alambres Galvanizados / Cercas / Púas',38,43),(17,1,'Planchas',44,49),(18,1,'Tejas',50,57),(19,1,'Escaleras',58,61),(20,2,'Pino Dimensionado',62,66),(21,2,'Pino Dimensionado Seco y Cepillado',67,67),(22,2,'Maderas Elaboradas',68,69),(23,2,'Vigas de Pino y Pino Oregón',70,70),(24,2,'Polín impregnado',71,71),(25,2,'Placas Aglomeradas',72,73),(26,2,'Aglomerado Delgado Desnudo',74,74),(27,2,'Melaminas',75,76),(28,2,'Hardboard',77,79),(29,2,'Terciados',80,81),(30,2,'Madera Lista',82,83),(31,3,'Puertas de Interior',84,88),(32,3,'Puertas de Pino',89,91),(33,3,'Puertas de Acceso',92,95),(34,3,'Puertas de Interior Vidreadas',96,99),(35,3,'Puertas de Clóset',100,102),(36,3,'Marcos / Puertas de Seguridad para Niños',103,104),(37,3,'Puertas de Aluminio',105,106),(38,3,'Ventanas de Aluminio y Madera',107,108),(39,3,'Ventanas para Techo / Ventanas para Ventilación',109,111),(40,3,'Ventanas de PVC',112,112),(41,3,'Escala Entretecho / Balaustro',113,114),(42,3,'Molduras y Cornizas',115,117),(43,3,'Bloques de Vidrio',118,119),(44,4,'Cerraduras Tubulares',120,124),(45,4,'Cerraduras de Embutir',125,125),(46,4,'Cerrojos',126,126),(47,4,'Cerraduras de Sobreponer Macánicas',127,129),(48,4,'Cerraduras de Sobreponer Eléctricas',130,131),(49,4,'Candados',132,133),(50,4,'Decorados / Cables / Accesorios',134,135),(51,4,'Portones Automáticos / Accesorios',136,136),(52,4,'Protecciones de Muros',137,137),(53,4,'Quincallería',138,141),(54,5,'Porcelanatos',142,148),(55,5,'Piedras',149,151),(56,5,'Cerámicas',152,171),(57,5,'Listeles de Vidrio',172,172),(58,5,'Listeles',173,175),(59,5,'Tacos',176,176),(60,5,'Números / Accesorios',177,177),(61,5,'Herramientas para Cerámica',178,180),(62,5,'Pisos Vinílicos',181,181),(63,5,'Pisos Laminados',182,184),(64,5,'Pisos de Madera / Espuma Niveladora / Aislantes Acústico',185,185),(65,5,'Alfombras',186,187),(66,5,'Cubrepisos Muro a Muro / Pasto Sintético',188,188),(67,5,'Adhesivos',189,195),(68,5,'Siliconas / Sellantes',196,199),(69,6,'Látex',200,204),(70,6,'Esmaltes al agua',205,208),(71,6,'Pasta muro',209,211),(72,6,'Texturas',212,213),(73,6,'Sellantes',214,214),(74,6,'Bloqueadores de humedad',215,215),(75,6,'Impermeabilizantes',216,217),(76,6,'Barnices marinos / Impregnantes',218,225),(77,6,'Lacas / Selladores',226,226),(78,6,'Óleos / Esmaltes sintéticos / Pintura techo / Anticorrosivo',227,230),(79,6,'Pintura piscinas / Sprays',231,235),(80,6,'Accesorios pinturas',236,249),(81,7,'Taladros',250,255),(82,7,'Taladros Inalámbricos',256,257),(83,7,'Accesorios',258,259),(84,7,'Rotomartillo',260,261),(85,7,'Esmeril angular',262,264),(86,7,'Discos diamantados / Abrasivos',265,265),(87,7,'Sierra circular',266,267),(88,7,'Sierra caladora',268,271),(89,7,'Lijadoras',272,274),(90,7,'Sierra ingleteadora',275,275),(91,7,'Trozadora de perfiles',276,276),(92,7,'Cepillo de banco / Torno para madera',277,277),(93,7,'Mesa de sierra',278,279),(94,7,'Soldadoras',280,281),(95,7,'Generadores',282,283),(96,7,'Compresores',284,285),(97,7,'Atornilladores',286,287),(98,7,'Herramientas para la construcción',288,315),(99,8,'Grifería',316,347),(100,8,'WC One Piece / Conjuntos WC',348,351),(101,8,'Bidet / Urinarios / Sala de baño',352,353),(102,8,'Pedestal / Conjunto lavatorio pedestal',354,355),(103,8,'Kit vanitorio',356,357),(104,8,'Vanitorios',358,359),(105,8,'Asientos WC',360,361),(106,8,'Tinas / Mamparas / Shower con receptáculo',362,367),(107,8,'Columnas de hidromasajes / juegos de ducha',368,370),(108,8,'Línea de accesorios de baño',371,375),(109,8,'Lavaplatos',376,378),(110,8,'Muebles de baño / Cocina',379,385),(111,8,'Lavaderos',386,387),(112,8,'Calefones',388,393),(113,8,'Termos eléctricos',394,395),(114,9,'Accesorios y herramientas eléctricas',396,399),(115,9,'Alargadores',400,401),(116,9,'Enchufes',402,404),(117,9,'Adaptadores',405,405),(118,9,'Interruptores / Tableros / Calotas / Cintas eléctricas',406,411),(119,9,'Cables / Conductores eléctricos',412,418),(120,9,'Molduras / Cajas distribución / Accesorios',419,423),(121,9,'Placas / Programadores eléctricos',424,436),(122,9,'Reflectores halógenos / LED',437,440),(123,9,'Equipos de alta eficiencia',441,441),(124,9,'Equipos estanco',442,442),(125,9,'Canoas fluorecentes',443,443),(126,9,'Equipos de emergencia',444,446),(127,9,'Focos embutidos',447,447),(128,9,'Ampolletas halógenas / LED',448,448),(129,9,'Ampolletas ahorro de energía',449,449),(130,10,'Timbres / Porteros eléctricos',450,453),(131,10,'Alarmas GMS / Cámaras IP',454,455),(132,10,'Teléfonos',456,457),(133,10,'Kit de radios',458,459),(134,10,'Linterna',460,463),(135,11,'Cañerías de cobre / Fitting',464,474),(136,11,'Tuberías y fitting de PEX, C-PVC y Polietineno Random',475,485),(137,11,'Herramientas y accesorios para gasfitería',486,489),(138,11,'Llaves de paso para gas / Flexibles para gas / Ductos y accesorios para calefón',490,497),(139,11,'Llaves / Válvulas y flexible para agua',498,506),(140,11,'Tubos y fitting de PVC / Adhesivos',507,515),(141,11,'Rejillas / Piletas sanitarias',516,518),(142,11,'Válvulas de admisión / Descarga',519,521),(143,11,'Reparación WC / Pernos / Manillas / Sellos / Collarín / Kit fijación',522,525),(144,11,'Desagües lavatorio / Sifones / Tapones',526,532),(145,11,'Drenaje mecánico',533,533),(146,11,'Drenaje químico / Biológico',534,535),(147,11,'Bombas periféricas / Centrífugas / Sumergibles',536,539),(148,11,'Motobombas / Estanques / Controladores',540,541),(149,11,'Filtros de agua',542,545),(150,11,'Bomba para piscina',546,547),(151,11,'Boquillas / Aspersores',548,552),(152,11,'Programadores de riego / Válvulas / Cajas para válvulas / Microtubos',553,557),(153,11,'Fosas sépticas / Estanques',558,561),(154,11,'Tapas para cámaras / Rejillas',562,563),(155,12,'Clavos',564,567),(156,12,'Fijaciones',568,572),(157,12,'Tornillos yeso cartón punta broca',573,573),(158,12,'Tornillo yeso cartón punta fina',574,574),(159,12,'Tornillo autoperforante',575,575),(160,12,'Roscalata / Pernos / Tuercas / Tarugos',576,577),(161,12,'Conectores y soportes estructurales',578,578),(162,12,'Cuerdas',579,579),(163,12,'Eslinga / Grilletes lira',580,580),(164,12,'Cintas / Poliestileno / Cajas de cartón / Cartón',581,581),(165,13,'Calzado de seguridad',582,587),(166,13,'Ropa de seguridad',588,589),(167,13,'Guantes de seguridad',590,591),(168,13,'Protección de ojos, cabeza, facial, respiratoria y auditiva',592,595),(169,13,'Protección para soldar',596,596),(170,13,'Accesorios de seguridad',597,597);
/*!40000 ALTER TABLE `subcategoria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-17 10:00:24
