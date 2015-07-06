#mei/sql_scripts/insert/in_piece.sql

SELECT * FROM mei.piece ORDER BY id DESC;

#============================================================

INSERT INTO mei.piece (week, name, dev_url, git_url, live_url, design_url) VALUES( 
1528,
'minecraft_fr',
'http://dev-offers3.mowinisto.com/redirect/au/minecraft_fr/',
'',
'',
'file:///C:/ig/FR_Minecraft/FR_Minecraft/index.html'
);

