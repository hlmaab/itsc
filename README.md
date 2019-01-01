# ITSC Software Licensing Page
![image](https://github.com/hlmaab/itsc/blob/master/Screen%20Shot.png)

# Admin Panel - User Management using CodeIgniter
**Admin Panel - User Management Demo using CodeIgniter + AdminLTE Bootstrap Theme**

The code is uploaded to demonstrate the simple role based Admin Panel application using CodeIgniter(MVC Framework)

## Version Information
**1) Upto Release 1.2 -** CodeIgniter 2.2, PHP version 5.1.6 or newer, MySQL (4.1+), MySQLi
    
**2) Latest (master) -** CodeIgniter 3.1.6, PHP version 5.6 or newer, MySQL (5.1+), MySQLi

## Installation

Download the code from repository.
Unzip the zip file.

Open browser; goto [localhost/phpmyadmin](http://localhost/phpmyadmin).

Create a database with name "cias" and import the file "cias.sql" in that database.

Copy the remaining code into your root directory:

for example, for windows

**WAMP : c:/wamp/www/cias**

OR

**XAMPP : c:/xampp/htdocs/cias**

Open browser; goto [localhost/cias](http://localhost/cias) and press enter:

The login screen will appear.

To login, I am going to provide the user-email ids and password below.

**System Administrator Account :**

email : admin@example.com

password : codeinsect

**Manager Account :**

email :  manager@example.com

password : codeinsect

**Employee Account :**

email : employee@example.com

password : codeinsect

Once you logged in with System Administrator account, you can create user or edit previous user if you want.

**Youtube Links :**

[CodeIgniter Admin Panel Demo](https://youtu.be/RFRXUd8LHUM) : This video contain the demo of CodeIgniter Admin Panel.

[![CodeIgniter Admin Panel Demo](http://img.youtube.com/vi/RFRXUd8LHUM/0.jpg)](http://www.youtube.com/watch?v=RFRXUd8LHUM)

[How to setup CodeIgniter Admin Panel](https://youtu.be/tU1PbcRj7ww) : This video contain the procedure of setting up CodeIgniter Admin Panel.

[![How to setup CodeIgniter Admin Panel](http://img.youtube.com/vi/tU1PbcRj7ww/0.jpg)](http://www.youtube.com/watch?v=tU1PbcRj7ww)


**ISSUE # 1 : After login "loginMe" controller is not found :**

Lot of people raising this issue, I resolved it 4-5 times for every user. People are not searching for closed issues. Thats why I am going to put this here.

How to get over this issue?

1) enable mod_rewrite.dll (or mod_rewrite.so) by removing leading # in httpd.conf.
2) After that, follow this solution https://stackoverflow.com/questions/24472349/htaccess-doesnt-work-on-xampp-windows-7

**ISSUE # 2 : Call to undefined function password_verify() :**

Solution is here : [Call to undefined function password_verify()](https://github.com/kishor10d/Admin-Panel-User-Management-using-CodeIgniter/issues/1)
