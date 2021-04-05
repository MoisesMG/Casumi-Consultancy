# Casumi Consultancy

## Requirements

- PHP, MySQL and a webserver are required.

## Getting Started

### Step 1: Set WP env

Install only the theme and plugins using a WP instance from your preferred WP dev env tool (Local by flywheel, mamp, xampp).

- One WordPress is instaled, open the OS terminal and enter the Project path.
- Clone this project repo from the installed WP `ROOT` folder into a temp folder `git clone https://github.com/MoisesMG/Casumi-Consultancy.git temp`
- Merge the files from temp to current root folder, use in the `ROOT` `rsync -arvzP temp/* .`
- Also merge the hidden dotfiles `rsync -arvzP temp/.[^.]* .`
- Delete the temp `rm -rf temp/`

### Step 2: Import

- If you are using `WP-CL`, use in the `ROOT` `wp db import /wp-content/casumi-consultancy/backup/dev-local-db.sql`
- Search replace with your current local domain `wp search-replace 'http://casumi-consultancy.local' 'CURRENT-LOCAL-DOMAIN'`
- User admin is, `moises` and password `1234`. Also you can add a new admin user with `WP CLI`

