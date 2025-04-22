<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif


    </body>
    <nav>
        <a href="/">Home</a>
        <a href="/">About</a>
        <a href="/">Contact</a>
    </nav>

    <h1>Welcome to laravel home page</h1>

<body>
    <?php echo $slot; ?>
</body>

</html>
