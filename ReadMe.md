*How to make it work*

1. git clone repo in your php environment(EXP: let say under htdocs folder, which accessible in the browser under the url *http://localhost/*)
2. create a database (EXP: my_api)
3. execute content of DB.sql in your database (my_api in our case)
4. install postman ( or any alternative)
5. in the url field tape * http://localhost/codeigniterapi/api/students (you can change the name of functions as you want, open api.php to check which function are available)
6. still on postman, add a key with the name *X-API-KEY*
and a value of *123456* (or *324233*, i only added 2 keys)
![picture](https://i.imgur.com/vKmUAXJ.png)