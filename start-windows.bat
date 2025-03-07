@echo off

REM Read APP_PORT from .env file
for /f "tokens=2 delims== eol==" %%G in ('type .env ^| findstr "APP_PORT"') do set APP_PORT=%%G

REM Artisan Serve with custom port
echo "Artisan server starting on port %APP_PORT%..."
php artisan serve --port=%APP_PORT%
