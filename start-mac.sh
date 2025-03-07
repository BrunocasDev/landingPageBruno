#!/bin/bash

# Read APP_PORT from .env file
APP_PORT=$(grep -o 'APP_PORT=[0-9]*' .env | cut -d '=' -f2)

# Artisan Serve with custom port
echo "Artisan server starting on port $APP_PORT..."
osascript -e 'tell application "Terminal" to do script "cd '$PWD' && php artisan serve --port='$APP_PORT'"'
