#!/bin/bash
echo "Building Docker image..."
docker build -t project-phoenix:test .

echo "Starting container..."
docker run -d -p 8081:80 --name test-container project-phoenix:test

echo "Waiting for container to start..."
sleep 5

echo "Checking container status..."
docker ps

echo "Checking logs..."
docker logs test-container

echo "Testing application..."
curl -v http://localhost:8081/health || echo "Curl failed"

echo "Cleaning up..."
docker stop test-container
docker rm test-container