FROM alpine:3.7

# Instalando os pacotes necessários
# Note que instalaremos o Nginx juntamente com o PHP.
# Na filosofia do Docker essa não é uma prática
# muito recomendável em todos os caso, pois o container
# em geral, deve rodar apenas um processo
# mas como o server interno do PHP não é recomendável
# para produção usaremos o Nginx, e para não ter
# que criar outro container apenas para o servidor
# web, instalaremos os dois no mesmo container
# e o supervisor cuidará dos processos
RUN apk --update add --no-cache \
        nginx \
        curl \
        supervisor \
        php5 \
        php5-ctype \
        php5-curl \
        php5-dom \
        php5-fpm \
        php5-json \
        php5-mbstring \
        php5-mcrypt \
        php5-opcache \
        php5-openssl \
        php5-pdo \
        php5-pdo_mysql \
        php5-pdo_pgsql \
        php5-pdo_sqlite \
        php5-phar \
        php5-session \
        php5-tokenizer \
        php5-xml
# Limpando o cache das instalações
# é sempre recomendável remover do
# container tudo aquilo que não for mais
# necessário após tudo configurado
# assim o container fica menor
RUN rm -Rf /var/cache/apk/*

# Instalando composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

# Configurando o Nginx
# Aqui copiamos nosso arquivo de configuração para dentro do container
# Note que ainda não criamos esse arquivo, criaremos mais à frente
COPY nginx.conf /etc/nginx/nginx.conf

# Arquivo de configuração do supervisor
# Idem ao Nginx, será criado mais adiante
COPY supervisord.conf /etc/supervisord.conf

# Criando o diretório onde ficará nossa aplicação
RUN mkdir -p /app

# Definindo o diretório app como nosso diretório de trabalho
WORKDIR /app

# Dando permissões para a pasta do projeto
RUN chmod -R 755 /app

# Expondo as portas
EXPOSE 80 443

# Finalmente... Iniciando tudo... Ufa...
CMD ["supervisord", "-c", "/etc/supervisord.conf"]
