# Flyrank-Api

A minimal Laravel backend exposing two JSON endpoints, built as part of the FlyRank AI Internship (Backend AI Engineering track).

## Endpoints

| Method | Endpoint       | Description                          |
|--------|----------------|---------------------------------------|
| GET    | `/api/hello`   | Returns a simple greeting message and successful status    |
| GET    | `/api/status`  | Returns server status , current time and successful status|

## Requirements

- PHP >= 8.4
- Composer
- Laravel 13

## How to Run Locally

1. **Clone the repository**
   ```bash
   git clone https://github.com/mohamedabdullah999/FlyRank-Api.git
   cd FlyRank-Api
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Set up environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Start the development server**
   ```bash
   php artisan serve
   ```
   The server will run at: `http://127.0.0.1:8000`

## How to Test the Endpoints

### Option 1: From the Browser
Open your browser and visit:
- http://127.0.0.1:8000/api/hello
- http://127.0.0.1:8000/api/status

You should see a JSON response rendered directly in the page.

### Option 2: From the Terminal (curl)
With the server running, open a **new terminal tab** and run:

```bash
curl http://127.0.0.1:8000/api/hello
```
Expected output:
```json
{"message":"Hello World"}
```

```bash
curl http://127.0.0.1:8000/api/status
```
Expected output:
```json
{"status":"ok","time":"2026-07-11 15:30:00"}
```

### Option 3: Pretty-printed curl output (optional)
If you have `jq` installed, you can format the output nicely:
```bash
curl -s http://127.0.0.1:8000/api/hello | jq
```

## Project Structure

```
BE-01-first-api/
├── routes/
│   └── api.php      # Contains the two endpoint definitions
├── .env.example
├── composer.json
└── README.md
```

## Notes

Built and tested locally as part of Week 1 assignment (Backend AI Engineering track).