#!/bin/bash

# Print STAGE
echo "STAGE: ${STAGE}"

# Check for PRODUCTION environment
if [ "$STAGE" = "production" ]; then
  echo "Running PRODUCTION Build ..."
  composer run-script build
  composer run-script create-sitemap
fi

# Set Permissions
chown -R www-data:www-data /var/www/html

# Launch Apache
apache2-foreground
