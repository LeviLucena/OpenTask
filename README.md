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


    INSERT INTO `user` (`id`, `us_name`, `us_email`, `us_login`, `us_password`, `us_permission`, `us_status`, `us_register`, `us_last_login`)
    VALUES (4, 'Admin sys', 'admin@admin.com', 'admin.sys', '$2y$10$M.w36VNczE3Zbv29CE21TOmRKRCgCUtNnk86rVmdZTOM8eTdJcLM6', 1, 1, '2020-02-12 21:57:27', '0000-00-00 00:00:00');


Username: admin.sys
Password: admin123

If everything has gone well so far, your database setup is complete.
