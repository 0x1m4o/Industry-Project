<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Project Overview
Final Project "Daftar Program" Web Application from Kelas Industri (Institut Kemandirian)

Technology :
- [Laravel](https://laravel.com/).
- [Bootstrap](https://getbootstrap.com/).
- [MySQL](https://www.mysql.com/)

Wireframe : https://whimsical.com/project-kelas-industri-NRuVR9tAUqHLubDgZUPrtW (Password : 12345678)

## Prerequisite
- Already install php and mysql using [xampp](https://www.apachefriends.org/download.html).
- Already install [composer](https://getcomposer.org/download/).
- Already install [npm](https://www.npmjs.com/package/npm).

## Step by step installation
#### 1. Clone this repository
```
git clone https://github.com/0x1m4o/Industry-Project.git
```
or 
#### Download the zip file
![download zip](https://github.com/0x1m4o/Industry-Project/blob/main/public/img/image.png)

#### 2. Go to directory 
```
cd Industry-Project
```

#### 3. Install dependency with composer and npm
```
composer install
```
```
npm install
```

#### 4. Copy the content of ```.env.example``` file then create ```.env``` file and paste to ```.env``` file

#### 5. Create Database with the same name as ```DB_DATABASE``` from   ```.env``` file

#### 6. Run migration
```
php artisan migrate:fresh --seed
```

#### 7. Link the storage to public folder
```
php artisan storage:link
```

#### 8. Start the server and vite
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
