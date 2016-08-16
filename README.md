## ExternalBackups Web ##
----------
The server side of the ExternalBackups Plugin for Bukkit/Spigot. [Download Plugin](https://www.spigotmc.org/resources/externalbackups.27917/)


**Requirements:**

 - A php5 server
 - Mysql server (for saving keys)

**Installation:**

 1. Download Zip and upload everything to your web server.
 2. Configure
 3. Done


**Configuration:**

Open settings.php

Whitelist your ip-adress(es) of your server(s).

    $allowed_ip = array('10.0.1.34', '127.0.0.1');
   Place each ip adress between quotes (`''`) and place a comma (`,`) between ip-adresses.

Configure the mysql settings.

    $servername = "localhost";
    $databasename = "dbname";
    $username = "user";
    $password = "pass";

 - Change `$servername`to the ip address / url of your mysql server.
 - Change `$databasename` to the name of your database.
 - Change `$username` to your mysql username and `$password` to your mysql password



License:
-------
```
Copyright 2016 Bas van den Boom 'Z3r0byte'

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
```
