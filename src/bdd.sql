-- MySQL Script generated by MySQL Workbench
-- 10/17/18 16:33:55
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema oshop
-- -----------------------------------------------------
CREATE DATABASE ecom;
USE ecom;
-- -----------------------------------------------------
-- Table `brand`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `brand` ;

CREATE TABLE IF NOT EXISTS `brand` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom de la marque',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la marque',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la marque',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `category` ;

CREATE TABLE IF NOT EXISTS `category` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL COMMENT 'Le nom de la catégorie',
  `subtitle` VARCHAR(64) NULL,
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de l\'image de la catégorie (utilisée en home, par exemple)',
  `home_order` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'L\'ordre d\'affichage de la catégorie sur la home (0=pas affichée en home)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la catégorie',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la catégorie',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `type` ;

CREATE TABLE IF NOT EXISTS `type` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(64) NOT NULL COMMENT 'Le nom du type',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création de la catégorie',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour de la catégorie',
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `product` ;

CREATE TABLE IF NOT EXISTS `product` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT 'Le nom du produit',
  `description` TEXT NULL COMMENT 'La description du produit',
  `picture` VARCHAR(128) NULL COMMENT 'L\'URL de l\'image du produit',
  `price` DECIMAL(10,2) NOT NULL DEFAULT 0 COMMENT 'Le prix du produit',
  `rate` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'L\'avis sur le produit, de 1 à 5',
  `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT 'Le statut du produit (0=non renseignée, 1=dispo, 2=pas dispo)',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'La date de création du produit',
  `updated_at` TIMESTAMP NULL COMMENT 'La date de la dernière mise à jour du produit',
  `brand_id` INT UNSIGNED NOT NULL,
  `category_id` INT UNSIGNED NULL,
  `type_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_brand_idx` (`brand_id` ASC),
  INDEX `fk_product_category1_idx` (`category_id` ASC),
  INDEX `fk_product_type1_idx` (`type_id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `brand`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'Nike', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'Adidas', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'Puma', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (4, 'Reebok', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (5, 'Converse', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (6, 'Vans', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (7, 'New Balance', '2024-12-04 09:00:00', NULL);
INSERT INTO `brand` (`id`, `name`, `created_at`, `updated_at`) VALUES (8, 'Under Armour', '2024-12-04 09:00:00', NULL);
COMMIT;


-- -----------------------------------------------------
-- Data for table `category`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (1, 'Chaussures de Sport', 'Pour toutes vos activités', 'assets/images/categ_sport.jpg', 1, '2024-12-04 08:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (2, 'Chaussures Casual', 'Style décontracté pour tous les jours', 'assets/images/categ_casual.jpg', 2, '2024-12-04 08:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (3, 'Chaussures Habillées', 'Pour vos événements spéciaux', 'assets/images/categ_habillees.jpg', 3, '2024-12-04 08:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (4, 'Baskets', 'Confort et performance', 'assets/images/categ_baskets.jpg', 4, '2024-12-04 08:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (5, 'Sandales', 'Pour l\'été et les vacances', 'assets/images/categ_sandales.jpg', 5, '2024-12-04 08:00:00', NULL);
INSERT INTO `category` (`id`, `name`, `subtitle`, `picture`, `home_order`, `created_at`, `updated_at`) VALUES (6, 'Bottes', 'Protégez vos pieds en hiver', 'assets/images/categ_bottes.jpg', 6, '2024-12-04 08:00:00', NULL);
COMMIT;


-- -----------------------------------------------------
-- Data for table `type`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (1, 'Baskets', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (2, 'Sandales', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (3, 'Bottes', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (4, 'Chaussures Habillées', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (5, 'Chaussures de Course', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (6, 'Espadrilles', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (7, 'Mocassins', '2024-12-04 10:00:00', NULL);
INSERT INTO `type` (`id`, `name`, `created_at`, `updated_at`) VALUES (8, 'Chaussures de randonnée', '2024-12-04 10:00:00', NULL);
COMMIT;

-- -----------------------------------------------------
-- Data for table `product`
-- -----------------------------------------------------
START TRANSACTION;
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (1, 'Nike Air Max', 'Baskets Air Max ultra confortables pour vos sessions sportives.', 'assets/images/produits/nike_air_max.jpg', 120.00, 5, 1, '2024-12-04 11:00:00', NULL, 1, 1, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (2, 'Adidas Ultraboost', 'Chaussures de running avec une technologie de confort de dernière génération.', 'assets/images/produits/adidas_ultraboost.jpg', 150.00, 4, 1, '2024-12-04 11:00:00', NULL, 2, 1, 5);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (3, 'Converse All Star', 'Les classiques Converse pour un look décontracté au quotidien.', 'assets/images/produits/converse_all_star.jpg', 65.00, 4, 1, '2024-12-04 11:00:00', NULL, 5, 2, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (4, 'Vans Old Skool', 'Chaussures Vans Old Skool avec un style urbain indémodable.', 'assets/images/produits/vans_old_skool.jpg', 75.00, 5, 1, '2024-12-04 11:00:00', NULL, 6, 2, 1);
INSERT INTO `product` (`id`, `name`, `description`, `picture`, `price`, `rate`, `status`, `created_at`, `updated_at`, `brand_id`, `category_id`, `type_id`) VALUES (5, 'Puma Suede', 'Chaussures Puma Suede pour un style streetwear classique.', 'assets/images/produits/puma_suede.jpg', 80.00, 3, 1, '2024-12-04 11:00:00', NULL, 3, 4, 1);
COMMIT;
