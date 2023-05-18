# Tugas Project PBW 

Diky Wahyudi - 2108107010031
Rama Daniainsyah - 2108107010057

# Cara Penggunaan 

## Clone repository terlebih dahulu

### Menggunakan HTTPS
```bash
git clone https://github.com/toosakarin1412/SIA-USK.git 
```

### Mengunakan SSH
```bash
git clone git@github.com:toosakarin1412/SIA-USK.git
```

## Masuk ke dalam folder project laravel
```bash
cd SIA-USK
```

## Install Depedency pada project laravel
```bash
composer install
```

```bash
npm install
```

## Buat file .env dari .env.example
```bash
cp .env.example .env
```

## Generate Key Pada Project Laravel
```bash
php artisan key:generate
```

## Lakukan migration dan seeding
```bash
php artisan migrate:refresh --seed
```

## Jalankan server laravel dan node js
```bash
php artisan serve
```

```bash
npm run dev
```

## Buka Aplikasi pada http://127.0.0.1:8000/