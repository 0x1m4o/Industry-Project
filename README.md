<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Installation
Final Project "Daftar Program" Web Application from Kelas Industri (Institut Kemandirian)

Technology :
- [Laravel](https://laravel.com/).
- [Bootstrap](https://getbootstrap.com/).

## Prerequisite
- Already install php and mysql using [xampp](https://www.apachefriends.org/download.html).
- Already install [Composer](https://getcomposer.org/download/).

## Step by step running project
### 1. Clone this repository
```
git clone https://github.com/0x1m4o/Industry-Project.git
```
or 
### Download the zip file
![download zip](https://github.com/0x1m4o/Industry-Project/blob/main/public/img/image.png)

#### 2. Go to directory 
```
cd Industry-Project
```

### 3. Install dependency with composer
```
composer install
```

### 4. Install dependency with npm
```
npm install
```

### 5. Copy the content of ```.env.example``` file then create ```.env``` file and paste to ```.env``` file

### 6. Create Database with the same name as ```DB_DATABASE``` from   ```.env``` file

### 7. Run migration
```
php artisan migrate:fresh --seed
```

### 8. Link the storage to public folder
```
php artisan storage:link
```

### 9. Start the server and vite
```
php artisan serve
```
```
npm run dev
```

## Authors

- [@badzlan](https://github.com/badzlan)
- [@MitsukiSaiga](https://github.com/MitsukiSaiga)
- [@ridwanalfarezi](https://github.com/ridwanalfarezi)
- [@iyanSGN](https://github.com/iyanSGN)
- [@0x1m4o](https://github.com/0x1m4o)
