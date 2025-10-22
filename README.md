# 🇧🇪 Belgium Dynamic Website

A small dynamic and static website showcasing Belgian cities, monuments, and useful links — built with HTML, CSS, JavaScript, PHP, and (optionally) Hack/HHVM.
Developed a newsletter system and implemented database connectivity using MySQL and XAMPP to enhance interactivity and data management.
This README provides clear development, run, and contribution instructions to help you get started quickly. 🚀

---

## 📌 Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Repository Structure](#repository-structure)
- [Prerequisites](#prerequisites)
- [Quick Start — Static](#quick-start---static)
- [Quick Start — PHP Backend](#quick-start---php-backend)
- [Quick Start — Hack / HHVM Backend](#quick-start---hack--hhvm-backend)
- [Recommended Improvements](#recommended-improvements)
- [Contributing](#contributing)
- [Security](#security)
- [License](#license)
- [Contact](#contact)

---

## About

This project contains a website about Belgium with multiple HTML pages (city pages, monuments, projects, useful links, contact page) and a dynamic portion in the `Partie_dnamique/` directory. It is intended as a demo or learning project and can be used as a lightweight informational site.

---

## Features

- Static pages for cities, monuments, and projects 🏙️  
- Contact page with form (requires backend handling to process submissions) ✉️  
- Image assets and CSS styling 🎨  
- Server-side code present in `Partie_dnamique/` (PHP and possibly Hack/HHVM) ⚙️

---

## Tech Stack

- HTML5  
- CSS3  
- JavaScript (vanilla)  
- PHP (standard)  
- Hack (HHVM) — optional, only if using Hack files in the dynamic folder  
- Optional: GitHub Pages for static hosting 🌐

---

## Repository Structure

High-level layout:

- /.vscode/ — editor settings (optional)  
- /Partie_dnamique/ — dynamic/backend code (PHP/Hack)  
- /css/ — stylesheets  
- /js/ — JavaScript files  
- /img/ — image assets  
- index_projet.html — project index page  
- index_ville.html — city index page  
- site_monument.html — monument page  
- contact.html — contact page  
- lien_utile.html — useful links page  
- nous_info.html — about / info page  
- README.md — this file

---

## Prerequisites

Choose one runtime depending on whether you want to run static pages, PHP, or Hack:

- Static pages:
  - Any modern browser
  - (Optional) Python or Node for a local static server

- PHP backend:
  - PHP 7.4+ installed (https://www.php.net/)
  - (Optional) Composer if you add dependencies later

- Hack / HHVM backend:
  - HHVM installed and configured (https://docs.hhvm.com/)
  - Hack files require HHVM and cannot run on standard PHP

---

## Quick Start — Static

1. Clone the repository:
   ```bash
   git clone https://github.com/abdessamad-chahbi/belgium-dynamic-website.git
   cd belgium-dynamic-website
   ```

2. Serve locally with Python:
   ```bash
   python3 -m http.server 8000
   # Open http://localhost:8000/index_ville.html or index_projet.html
   ```

3. Or serve with Node (serve):
   ```bash
   npx serve .
   ```

This is the easiest way to preview static HTML/CSS/JS pages.

---

## Quick Start — PHP Backend

If the contact form or other pages require PHP processing:

1. Ensure PHP is installed:
   ```bash
   php -v
   ```

2. Run the built-in PHP server from the project root:
   ```bash
   php -S 127.0.0.1:8000
   # Visit http://127.0.0.1:8000/contact.html or the page that posts to PHP handlers
   ```

3. Update form actions to point to the correct PHP endpoints (e.g., `/Partie_dnamique/process_form.php`).

4. Recommended: Use a `.env` or config file for sensitive settings and add it to `.gitignore`.

---

## Quick Start — Hack / HHVM Backend

If the project uses Hack files in `Partie_dnamique/`, HHVM is required.

1. Install HHVM: follow instructions at https://docs.hhvm.com/  
2. Serve the project with HHVM (example command — consult HHVM docs for your version):
   ```bash
   hhvm -m server -p 8080 -d hhvm.server.source_root=$(pwd)
   # Then open http://localhost:8080/
   ```

3. Verify Hack files use the `<?hh` header and that routes point to HHVM handlers.

---

## Recommended Improvements (roadmap) ✅

- Add input validation and server-side sanitization for forms (security) 🔒  
- Add linters and GitHub Actions for basic checks (HTML/CSS/JS, php -l) ⚙️  
- Optimize images (compress, consider WebP) and minify assets for performance 🖼️  
- Improve accessibility (alt attributes, semantic HTML, ARIA where needed) ♿

---

## Contributing

Contributions are welcome! Suggested workflow:

1. Fork the repository  
2. Create a feature branch:
   ```bash
   git checkout -b feature/short-description
   ```
3. Make changes, commit with clear messages:
   ```bash
   git commit -m "feat: add X"
   ```
4. Push and open a Pull Request
---

## Security

- Do not commit secrets (API keys, passwords). Use environment variables or `.env` and add `.env` to `.gitignore`.  
- Validate and sanitize all user input server-side.  
- Escape output to prevent XSS. Use prepared statements for database interactions to prevent SQL injection.  
- Avoid exposing debug information in production.

---

## License

This repository currently does not include a license file. It is recommended to add a LICENSE (for example, MIT) to clarify reuse and distribution rights. 📜

---

## Contact

Owner: abdessamad-chahbi  
GitHub: https://github.com/abdessamad-chahbi

Thank you for visiting this project! 🙌
