# Chosen Data

## Requirements

- PHP, MySQL and a webserver are required.

## Getting Started

### Step 1: Set WP env

Install only the theme and plugins using a WP instance from your preferred WP dev env tool (Local by flywheel, mamp, xampp).

- One WordPress is instaled, open the OS terminal and enter the Project path.
- Clone this project repo from the installed WP `ROOT` folder into a temp folder `git clone git@bitbucket.org:kronoscode/chosen-data.git temp`
- Merge the files from temp to current root folder, use in the `ROOT` `rsync -arvzP temp/* .`
- Also merge the hidden dotfiles `rsync -arvzP temp/.[^.]* .`
- Delete the temp `rm -rf temp/`

### Step 2: Pull/Sync DB from DEV Server

- Under WP Admin Panel go to `plugins` section and `activate` the plugins: `WP Sync DB` and `WP Sync DB Media Files`.
- Pull/Sync latest DB from DEV server: Go to `Tools/Migrate DB` and, on the `Migrate` Tab, choose `Pull` option and enter the DEV Server `connection info (Site URL + Secret key)`.
- Set desire options, ex. you would like to activate the `Media Files` to import images used on DEV Server.
- If your local env don't use `https` make sure to change `find/replace` options including the corresponding HTTP protocol.
- Did you forget to check if your local support `https`? You will need to access the `wordpress_db` DB, look into `[wpprefix]_options` table and change the option `siteurl` and `home` to use `http`.
- Save Migration Profile for future DB synchronization
- Press `Migrate DB and Save`.

