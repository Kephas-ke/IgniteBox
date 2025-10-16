
---

## ⚙️ Prerequisites

Before starting, ensure you have:

-  **Docker & Docker Compose** installed
-  **Git** for version control
- **VS Code** (recommended, with workspace settings already configured)
- 🐘 **PHP 8.4** and **Composer** *(optional for manual backend testing)*
-  **Node 20+** and **npm / pnpm / yarn** *(optional for manual frontend testing)*

---

## Environment Variables

### Backend (`backend/.env`)
```ini
app.baseURL = 'http://localhost:8080'
database.default.hostname = db
database.default.database = app_db
database.default.username = app_user
database.default.password = app_pass
database.default.DBDriver = MySQLi
