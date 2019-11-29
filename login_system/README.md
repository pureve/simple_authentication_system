# Test project
This is a simple project contains a authentication system and routes through the given web-pages. This Web-Application is based on PHP and MySQLI.

## Installation

1. Install XAMPP local server platform with the link "https://www.apachefriends.org/index.html"
2. Go to the folder where the XAMPP installed and open xampp-control.exe and start the modules Apache and MySQL
3. Open your browser and go to the link 
"http://localhost/phpmyadmin "
4. Click "Databases" from the dashboard and create a new database with the name "loginsystem"
5. Open this new database and type the SQL query
"CREATE TABLE users (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);"
then click "Go" button.
6. Go to the folder where the XAMPP installed and open the folder "htdocs". Create a new folder named "login_system". 
7. Copy the source files to the folder "login_system" which we recently created
8. Open your browser and go to the link "http://localhost/login_system/index.php"