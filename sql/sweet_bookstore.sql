-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Produtos` (
  `ProdutosID` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  `avaliacao` VARCHAR(255) NOT NULL,
  `descricao` TEXT NOT NULL,
  `imagem` VARCHAR(255) NOT NULL,
  `preco` FLOAT NOT NULL,
  PRIMARY KEY (`ProdutosID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Compra` (
  `CompraID` INT NOT NULL AUTO_INCREMENT,
  `pagmento` VARCHAR(45) NOT NULL,
  `quantidade_produtos` VARCHAR(10) NOT NULL,
  `produtos` VARCHAR(45) NOT NULL,
  `Produtos_ProdutosID` INT NOT NULL,
  PRIMARY KEY (`CompraID`),
  INDEX `fk_Compra_Produtos1_idx` (`Produtos_ProdutosID` ASC) VISIBLE,
  CONSTRAINT `fk_Compra_Produtos1`
    FOREIGN KEY (`Produtos_ProdutosID`)
    REFERENCES `mydb`.`Produtos` (`ProdutosID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Clientes` (
  `ClientesID` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `endereco` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(13) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  `Compra_CompraID` INT NOT NULL,
  PRIMARY KEY (`ClientesID`),
  INDEX `fk_Clientes_Compra_idx` (`Compra_CompraID` ASC) VISIBLE,
  CONSTRAINT `fk_Clientes_Compra`
    FOREIGN KEY (`Compra_CompraID`)
    REFERENCES `mydb`.`Compra` (`CompraID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Admin` (
  `adminID` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`adminID`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
