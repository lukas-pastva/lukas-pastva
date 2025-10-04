# Repository Guidelines

## Project Structure & Module Organization
- `src/index.php`: Main PHP entrypoint rendering `cv.yaml`.
- `src/Dockerfile`: PHP 8 + Apache image with `yaml` extension.
- `cv.yaml`: CV data consumed by `index.php` (root key `lukas-pastva`).
- `.github/workflows/build.yaml`: CI to build and push Docker image.
- `README.md`: Project overview and links.

## Build, Test, and Development Commands
- Build (from repo root): `docker build -f src/Dockerfile -t lukas-pastva-cv .`
- Run locally: `docker run --rm -p 8080:80 lukas-pastva-cv`
- Live-edit YAML: `docker run --rm -p 8080:80 -v "$PWD/cv.yaml:/var/www/html/cv.yaml:ro" lukas-pastva-cv`
- Quick check: `curl -s localhost:8080 | head`
- CI: pushes to `main` trigger build and push to Docker Hub (`lukaspastva/<repo>`). Secrets: `DOCKER_HUB_USERNAME`, `DOCKER_HUB_PASSWORD`.

## Coding Style & Naming Conventions
- PHP 8, plain PHP + HTML/CSS; no framework.
- Indentation: 4 spaces; UTF-8; LF line endings.
- Variables/functions: `snake_case`; constants: `UPPER_SNAKE_CASE`.
- Escape output with `htmlspecialchars`; keep logic minimal in `index.php`.
- Keep assets inline or add under `src/` if needed.

## Testing Guidelines
- No formal test suite; use manual smoke tests.
- Validate YAML loads (no "Failed to load CV data."), page renders, and key sections appear.
- If adding logic, prefer small, testable PHP functions and consider introducing lightweight tests later.

## Commit & Pull Request Guidelines
- Use Conventional Commits (seen in history: `feat: cv`).
  - Examples: `feat: update cv.yaml skills`, `fix: Dockerfile build context`.
- PRs: include clear description, linked issue (if any), before/after screenshot of the page, and ensure CI is green.

## Security & Configuration Tips
- Docker build context: build from repo root so `cv.yaml` is included (`-f src/Dockerfile .`).
- Do not commit secrets. Manage Docker Hub creds via GitHub Actions secrets.
- The site includes a Google Analytics tag; avoid leaking IDs or tokens in logs.
