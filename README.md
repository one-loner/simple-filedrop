# Simple Firedrop    
Простой движок для простого облака   
Необходим веб сервер с поддержкой php   
index.php, file.php и styles.css    
Владельцами файлов и папок должны быть пользователь и группа www-data   
Управление осуществляется через /file.php   
Чтобы избежаеть несанкционированного доступа переименуйте file.php,   
например в eoifjelfhewljwo.php, тогда управление будет осуществляться   
через /eoifjelfhewljwo.php    
В index.php - фейковая форма логика   
## Установка (в качестве примера на сервер Apache в Ubuntu/Debian от root)   
apt-get install apache2 libapache2-mod-php apache2-utils   
rm /var/www/html/index.html   
   
После чего копируем папку index.php, file.php и styles.css в /var/www/html/  
Не забываем выставить владельцем www-data   
chown -R www-data:www-data /var/www/html/    
## Настройка прав доступа       
Вы можете перименовать file.php для защиты доступа    
Так же вы можете защитить /file.php средствами web-сервера, например, в конфигурацию apache нужно добавить следующее:   
        <Files "file.php">   
        AuthType Basic   
        AuthName "Restricted Area"   
        AuthUserFile /etc/apache2/.htpasswd   
        Require valid-user   
        </Files>   

   
Логин и пароль для доступа устанавливаются следующей командой (от root):   
htpasswd -c /etc/apache2/.htpasswd имя_пользователя   
Добавил в репозиторий для примера файл 000-default.conf    
