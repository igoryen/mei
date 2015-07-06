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

#==============================================

INSERT INTO mei.piece (week, name, dev_url, git_url, live_url, design_url) VALUES
("1517","androidsantivirus.com","http://androidsantivirus.com/",NULL,NULL,NULL),
("1517","androidsantivirus.com (FS)",NULL,"http://ubuntu-git/igoryen/androfs",NULL,NULL),
("1517","ringtones_daftpunk_fr","http://dev-offers3.mowinisto.com/redirect/au/ringtones_daftpunk_fr/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/designs/FR_DaftPunk/FR_DaftPunk/index.html"),
("1517","androidsantivirus::UploadController::loginAction()","http://file.androidsantivirus.com/api/upload/login",NULL,NULL,NULL),
("1517","androidsantivirus::UploadController::testAction()","http://file.androidsantivirus.com/api/upload/test",NULL,NULL,NULL),
("1517","androidsantivirus::UploadController::getFileList()","http://file.theappdefence.com/api/upload/getFileList?d=1668324&b=1280&callback=jQuery1110033707369633012974_1429817371158&_=1429817371159",NULL,NULL,NULL),
("1517","fr-stream","http://dev-offers3.mowinisto.com/redirect/au/fr-stream/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"C:\ig\designs\stream\index.html"),
("1518","Terminix","http://terminix.local","http://ubuntu-git/igoryen/terminix/commits/master","http://pest-removal.today",NULL),
("1518","App Defence Antivirus (WS)","http://theappdefence.com",NULL,NULL,NULL),
("1518","Android's Antivirus (WS)","http://androidsantivirus.com",NULL,NULL,NULL),
("1519","Batuan","http://batuan.local","https://github.com/igoryen/batuan/commits/master",NULL,NULL),
("1519","SA Casino","http://dev-offers3.mowinisto.com/redirect/au/casino_sa/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/SA_CASINO/SA_CASINO/index.html"),
("1519","SA Clash of Titans","http://dev-offers3.mowinisto.com/redirect/au/cot_sa/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/SA_COT/SA_COT/index.html"),
("1519","SA Crush Candy","http://dev-offers3.mowinisto.com/redirect/au/crushcandy_sa/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/SA_CrushCandy/SA_CrushCandy/index.html"),
("1519","SA Mario","http://dev-offers3.mowinisto.com/redirect/au/mario_sa/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/SA_Mario/SA_Mario/index.html"),
("1519","SA Flappy Bird","http://dev-offers3.mowinisto.com/redirect/au/flappybird_sa/","http://ubuntu-git/igoryen/o3m_b/commits/master",NULL,"file:///C:/ig/SA_FlappyBird/SA_FlappyBird/index.html"),
("1519","Whatssapp: v1","http://dev-offers3.mowinisto.com/redirect/au/whatsapp_za_v1/",NULL,NULL,NULL),
("1519","Whatssapp: v2","http://dev-offers3.mowinisto.com/redirect/au/whatsapp_za_v2/",NULL,NULL,NULL),
("1519","Whatssapp: v3","http://dev-offers3.mowinisto.com/redirect/au/whatsapp_za_v3/",NULL,NULL,NULL),
("1519","Whatssapp: v4","http://dev-offers3.mowinisto.com/redirect/au/whatsapp_za_v4/",NULL,NULL,NULL),
("1519","Get Local Maid – v1","http://getlocalmaid.local/","http://ubuntu-git/igoryen/getlocalmaid/commits/master","http://www.getlocalmaid.com/",NULL),
("1519","Get Local Maid - TCPA","getlocalmaid.local/TCPA/",NULL,NULL,NULL),
("1519","Get Local Maid – v2","http://getlocalmaid.local/v2/",NULL,NULL,NULL),
("1519","Get Local Maid – v2 TCPA","http://getlocalmaid.local/v2_TCPA/",NULL,NULL,NULL),
("1519","Get Local Maid – v2eml","http://getlocalmaid.local/v2eml/",NULL,NULL,NULL),
("1519","Get Local Maid – v2eml_TCPA","http://getlocalmaid.local/v2eml_TCPA/",NULL,NULL,NULL),
("1519","Get Local Maid – v4","http://getlocalmaid.local/v4/",NULL,NULL,NULL);
