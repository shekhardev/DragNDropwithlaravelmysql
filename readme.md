
Laravel: drag-and-drop repositioning with auto-save of DB entries

Use case: Database entries are represented in a table. By grabbing and moving a row up or down the table, you can change the entries' order/position. The changes are submitted automatically via axios and Vue.

Uses Vue.Draggable: 
  Installation



clone the repo and cd into it
composer install
rename or copy .env.example file to .env
Enter your database credentials in your .env file
php artisan migrate
php artisan key:generate
npm install
npm install vuedraggable
npm run dev
php artisan serve 
Visit localhost:8000 in your browser
