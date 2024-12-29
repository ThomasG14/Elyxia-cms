# Elyxia CMS

Elyxia CMS is a modern, modular, and customizable content management system built with Symfony 7.2. Designed to be fast, flexible, and developer-friendly, it leverages the power of Symfony's ecosystem to provide an intuitive and scalable platform.

---

## 🚀 Features

- **Modular Architecture**: Easily add or remove features as needed.
- **Modern Design**: A clean, responsive, and user-friendly interface.
- **Powerful Back-End**: Built on Symfony 7.2, ensuring robustness and scalability.
- **Database Integration**: Uses MySQL for reliable and efficient data storage.
- **Customizable**: Adapt the CMS to fit any project's requirements.

---

## 🛠️ Technology Stack

- **Framework**: [Symfony 7.2](https://symfony.com/)
- **Database**: MySQL
- **Languages**: PHP 8.2+
- **Front-End**: Twig templates, Tailwind CSS

---

## 📦 Installation

### Prerequisites
Ensure you have the following installed:
- PHP 8.2 or higher
- Composer
- MySQL Server
- Git

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/elyxia-cms.git
   cd elyxia-cms
   ```

2. **Install dependencies**:
   ```bash
   composer install
   ```

3. **Set up the environment variables**:
   Copy the `.env` file and configure the database connection:
   ```bash
   cp .env .env.local
   ```
   Update the `DATABASE_URL` variable in `.env.local`:
   ```env
   DATABASE_URL="mysql://username:password@127.0.0.1:3306/elyxia_cms"
   ```

4. **Create the database**:
   ```bash
   php bin/console doctrine:database:create
   php bin/console doctrine:migrations:migrate
   ```

5. **Run the development server**:
   ```bash
   symfony server:start
   ```
   Access the CMS at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---
