# Basis-Image verwenden
FROM nginx:latest

# Arbeitsverzeichnis erstellen
WORKDIR /usr/share/nginx/html

# Standard-HTML-Datei kopieren
COPY . /usr/share/nginx/html/

# Kopiere benutzerdefinierte Nginx-Konfiguration
COPY nginx.conf /etc/nginx/nginx.conf
COPY fastcgi.conf /etc/nginx/fastcgi.conf 

# Exponiere Ports für HTTP und HTTPS
EXPOSE 80 443

# Nginx starten
CMD ["nginx", "-g", "daemon off;"]