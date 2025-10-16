# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Architecture

**IgniteBox** is a full-stack web application using a containerized architecture:

- **Backend**: CodeIgniter 4 (PHP 8.4) framework with MVC architecture
- **Frontend**: Node.js-based application (likely React/Next.js based on VS Code config)
- **Database**: MySQL 8.4
- **Infrastructure**: Docker Compose with separate containers for backend, frontend, nginx, and database

### Directory Structure

```
IgniteBox/
├── Backend/                     # CodeIgniter 4 PHP application
│   ├── src/                     # Main CI4 application
│   │   ├── app/                 # Application logic (MVC)
│   │   │   ├── Controllers/     # Controllers
│   │   │   ├── Models/          # Models
│   │   │   ├── Views/           # Views
│   │   │   ├── Config/          # Configuration files
│   │   │   └── Database/        # Migrations and seeds
│   │   ├── public/              # Web root (index.php)
│   │   ├── tests/               # PHPUnit tests
│   │   ├── writable/            # Writable directories (logs, cache)
│   │   └── spark                # CodeIgniter CLI tool
│   ├── Dockerfile               # Backend container setup
│   └── docker-compose.yml       # Backend-specific compose
├── Frontend/                    # Frontend application
│   └── Dockerfile               # Frontend container setup
└── docker-compose.yml           # Main orchestration file
```

## Development Commands

### Docker Operations
```bash
# Start all services
docker-compose up -d

# Start with logs
docker-compose up

# Stop services
docker-compose down

# Rebuild containers
docker-compose build --no-cache

# View logs
docker-compose logs -f [service_name]
```

### Backend (CodeIgniter 4)
```bash
# Execute commands in backend container
docker-compose exec backend bash

# Run CodeIgniter CLI (Spark)
docker-compose exec backend php spark

# Run migrations
docker-compose exec backend php spark migrate

# Create migration
docker-compose exec backend php spark make:migration CreateTableName

# Create controller
docker-compose exec backend php spark make:controller ControllerName

# Create model
docker-compose exec backend php spark make:model ModelName

# Run tests
docker-compose exec backend composer test
# OR
docker-compose exec backend ./vendor/bin/phpunit

# Install PHP dependencies
docker-compose exec backend composer install

# Update dependencies
docker-compose exec backend composer update
```

### Database Access
```bash
# Connect to MySQL container
docker-compose exec db mysql -u root -p

# Import SQL file
docker-compose exec -T db mysql -u root -p[password] [database] < file.sql

# Export database
docker-compose exec db mysqldump -u root -p[password] [database] > backup.sql
```

## Configuration

### Environment Variables
- Main environment variables are in `.env` at project root
- Backend-specific config in `Backend/src/env` (copy to `.env`)
- Database connection configured in `Backend/src/app/Config/Database.php`

### Service Endpoints
- **Frontend**: http://localhost:3000
- **Backend API**: http://localhost:8080
- **Database**: localhost:3306

### VS Code Configuration
The project includes optimized VS Code settings:
- PHP 8.4 with Intelephense
- Tailwind CSS support
- ESLint/Prettier for frontend
- Auto-formatting on save for PHP, JS, TS, React files
- Docker and GitLens extensions recommended

## Testing

### Backend Testing
- PHPUnit configured with `phpunit.xml.dist`
- Tests located in `Backend/src/tests/`
- Coverage reports generated in `build/logs/`
- Run tests: `composer test` or `./vendor/bin/phpunit`

### Test Database
Database testing can be configured by uncommenting test database settings in `phpunit.xml.dist`

## Architecture Notes

### CodeIgniter 4 Specific
- Uses modern PHP 8.1+ features
- MVC pattern with Controllers, Models, Views separation
- Database migrations in `app/Database/Migrations/`
- Routes defined in `app/Config/Routes.php`
- CLI commands available via `spark`

### Docker Architecture
- Multi-container setup with service separation
- Nginx as reverse proxy
- Separate networks for security
- Volume mounts for development hot-reload
- Persistent database storage

### Development Workflow
1. Backend development primarily in `Backend/src/app/`
2. Database changes via CodeIgniter migrations
3. Frontend development in `Frontend/` directory
4. Container-based development for consistency
5. VS Code workspace pre-configured for optimal DX