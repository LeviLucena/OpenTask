# OpenTask

Open Task is an open-source tool developed by Levi Lucena that allows you to manage tasks, teams, upload files and images, create discussion forums within each task, and perform other operations.

Written in PHP 7.2 and using the MariaDB database.

The software was created with the aim of replacing some existing paid alternatives in the market and also bringing something modern and up-to-date to the community. While there are various similar tools, many of them have installation issues, outdated interfaces, lack of documentation, and other problems.

The installation requires only initial setup, and after that, no additional configuration or adjustments are needed.

The only files that need to be modified are the root .htaccess and App/Config/config.php files. You'll also need to install the MySQL/MariaDB database and run the SQL insert to create a user with administrator level permissions.

## Database Setup

1. Create a database for your application, let's use the name `opentask` as an example.

2. After creating the `opentask` database, copy the contents of the file `Docs/Database/SQL.txt` and execute it in your SGBD, making sure to select the `opentask` database.

**Important:** In the `SQL.txt` file, there are instructions pointing to the `opentask` database. If your database name is different, replace all occurrences of `opentask` with your database name (e.g., `opentask` => `mysite_opentask`).

With the database and tables installed, you need a user and password to access the system with administrator level permissions. Run the following SQL:

```sql
INSERT INTO `user` (`id`, `us_name`, `us_email`, `us_login`, `us_password`, `us_permission`, `us_status`, `us_register`, `us_last_login`)
VALUES (4, 'Admin sys', 'admin@admin.com', 'admin.sys', '$2y$10$M.w36VNczE3Zbv29CE21TOmRKRCgCUtNnk86rVmdZTOM8eTdJcLM6', 1, 1, '2020-02-12 21:57:27', '0000-00-00 00:00:00');

Username: admin.sys
Password: admin123

If everything has gone well so far, your database setup is complete.
Application Configuration

The server configuration is straightforward. Let's start with the .htaccess file.
.htaccess

This file contains several settings, including the main one: redirecting the user to the public folder.

On line 6, you'll find the following code:

ruby

RewriteRule ^((?!public/).*)$ opentask/public/$1 [L,NC]

Note that opentask refers to the folder where the project is located. If your project is in the root directory, you can leave it as public/. If your project is in another directory, adjust the path to the public folder accordingly, e.g., myserver/opentask/public/.

You only need to make this change; nothing else is required in this file.
config.php

There are many settings here, but you shouldn't need to modify most of them since they directly impact how the framework was built. If you have the necessary knowledge, feel free to modify the code to suit your needs.

    Line 3: Enter the root directory of your project. If it's the root, just use a single slash (/).
    Line 6: To make adjustments here, set the value to true on line 7. This allows you to see a URI being returned when accessing your project in the browser.

Access your project and include controller/method/param in the URL, for example: https://mysite.com/controller/method/param. The URI_UNLINK_COUNT constant indicates how many directories we want to remove. If your site is in the root, set it to 1; if it's in other directories, insert the number of directories. Your page should only show the controller… / parameter. After you finish, set the value to false on line 7.

    Lines 9, 10, 11, and 12: Receive the parameters for database connection.
    Line 15: Default password when a password is reset. Administrators don't have the option to enter a new password, but regular users do when logged into their accounts.
    Lines 18, 19, and 20: Here you enter date, time, and time zone data for your application.
    Lines 32 and 33: Specify the file size allowed for uploads, in megabytes.
    Line 34: List of allowed MIME types.
    Line 44: With true, files will be dynamically renamed. If you want to keep the original file name, set it to false. Note: If you upload files with the same name, they will be replaced.

Installation Guide on YouTube: Open Task - https://youtu.be/tGcZAxSvBrc
