## Step 1:

Clone this repo

## Step 2:

Open the terminal in the project's directory and perform the following steps:

1. composer install
2. npm install
3. @php -r "file_exists('.env') || copy('.env.example', '.env'); (This is create ".env" in the root of project)
4. @php artisan key:generate --ansi (This command generates a key needed by Laravel)
5. php artisan serve (This command start built-in server and generates a URL, copy this and past that in .env file againt "APP_URL" key)

## Step 3:
npm run dev
