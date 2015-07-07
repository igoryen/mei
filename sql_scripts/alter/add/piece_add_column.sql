# 2015-07-07
ALTER TABLE `mei`.`piece` 
ADD COLUMN `type` VARCHAR(45) NULL 
AFTER `design_url`;


# 2015-07-06
ALTER TABLE `mei`.`piece` 
ADD COLUMN `comment` VARCHAR(2083) NULL 
AFTER `design_url`;