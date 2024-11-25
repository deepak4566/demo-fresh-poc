#!/bin/bash

# Print starting message
echo "I am starting the game now"

# Check if the directory exists

cd /var/www/html/freshog.cottonseeds.org

# mkdir passing-working-fine
# Pull latest changes from git repository with sudo permissions
git pull || { echo "Git pull failed"; exit 1; }

# Prompt for paraphrase
echo "Enter a paraphrase for the pull operation:"
read -r paraphrase

# Print the paraphrase to confirm
echo "You entered the paraphrase: $paraphrase"

# Continue with further operations, if any
