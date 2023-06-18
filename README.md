## Step 1:

Clone this repo

## Step 2:

Open the terminal in the project's directory and perform the following steps:

1. composer install
2. npm install
3. @php -r "file_exists('.env') || copy('.env.example', '.env'); (This is create ".env" in the root of project)
4. @php artisan key:generate --ansi (This command generates a key needed by Laravel)
5. php artisan serve (This command start built-in server and generates a URL, copy and paste that in .env file against "APP_URL" key)

## Step 3:
npm run dev


## Note:
The menu page does not work because following Primevue components are tightly coupled with vue-router library while
inertia.js has it own "Link" component that functions like a router library, hence does not need vue-router or any 
other library for routing. However, if an option is given while configuring Primevue in main.js/main.ts regarding which
routing library (vue-router, inertia, ...) is required for this project, this issue can be resolved.
- BreadcrumbItem
- ContextMenuSub
- DockSub
- MegaMenuSub
- MenuItem
- MenubarSub
- Steps
- TabMenu
- TieredMenuSub


