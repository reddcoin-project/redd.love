# Official Redd Website

## Stages

🥇 Production - https://redd.love

🥈 Staging - https://staging.redd.love

## Automated Deployment

🔥 **The branches are connected to an automated deployment!**

The following branches are connected with the Redd Webserver and will be triggered and updated on every push event.

- `main`: Deployes to PRODUCTION
- `staging`: Deployes to STAGING

## Docker

Requirements: [🐳 Docker](https://docs.docker.com/get-docker/)

### Getting Started

Just run `docker-compose up -d --build` and adjust the volume according to the location of your files.
