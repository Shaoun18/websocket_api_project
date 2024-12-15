
## Instructions to Run the Project

1. **Clone the project source code** to your local machine:
   ```bash
   git clone https://github.com/yourusername/laravel-todo-list.git
   cd laravel-todo-list
   ```

2. **Install the required dependencies** by running the following command in the project directory:
   ```bash
   composer update
   ```

3. **Configure the database connection**:
   - Copy the `.env.example` file and rename it to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Open the `.env` file in a text editor and update the database configuration to match your local environment:
     ```bash
     DB_CONNECTION=sqlite
     DB_DATABASE=/path/to/database.sqlite
     ```
   - You may need to create the SQLite database file before running the application.

   ![Database Configuration](public/images/database-config.png)

4. **Generate an application key** by running the following command:
   ```bash
   php artisan key:generate
   ```

5. **Run the database migrations** to create the necessary tables by executing the following command:
   ```bash
   php artisan migrate
   ```

6. **Generate the user dataset using the seeder**:
   ```bash
   php artisan db:seed --class=UsersTableSeeder
   ```

7. **Start the Laravel development server**:
   ```bash
   php artisan serve
   ```

8. **In a separate terminal window, start the WebSocket server**:
   ```bash
   php artisan websocket:serve
   ```
   - Now connect to the WebSocket server at `ws://localhost:8080`.

9. **Run the Laravel queue worker**:
   ```bash
   php artisan queue:work
   ```

---

This setup adds clarity and visual aid to your instructions by guiding users on how to configure the database connection and showing them the corresponding screenshot.
