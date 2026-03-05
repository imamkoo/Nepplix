# 🎬 Nepplix

> A Netflix-inspired streaming platform — built as a full-stack MVP project.

[![Laravel](https://img.shields.io/badge/Laravel-12-red?logo=laravel)](https://laravel.com)
[![React](https://img.shields.io/badge/React-18-blue?logo=react)](https://reactjs.org)
[![PostgreSQL](https://img.shields.io/badge/PostgreSQL-16-blue?logo=postgresql)](https://postgresql.org)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE)

---

## 📌 About

**Nepplix** is a Netflix clone built for learning and portfolio purposes.
It covers the full cycle of a streaming platform: user authentication, movie catalog, video streaming, premium content gating, watchlist, and an admin panel for content management.

---

## 🧱 Tech Stack

| Layer | Technology |
|---|---|
| **Backend** | Laravel 12, Laravel Sanctum, Spatie Permission |
| **Frontend** | React 18, Inertia.js, Vite, Tailwind CSS |
| **Database** | PostgreSQL 16 |
| **Auth** | Laravel Breeze + Sanctum (API Token) |
| **RBAC** | Spatie Laravel Permission (free / premium / admin) |

---

## ✨ Features (MVP)

- 🔐 **Authentication** — Register, Login, Logout via Sanctum
- 👥 **Role-Based Access** — free, premium, admin (Spatie)
- 🎬 **Movie Catalog** — Grid view, pagination, genre filter
- 📄 **Movie Detail** — Description, trailer, Watch Now CTA
- 📺 **Video Streaming** — react-player with premium gate
- 🔍 **Search** — Search movies by title
- 📋 **Watchlist** — Add/remove, My List page
- 👤 **User Profile** — Edit name, avatar, change password
- 🛠 **Admin Panel** — Upload, edit, delete movies & genres

---

## 🚀 Getting Started

### Prerequisites
- PHP 8.2+, Composer, Node.js 18+, PostgreSQL 16

### Installation

```bash
git clone https://github.com/imamkoo/Nepplix.git && cd Nepplix
composer install && npm install
cp .env.example .env
# Set DB_CONNECTION=pgsql and credentials in .env
php artisan key:generate
php artisan migrate --seed
npm run dev & php artisan serve
```

---

## 🌿 Branch Strategy

| Branch | Purpose |
|---|---|
| `main` | Production-ready |
| `develop` | Integration branch |
| `feat/*` | Feature branches |
| `fix/*` | Bug fixes |
| `chore/*` | Config / setup tasks |

---

## 📋 Sprint Planning

| Sprint | Focus | Status |
|---|---|---|
| Sprint 1 | Infrastructure + Authentication + RBAC | 🔄 In Progress |
| Sprint 2 | Movie Catalog, Streaming, Search, Watchlist, Profile | ⏳ Planned |
| Sprint 3 | Admin Panel + Polish | ⏳ Planned |

---

## 📄 License

MIT © imamkoo
