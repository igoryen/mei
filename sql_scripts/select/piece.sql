SELECT *
FROM mei.piece
ORDER BY id DESC
;

SELECT `p`.`id`, `p`.`week`, `t`.`name`, `p`.`type`, `p`.`dev_url`, `p`.`git_url`, `p`.`live_url`, `p`.`design_url`, `t`.* 
FROM `piece` AS `p`
INNER JOIN `type` AS `t` 
ON p.type = t.id 
ORDER BY `week` DESC;

SELECT `p`.`id`, `p`.`week`, `p`.`name`, `p`.`dev_url`, `p`.`git_url`, `p`.`live_url`, `p`.`design_url`, `t`.`name` FROM `piece` AS `p`
 LEFT JOIN `type` AS `t` ON p.type = t.id ORDER BY `week` DESC;
 
 SELECT `p`.`id`, `p`.`week`, `p`.`name`, `p`.`dev_url`, `p`.`git_url`, `p`.`live_url`, `p`.`design_url`, `t`.`name` AS `typeName` FROM `piece` AS `p`
 LEFT JOIN `type` AS `t` ON p.type = t.id ORDER BY `week` DESC