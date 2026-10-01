# Usa a imagem oficial do PHP 8.2 com Apache
FROM php:8.2-apache

# Instala a extensão PDO SQLite (necessária para o banco loja.db)
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Habilita o mod_rewrite do Apache (boa prática)
RUN a2enmod rewrite

# Copia os arquivos do projeto para dentro do container
COPY . /var/www/html/

# Ajusta as permissões (para o PHP poder criar o loja.db)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Ajusta o Apache para usar a porta que a Render define
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Expõe a porta
EXPOSE 80

# Inicia o Apache
CMD ["apache2-foreground"]
