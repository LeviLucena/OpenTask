# OpenTask

Open Task é uma ferramenta de código aberto desenvolvida por **Levi Lucena** que permite gerenciar tarefas, equipes, fazer upload de arquivos e imagens, criar fóruns de discussão dentro de cada tarefa e realizar outras operações.

Escrito em PHP 7.2 e usando o banco de dados MariaDB.

O software foi criado com o objetivo de substituir algumas alternativas pagas existentes no mercado e também trazer algo moderno e atualizado para a comunidade. Embora existam várias ferramentas semelhantes, muitas delas apresentam problemas de instalação, interfaces desatualizadas, falta de documentação e outros problemas.

A instalação requer apenas a configuração inicial e, depois disso, nenhuma configuração ou ajuste adicional é necessário.

Os únicos arquivos que precisam ser modificados são os arquivos root .htaccess e App/Config/config.php. Você também precisará instalar o banco de dados MySQL/MariaDB e executar a inserção SQL para criar um usuário com permissões de administrador.

## Configuração do banco de dados

1. Crie um banco de dados para sua aplicação, vamos usar o nome `opentask` como exemplo.

2. Após criar o banco de dados `opentask`, copie o conteúdo do arquivo `Docs/Database/SQL.txt` e execute-o em seu SGBD, certificando-se de selecionar o banco de dados `opentask`.

**Important:** No arquivo `SQL.txt`, existem instruções apontando para o banco de dados `opentask`. Se o nome do seu banco de dados for diferente, substitua todas as ocorrências de `opentask` pelo nome do seu banco de dados (por exemplo, `opentask` => `mysite_opentask`)

With the database and tables installed, you need a user and password to access the system with administrator level permissions. Run the following SQL:


    INSERT INTO `user` (`id`, `us_name`, `us_email`, `us_login`, `us_password`, `us_permission`, `us_status`, `us_register`, `us_last_login`)
    VALUES (4, 'Admin sys', 'admin@admin.com', 'admin.sys', '$2y$10$M.w36VNczE3Zbv29CE21TOmRKRCgCUtNnk86rVmdZTOM8eTdJcLM6', 1, 1, '2020-02-12 21:57:27', '0000-00-00 00:00:00');


Username: admin.sys
Password: admin123

A configuração do banco de dados está concluída.
