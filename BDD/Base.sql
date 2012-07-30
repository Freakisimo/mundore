/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : mundore

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2012-07-17 07:28:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ganadores`
-- ----------------------------
DROP TABLE IF EXISTS `ganadores`;
CREATE TABLE `ganadores` (
`id_ganadores`  int(11) NOT NULL AUTO_INCREMENT ,
`grupo_id`  int(11) NOT NULL ,
`nombre`  varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`puesto`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`ciudad`  varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`estado`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`fecha_ingreso`  date NOT NULL ,
`fecha_nacimiento`  date NOT NULL ,
`domicilio`  varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`imagen`  varchar(110) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id_ganadores`, `grupo_id`),
FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of ganadores
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `grupo`
-- ----------------------------
DROP TABLE IF EXISTS `grupo`;
CREATE TABLE `grupo` (
`id_grupo`  int(11) NOT NULL AUTO_INCREMENT ,
`grupo`  varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`fecha_reportada`  date NOT NULL ,
`grupo_fecha`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id_grupo`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=18

;

-- ----------------------------
-- Records of grupo
-- ----------------------------
BEGIN;
INSERT INTO `grupo` VALUES ('16', 'Retail Execution', '2012-07-02', 'Retail Execution-120717'), ('17', 'Performance Awards', '2012-07-17', 'Performance Awards-120717');
COMMIT;

-- ----------------------------
-- Table structure for `hobbies`
-- ----------------------------
DROP TABLE IF EXISTS `hobbies`;
CREATE TABLE `hobbies` (
`id_hobbies`  int(11) NOT NULL AUTO_INCREMENT ,
`ganadores_id`  int(11) NOT NULL ,
`hobbie`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id_hobbies`, `ganadores_id`),
FOREIGN KEY (`ganadores_id`) REFERENCES `ganadores` (`id_ganadores`) ON DELETE CASCADE ON UPDATE CASCADE
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=1

;

-- ----------------------------
-- Records of hobbies
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`nombre`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`usuario`  varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`clave`  varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
`tipo_usuario`  varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=2

;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` VALUES ('1', 'Juan', 'jj', '123', 'admin');
COMMIT;

-- ----------------------------
-- Indexes structure for table ganadores
-- ----------------------------
CREATE INDEX `grupo_ganadores` ON `ganadores`(`grupo_id`) USING BTREE ;

-- ----------------------------
-- Auto increment value for `ganadores`
-- ----------------------------
ALTER TABLE `ganadores` AUTO_INCREMENT=1;

-- ----------------------------
-- Indexes structure for table grupo
-- ----------------------------
CREATE UNIQUE INDEX `grupo_fecha_UNIQUE` ON `grupo`(`grupo_fecha`) USING BTREE ;

-- ----------------------------
-- Auto increment value for `grupo`
-- ----------------------------
ALTER TABLE `grupo` AUTO_INCREMENT=18;

-- ----------------------------
-- Indexes structure for table hobbies
-- ----------------------------
CREATE INDEX `hobbies_ganadores` ON `hobbies`(`ganadores_id`) USING BTREE ;

-- ----------------------------
-- Auto increment value for `hobbies`
-- ----------------------------
ALTER TABLE `hobbies` AUTO_INCREMENT=1;

-- ----------------------------
-- Auto increment value for `usuarios`
-- ----------------------------
ALTER TABLE `usuarios` AUTO_INCREMENT=2;
