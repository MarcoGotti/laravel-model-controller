# STEP BY STEP

### Install Laravel

```bash
composer create-project laravel/laravel:^10.0 project_name
cd project_name

php artisan serve
```

---

### Install dependencies for Frontend

```bash
npm i

npm run dev
```

---

## Setup

Rename `welcome.blade.php` in `home.blade.php`

```bash
cd resources/views
# rename file with terminal
mv welcome.blade.php home.blade.php
```

---

if the route has changed, update the view accordingly

```php
Route::get('/', function () {
    return view('home');
});
```

---

## Define layout file

take the welcome content and put it in a new file `app.blade.php`

```bash
cd resources/views
mkdir layouts
cp welcome.blade.php layouts/app.blade.php

(touch app.blade.php)
```

---

## Clean Laravel template in app.blade.php,

# add frontend-assets @vite()

# and placeholder(segnaposto) @yield()

```php
<head>
    <style></style> ...clean it
    @vite(['resources/css/app.css', 'resources/js/app.js'])  ...add
</head>
---

<body>
    <div></div> ...clean it
</body>
---

<body>
    <header></header> ...add
    <main>
        @yield('content')  ...add
    </main>
    <footer></footer>  ...add
</body>
```

---

## Create a home.blade.php and @extends

```php
// home.blade.php

@extends('layouts.app')

@section('content')
//MarkUp
@endsection
```

---

## Create a folder for partials

```bash
cd resources/views
mkdir partials
cd partials
touch header.blade.php
touch footer.blade.php
```

---

## Create partials for header and footer

```php
<body class="antialiased">

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
```

---

## Fill the partials with MarkUp

```php
// partials/header.blade.php
<header>header</header>
```

```php
// partials/footer.blade.php
<footer>footer</footer>
```

---

## add other pages

1. # add new route inside web.php

```php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
```

2. # Create corresponding view

```bash
cd resources/views
touch about.blade.php
```

3. # Use the main layout layouts/app and extend it in the new page

```php
// about.blade.php

@extends('layouts.app')

@section('content')
//MarkUp
@endsection
```

---

## Pass datas to a view

1. # using compact()

```php
Route::get('/', function () {

    $posts = array(
        array('id' => 1, 'title' => 'post1', 'content' => 'this is the first post'),
        array('id' => 2, 'title' => 'post2', 'content' => 'this is the first post'),
        array('id' => 3, 'title' => 'post3', 'content' => 'this is the first post'),
    );

    return view('home', compact('posts'));
});
```

2. # Using variable call-back directly

```php
Route::get('/', function () {

    $data = [
        'posts' => [
            array('id' => 1, 'title' => 'post1', 'content' => 'this is the first post'),
            array('id' => 2, 'title' => 'post2', 'content' => 'this is the first post'),
            array('id' => 3, 'title' => 'post3', 'content' => 'this is the first post'),
        ];
    ]

    return view('home', $data);
});
```

---

## Print the data in a view (es: home.blade.php)

```php
@section('content')
<h1>Home Page</h1>

@foreach($posts as $post)

<div>
    {{$post['title']}}
</div>

@endforeach
@endsection
```

---

## use config helper function to pass datas in the routes

while still not knowing how to link a db with Laravel, we use the function `config/` that points the folder config and returns the datas inside

```bash
cd config
touch data.php
```

```php
// inside new file config/data.php.
return [

    'key' => 'value',
    'key' => 'value',
    'products' => [],

    'posts' => array(
        array('id' => 1, 'title' => 'post1', 'content' => 'this is the first post'),
        array('id' => 2, 'title' => 'post2', 'content' => 'this is the first post'),
        array('id' => 3, 'title' => 'post3', 'content' => 'this is the first post'),
    ),

    'key' => 'value',
    'key' => 'value',
    'key' => 'value',

];
```

```php
//Import datas' array in route. web.php
// First way
Route::get('/products', function () {

    //config(fileName.key)
    $pasta = config('data.products');
    //dd($pasta);

    return  view('guests.products', compact('pasta'));
})->name('products');


// Second way
Route::get('/products', function () {

    //dd(config('data.products'));

    return  view('guests.products', ['pasta' => config('data.products')]);
})->name('products');

```
