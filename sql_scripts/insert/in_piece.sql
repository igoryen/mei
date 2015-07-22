#mei/sql_scripts/insert/in_piece.sql

SELECT * FROM mei.piece ORDER BY id DESC;

#============================================================

INSERT INTO mei.piece (week, name, dev_url, git_url, live_url, design_url) VALUES( 
1529, # week
'GamePlan', # name
'http://gameplan.app/', # dev_url
'https://github.com/GamePlan/www/commits/master', # git_url
'', # live_url
'' # design_url
);

