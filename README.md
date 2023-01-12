SOLUTORIA SOLUTORIA SOLUTORIA
BSD creada en PHPMyAdmin
Framework utilizado LARAVEL
(en la carpeta main se encuentra el archivo .SQL exportado)

1) Con tu token creado, debes importar a una base de datos (la que elijas) la información histórica de la UF que encontraras en /api/indicadores 

2) Crea un CRUD de los datos importados que permita realizar las cuatro operaciones  (Requisito cualquier framework de PHP, usando AJAX)

3) Crea un gráfico en donde despliegue los datos con un filtro de fecha desde hasta

al clonar o descargar la capeta debes ejecutar los comandos (composer install , npm install)
y crear un archivo .env con lo siguiente:

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:jpd7zr5peOsf5h+23KbrjAIx2SjGJDqELpXSffqv7Y0=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=solutoria
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
