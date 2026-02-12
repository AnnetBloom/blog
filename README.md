## Features

- ✅ User authentication (Laravel Breeze)
- ✅ CRUD operations for blog posts
- ✅ REST API endpoints
- ✅ Authorization (users can only edit/delete their own posts)
- ✅ Responsive design (Tailwind CSS)

## Tech Stack

- **Backend:** Laravel 12, PHP 8.5
- **Database:** MySQL 8.0
- **Frontend:** Blade templates, Tailwind CSS
- **Authentication:** Laravel Breeze

## Installation

1. Clone the repository:
```bash
git clone https://github.com/AnnetBloom/blog
cd laravel-blog
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up database in `.env` file and run migrations:
```bash
php artisan migrate
```

5. Start development server:
```bash
php artisan serve
npm run dev
```

## API Endpoints

- `GET /api/posts` - Get all posts
- `POST /api/posts` - Create a new post
- `GET /api/posts/{id}` - Get a specific post
- `PUT /api/posts/{id}` - Update a post
- `DELETE /api/posts/{id}` - Delete a post

