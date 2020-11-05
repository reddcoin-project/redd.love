#!/bin/bash
echo "STAGE: ${STAGE}"
if [ "$STAGE" = "production" ]; then
  composer run-script build
fi

chown -R www-data:www-data /var/www/html

apache2-foreground
