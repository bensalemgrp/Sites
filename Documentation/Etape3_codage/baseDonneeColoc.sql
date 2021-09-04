-- ----------------------------------------------------------------------------
-- MySQL Workbench Migration
-- Migrated Schemata: offresImmo
-- Source Schemata: offresImmo
-- Created: Sat Sep  4 00:58:18 2021
-- Workbench Version: 8.0.20
-- ----------------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------------------------------------------------------
-- Schema offresImmo
-- ----------------------------------------------------------------------------
DROP SCHEMA IF EXISTS `offresImmo` ;
CREATE SCHEMA IF NOT EXISTS `offresImmo` ;


-- ----------------------------------------------------------------------------
-- Table offresImmo.tya_annonce ['Offre', 'Demande' ]
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`tya_annonce` (
  `tya_id_annonce` SMALLINT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.tyb_typeBien ["Appartement", "Maison", "Studio", "Loft/atelier"]
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`tyb_typeBien` (
  `tyb_id_bien` SMALLINT NULL,
  `libelle` VARCHAR(255) NULL);
 
-- ----------------------------------------------------------------------------
-- Table offresImmo.tyl_typelogement ['Colocation', 'Location', 'Sous-location', 'Chambre chez l\'habitant' ]
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`tyl_typelogement` (
  `tyl_id_typeLogement` INT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.pay_pays
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`pay_pays` (
  `pay_id` INT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.dep_departement
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`dep_departement` (
  `dep_id` INT NULL,
  `pay_id` INT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.com_commune
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`com_commune` (
  `com_id` INT NULL,
  `dep_id` INT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.com_commune
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`vill_ville` (
  `com_id` INT NULL,
  `ville_id` INT NULL,
  `Code_postale` INT NULL,
  `libelle` VARCHAR(255) NULL);

-- ----------------------------------------------------------------------------
-- Table offresImmo.img_images
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`img_images` (
  `img_id_images` VARCHAR(64) NULL,
  `ann_ref` VARCHAR(64) NULL,
  `CheminImage` VARCHAR(255) NULL);
 
-- ----------------------------------------------------------------------------
-- Table offresImmo.utype_userType ['locataire ou colocataire', Agene, Propriétaire ]
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`utype_userType` (
  `id_typeuser` VARCHAR(255) NOT NULL,
  `libelle` VARCHAR(255) NULL,
  PRIMARY KEY (`id_typeuser`));

-- ----------------------------------------------------------------------------
-- Table offresImmo.compteUsers
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`prf_profile` (
  `prf_id` INT NOT NULL,
  `prf_first_name` VARCHAR(50) NOT NULL,
  `prf_last_name` VARCHAR(50) NOT NULL, 
  `prf_email` DATETIME(6) NULL,
  `prf_password` VARCHAR(70) NULL,
  `prf_phone` VARCHAR(20) NULL,
  `prf_adress` VARCHAR(50) NOT NULL,
  `ville_id` INT NULL, 
  `prf_isValidated` INT NULL, 
  `prf_date_naissance` DATETIME NULL, 
  `prf_sexe` VARCHAR(1) NULL, 
  --  only Agence
  `prf_NumSIRN` VARCHAR(40) NULL, 
  `prf_nameofcompany` VARCHAR(70) NULL,
  `prf_siteweb` VARCHAR(70) NULL,
  -- only locataire 
  `prf_activity` VARCHAR(20) NULL,
  `prf_logo` VARCHAR(70) NULL, 
  `id_typeuser` VARCHAR(255) NOT NULL,
  
  PRIMARY KEY (`prf_id`)); 
 
-- ----------------------------------------------------------------------------
-- Table offresImmo.utype_userType ['locataire ou colocataire', Agene, Propriétaire ]
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`validated_user` (
  `id_validation` VARCHAR(255) NOT NULL,
  `prf_id` INT NOT NULL,
  `codeValidation` VARCHAR(255) NULL,
  PRIMARY KEY (`id_validation`));

-- ----------------------------------------------------------------------------
-- Table offresImmo.ann_annonce
-- ----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `offresImmo`.`ann_annonce` (
  `ann_ref` VARCHAR(64) NULL,
  `ann_titre` VARCHAR(255) NULL,
  `ann_description` LONGTEXT NULL,
  `ann_dateCreation` DATETIME(6) NULL,
  `ann_dateModification` DATETIME(6) NULL,
  `ann_dateValidite` DATETIME(6) NULL,
  `ann_disponible` SMALLINT NULL,
 
  `tya_id_annonce` SMALLINT NULL,
  -- critere bien
  `ann_anneeConstruction` VARCHAR(255) NULL,
  `ann_surface` DECIMAL(10,3) NULL,
  `ann_numEtage` INT NULL,
  `ann_nombrePiece` INT NULL,
  `ann_nombreChambre` INT NULL,
  `ann_ascenceur` SMALLINT NULL,
  `ann_meuble` SMALLINT NULL,
  `ann_classEnergie` SMALLINT NULL,
  `ann_classGES` SMALLINT NULL,
  `tyb_id_bien` SMALLINT NULL, 
  `tyl_id_typelogement` INT NULL,
  `ville_id` INT NULL,
  `adr_address` VARCHAR(255) NULL,
  `img_id_images` VARCHAR(64) NULL,
  `prf_id` INT NOT NULL,
  `accessibiliteHandicap` INT NOT NULL,
  
  -- colo ONLY
  `ann_nbrdOccupant` INT NULL,
  `ann_fillesUuniquement` INT NULL,
  `ann_FumeursAutorises` INT NULL,
  `ann_AnimauxAutorises` INT NULL,
  `ann_GarçonsUniquement` INT NULL,
  
  
  -- charge loyer
   `ann_prix` VARCHAR(255) NULL,
   `ann_charge` VARCHAR(255) NULL,
   `ann_caution` VARCHAR(255) NULL,
   `ann_fraisAgence` VARCHAR(255) NULL
  
  );

  
SET FOREIGN_KEY_CHECKS = 1;
