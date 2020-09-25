# Official Redd Website

## Stages

🥇 Production - https://redd.love

🥈 Staging - https://staging.redd.love

## Automated Deployment

The following branches are connected with the Redd Webserver and will be triggered and updated on every push event.

- `production`: Updates Production Stage
- `staging`: Updates Staging Stage
- `master`: Updates Testing Stage

## Docker

Requirements: [🐳 Docker](https://docs.docker.com/get-docker/)

### Getting Started

Just run `docker-compose -f build/docker-compose.yml up -d --build` and adjust the volume according to the location of your files.
