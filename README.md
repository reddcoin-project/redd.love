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

- Rename `.env.sample` to `.env` and adjust configuration if needed.
- Open a console/terminal in the root folder of this repository.
- Run `docker-compose up -d --build` and build the container on your machine.
- You are able to access the page at http://localhost
