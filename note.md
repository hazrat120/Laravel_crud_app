Alright! Imagine you have a toy box, and you want to do four things with your toys:

1. **C**reate a toy (Add a new toy).
2. **R**ead a toy (See all your toys).
3. **U**pdate a toy (Change a toy's name).
4. **D**elete a toy (Remove a toy).

This is what a CRUD app does, but instead of toys, we use a database! Now, let’s build a Laravel CRUD app together.

---

## **Step 1: Install Laravel**

First, we need to set up Laravel. Open your terminal (or command prompt) and run:

```bash
composer create-project laravel/laravel my-crud-app
```

Now, go inside the folder:

```bash
cd my-crud-app
```

Start the Laravel server:

```bash
php artisan serve
```

Now, your Laravel app is running!

---

## **Step 2: Set Up the Database**

Go to `.env` file and change this part:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=my_crud_db
DB_USERNAME=root
DB_PASSWORD=
```

(Change `my_crud_db` to your database name.)

Then, create the database in MySQL.

---

## **Step 3: Create a Model, Migration & Controller**

Now, run this command:

```bash
php artisan make:model Toy -mcr
```

This will create:

1. A **Model** (`app/Models/Toy.php`) – Talks to the database.
2. A **Migration** (`database/migrations/xxxx_xx_xx_create_toys_table.php`) – Creates a table.
3. A **Controller** (`app/Http/Controllers/ToyController.php`) – Handles the logic.

---

## **Step 4: Define the Table Structure**

Open the migration file in `database/migrations/` and update it:

```php
public function up()
{
    Schema::create('toys', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description')->nullable();
        $table->timestamps();
    });
}
```

Now, run:

```bash
php artisan migrate
```

This will create a `toys` table in the database.

---

## **Step 5: Define the Model**

Open `app/Models/Toy.php` and add this:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
}
```

---

## **Step 6: Add Routes**

Open `routes/web.php` and add:

```php
use App\Http\Controllers\ToyController;

Route::resource('toys', ToyController::class);
```

---

## **Step 7: Write CRUD Methods in the Controller**

Open `app/Http/Controllers/ToyController.php` and update:

```php
namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    // Show all toys
    public function index()
    {
        $toys = Toy::all();
        return view('toys.index', compact('toys'));
    }

    // Show create form
    public function create()
    {
        return view('toys.create');
    }

    // Store new toy
    public function store(Request $request)
    {
        Toy::create($request->all());
        return redirect()->route('toys.index');
    }

    // Show edit form
    public function edit(Toy $toy)
    {
        return view('toys.edit', compact('toy'));
    }

    // Update toy
    public function update(Request $request, Toy $toy)
    {
        $toy->update($request->all());
        return redirect()->route('toys.index');
    }

    // Delete toy
    public function destroy(Toy $toy)
    {
        $toy->delete();
        return redirect()->route('toys.index');
    }
}
```

---

## **Step 8: Create Views**

Now, inside `resources/views/`, create a folder called `toys` and add these files:

### **1. Show All Toys (`index.blade.php`)**

```php
@extends('layout')

@section('content')
    <h1>My Toys</h1>
    <a href="{{ route('toys.create') }}">Add New Toy</a>
    <ul>
        @foreach($toys as $toy)
            <li>
                {{ $toy->name }} - {{ $toy->description }}
                <a href="{{ route('toys.edit', $toy->id) }}">Edit</a>
                <form action="{{ route('toys.destroy', $toy->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
```

---

### **2. Create a Toy (`create.blade.php`)**

```php
@extends('layout')

@section('content')
    <h1>Add a New Toy</h1>
    <form action="{{ route('toys.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Toy Name">
        <textarea name="description" placeholder="Toy Description"></textarea>
        <button type="submit">Save</button>
    </form>
@endsection
```

---

### **3. Edit a Toy (`edit.blade.php`)**

```php
@extends('layout')

@section('content')
    <h1>Edit Toy</h1>
    <form action="{{ route('toys.update', $toy->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $toy->name }}">
        <textarea name="description">{{ $toy->description }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection
```

---

### **4. Layout (`layout.blade.php`)**

```php
<!DOCTYPE html>
<html>
<head>
    <title>My Toy Box</title>
</head>
<body>
    @yield('content')
</body>
</html>
```

---

## **Step 9: Run the App!**

Start the server again:

```bash
php artisan serve
```

Now, open [http://127.0.0.1:8000/toys](http://127.0.0.1:8000/toys) in your browser! 🎉

You can now:  
✅ Add a toy 🧸  
✅ View all toys 📝  
✅ Edit a toy 🛠  
✅ Delete a toy ❌

That's it! You just built a **Laravel CRUD app** like a pro! 🚀
