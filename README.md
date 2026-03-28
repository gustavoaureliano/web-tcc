# ETESP Universe - Web (TCC)

Este projeto foi desenvolvido no contexto do meu **Trabalho de Conclusão de Curso (TCC)** na **ETESP (Etec de São Paulo)**.

Este repositório contém a parte **web** do trabalho, incluindo:

- **backend** (API e regras de negócio em PHP)
- **frontend** (site)

Embora esta parte web tenha sido desenvolvida por mim, o **TCC foi realizado em grupo**, com mais **3 integrantes**.

Além desta aplicação web, o TCC como um todo também inclui:

- banco de dados
- aplicação desktop
- aplicação mobile

Repositório da aplicação mobile:  
https://github.com/gustavoaureliano/EtespUniverseMobile

## Sobre o projeto

A aplicação foi construída com PHP em arquitetura MVC customizada, utilizando PDO para acesso ao banco de dados e renderização via templates PHP.

## Tecnologias

- PHP
- Composer (autoload PSR-4)
- MySQL/MariaDB
- PDO
- HTML/CSS/JavaScript

## Estrutura do projeto

- `index.php` - ponto de entrada da aplicação
- `router.php` - roteador para servidor embutido do PHP
- `App/Application.php` - dispatch das rotas para controllers
- `App/Controllers/` - controllers das páginas
- `App/Controllers/Api/` - controllers da API
- `App/DAO/` - camada de acesso a dados
- `App/Models/` - modelos
- `App/Views/pages/` - páginas e templates

## Instalação no Arch Linux (desenvolvimento)

1. Instale os pacotes:

```bash
sudo pacman -S php composer mariadb
```

2. Habilite `pdo_mysql` no `php.ini`:

```bash
sudo sed -i 's/;extension=pdo_mysql/extension=pdo_mysql/' /etc/php/php.ini
```

3. Verifique a extensão:

```bash
php -m | grep pdo_mysql
```

4. Inicialize o MariaDB (primeira vez apenas):

```bash
sudo mariadb-install-db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
sudo systemctl enable --now mariadb
sudo mariadb-secure-installation
```

5. Instale as dependências do projeto:

```bash
cd /home/gustavo/web-tcc
composer install
```

6. Configure o banco em:

- `App/DAO/Connection.php`

Ajuste os valores de `DBHOST`, `DBNAME`, `DBUSER` e `DBPASS` conforme seu ambiente.

7. Rode em desenvolvimento:

```bash
php -S 127.0.0.1:8000 router.php
```

Acesse: `http://127.0.0.1:8000`

## Instalação no Ubuntu 24.04 (desenvolvimento)

1. Instale os pacotes:

```bash
sudo apt update
sudo apt install -y php php-cli php-mysql composer mariadb-server apache2 libapache2-mod-php
```

2. Habilite os serviços:

```bash
sudo systemctl enable --now mariadb
sudo systemctl enable --now apache2
```

3. Execute a configuração inicial de segurança do MariaDB:

```bash
sudo mariadb-secure-installation
```

4. Instale as dependências do projeto:

```bash
cd /home/gustavo/web-tcc
composer install
```

5. Configure as credenciais do banco em:

- `App/DAO/Connection.php`

## Rodar em desenvolvimento (Ubuntu e Arch)

No diretório do projeto:

```bash
php -S 127.0.0.1:8000 router.php
```

## Produção (Ubuntu 24.04 + Apache)

1. Copie o projeto para um diretório de deploy:

```bash
sudo mkdir -p /var/www/web-tcc
sudo rsync -av --delete /home/gustavo/web-tcc/ /var/www/web-tcc/
sudo chown -R www-data:www-data /var/www/web-tcc
```

2. Habilite `mod_rewrite`:

```bash
sudo a2enmod rewrite
```

3. Crie o VirtualHost em `/etc/apache2/sites-available/web-tcc.conf`:

```apache
<VirtualHost *:8080>
    ServerName webtcc.local
    DocumentRoot /var/www/web-tcc

    <Directory /var/www/web-tcc>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/web-tcc.error.log
    CustomLog ${APACHE_LOG_DIR}/web-tcc.access.log combined
</VirtualHost>
```

4. Ative o site e recarregue o Apache:

```bash
sudo a2ensite web-tcc.conf
sudo systemctl reload apache2
```

5. Garanta a porta 8080 em `/etc/apache2/ports.conf`:

```apache
Listen 8080
```

Se alterar `ports.conf`, reinicie:

```bash
sudo systemctl restart apache2
```

## Rotas de exemplo

Páginas:

- `/home`
- `/login`
- `/cadastro`
- `/eventos`
- `/ingressos`

API:

- `/api/cliente`
- `/api/login`
- `/api/cadastro`
- `/api/ingressos`

## Troubleshooting rápido

- Linux diferencia maiúsculas e minúsculas: use `css` (não `CSS`) nos caminhos.
- Erro 500 com `.htaccess`: habilite `mod_rewrite` e confirme `AllowOverride All`.
- Erro de conexão com banco: revise os dados em `App/DAO/Connection.php`.
