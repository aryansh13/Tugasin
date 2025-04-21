#!/bin/bash

# Install dependencies
composer install --no-dev --optimize-autoloader

# Generate application key
php artisan key:generate

# Create a directory for static files
mkdir -p netlify_public

# Copy public assets to the static directory
cp -r public/* netlify_public/

# Generate an index.html file with the rendered landing page
php -r "
\$html = file_get_contents('http://localhost:8000');
file_put_contents('netlify_public/index.html', \$html);
"

echo "Static site generated in netlify_public directory" 