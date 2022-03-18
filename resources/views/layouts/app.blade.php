<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <main class="w-100 vh-100 d-flex align-items-center justify-content-center">
        <section class="w-100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 mx-auto">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
    </main>



</body>
</html>
