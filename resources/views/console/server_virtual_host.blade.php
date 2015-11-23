<VirtualHost {{ $ip or '195.154.62.151' }}:80>
    ServerName {{ $domain }}
    ServerAlias www.{{ $domain }}
    DocumentRoot "/var/www/landings/{{ $domain }}/public"
    UseCanonicalName Off
    ServerAdmin vitsw86@mail.ru
    CustomLog /var/log/apache2/{{ $domain }}.access.log combined
    ErrorLog /var/log/apache2/{{ $domain }}.error.log
    <Directory /var/www/landings>
    Require all granted
    #AllowOverride FileInfo
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Order allow,deny
    Allow from all
    </Directory>
</VirtualHost>