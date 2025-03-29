URL Shortening Service 
A simple RESTful API for shortening URLs, retrieving original links, updating short links, deleting them, and tracking their access statistics.  

**Features**
✔️ Shorten long URLs  
✔️ Retrieve original URLs from short codes  
✔️ Update short URLs  
✔️ Delete short URLs  
✔️ Track access statistics  

Tech Stack
- Backend:Laravel  
- Database: MySQL  
- API Standard: RESTful  

## Installation & Setup

### 1. Clone the Repository
```sh
git clone https://github.com/yourusername/url-shortener.git
cd url-shortener
```

### 2. Install Dependencies
```sh
composer install
```

### 3. Set Up Environment Variables 
Copy `.env.example` to `.env` and update database credentials:  
```sh
cp .env.example .env
```
Modify the `.env` file:  
```env
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

4. Generate Application Key 
```sh
php artisan key:generate
```

### **5. Run Database Migrations**  
```sh
php artisan migrate
```

### **6. Start the Server**  
```sh
php artisan serve
```

---

## **API Endpoints**  

### **1. Create Short URL**  
**Endpoint:** `POST /api/shorten`  
**Request Body:**  
```json
{
  "url": "https://www.example.com/some/long/url"
}
```
**Response:**  
```json
{
  "id": 1,
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2025-03-29T12:00:00Z",
  "updatedAt": "2025-03-29T12:00:00Z"
}
```

---

### **2. Retrieve Original URL**  
**Endpoint:** `GET /api/shorten/{code}`  
**Response:**  
```json
{
  "id": 1,
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2025-03-29T12:00:00Z",
  "updatedAt": "2025-03-29T12:00:00Z"
}
```

---

### **3. Update Short URL**  
**Endpoint:** `PUT /api/shorten/{code}`  
**Request Body:**  
```json
{
  "url": "https://www.example.com/some/updated/url"
}
```
**Response:**  
```json
{
  "id": 1,
  "url": "https://www.example.com/some/updated/url",
  "shortCode": "abc123",
  "createdAt": "2025-03-29T12:00:00Z",
  "updatedAt": "2025-03-29T12:30:00Z"
}
```

---

### **4. Delete Short URL**  
**Endpoint:** `DELETE /api/shorten/{code}`  
**Response:**  
- `204 No Content` (if successfully deleted)  
- `404 Not Found` (if the short URL does not exist)  

---

### **5. Get URL Statistics**  
**Endpoint:** `GET /api/shorten/{code}/stats`  
**Response:**  
```json
{
  "id": 1,
  "url": "https://www.example.com/some/long/url",
  "shortCode": "abc123",
  "createdAt": "2025-03-29T12:00:00Z",
  "updatedAt": "2025-03-29T12:00:00Z",
  "accessCount": 10
}
```

---

Code Structure 
```
app/
│── Http/
│   ├── Controllers/
│   │   ├── ShortUrlController.php
│   ├── Services/
│   │   ├── ShortUrlService.php
│── Models/
│   ├── ShortUrl.php
database/
│── migrations/
routes/
│── api.php
.env
composer.json
```

---

Testing the API
You can test the API using:  
- Postman  
- cURL
- Laravel Artisan Tinker


curl -X POST http://localhost:8000/api/shorten -H "Content-Type: application/json" -d '{"url": "https://www.example.com"}'

License
This project is open-source and available under the MIT License.  
