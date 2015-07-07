UPDATE `mei`.`piece` 
SET `comment`='(1) When making offers for non-English speaking countries, make sure that we have the UTF-8 charset meta tag in the header tag, both of these were missing that tag, and it make the terms showing those meta characters. (2) In the header, please make sure there is no conflicting jQuery library. Both of these offers had jQuery 1.7.2 and then 1.5.2 in the header tag, unfortunately 1.5.2 caused the jQuery Pagination plugin to not work.' 
WHERE `id`='108';
