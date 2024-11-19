# CTF Task: Insecure .env File Exposure

## Challenge Description

In this challenge, your task is to find a sensitive file on a web application. The `.env` file is exposed due to improper server configuration, and it contains sensitive information. Specifically, it contains a flag.

**Flag Format:**  
SecurinetsISETZG{fake_flag_for_this_task}

## Instructions

1. Start the application using Docker:
    - Build the Docker container with `docker-compose up --build`.
    - Access the application at `http://localhost`.

2. Your goal is to find the `.env` file and extract the flag.

**Hint:**  
The `.env` file is accessible due to a misconfiguration. Try accessing the file directly through the URL by navigating to `http://localhost/.env`.

Good luck!
