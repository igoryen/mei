# alter/change/

ALTER TABLE `mei`.`piece` 
CHANGE COLUMN `type` `type` VARCHAR(45) NULL DEFAULT NULL 
AFTER `name`;

