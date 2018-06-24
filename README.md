# SimpleAPP

# &#x1F34E; Installation 
- Clone repository
```
git clone https://github.com/kreativjamesz/SimpleAPP.git
```
- Copy .env.example file to .env and edit .env to configure your database
```
cd SimpleAPP
cp .env.example .env
```
- Install libraries and dependencies
```
composer install --no-scripts
```
- Generate application key, migrate and seed database
```
php artisan key:generate
php artisan migrate
php artisan db:seed
```
- Install npm packages & watch for changes
```
npm install
npm run watch
```
- Serve application. You may use Valet, Homestead or just
```
php artisan serve --port:8000
```