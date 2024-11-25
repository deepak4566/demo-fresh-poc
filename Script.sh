#!/bin/bash

# Print starting message
echo "I am starting the game now"

# Check if the directory exists
mkdir ppp

cd demo-fresh-poc
# Pull latest changes from git repository with sudo permissions
sudo git pull || { echo "Git pull failed"; exit 1; }

# Prompt for paraphrase
echo "Enter a paraphrase for the pull operation:"
read -r paraphrase

# Print the paraphrase to confirm
echo "You entered the paraphrase: $paraphrase"

# Continue with further operations, if any
