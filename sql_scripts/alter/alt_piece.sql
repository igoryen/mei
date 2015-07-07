ALTER TABLE `mei`.`piece` 
ADD COLUMN `type` VARCHAR(45) NULL 
AFTER `design_url`;

ALTER TABLE `mei`.`piece` 
CHANGE COLUMN `type` `type` VARCHAR(45) NULL DEFAULT NULL 
AFTER `name`;
