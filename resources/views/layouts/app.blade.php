<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Traditional Korean inspired styles */
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Gowun Batang', serif; /* Traditional Korean font */
        }
        body {
            background-color: #faf3e0; /* Soft pastel beige */
            color: #333;
        }
        .navbar {
            background-color: #b09c7d; /* Earthy, muted tones */
            border-bottom: 2px solid #8d6c56; /* Traditional brown border for structure */
        }
        .navbar-brand {
            color: #583e2e; /* Dark brown text, inspired by hanji paper */
            font-size: 28px;
            font-weight: 700;
            margin-right: 40px;
            margin-left: 40px; /* Shift brand text to the right */
        }
        .nav-link {
            color: #fff;
            font-size: 16px;
            font-weight: 500;
            margin-left: 20px;
            padding: 10px;
            text-transform: none;
            border-radius: 5px;
            background-color: #b09c7d; /* Blend with navbar */
        }
        .nav-link:hover {
            background-color: #8d6c56; /* Darker brown hover effect */
        }
        .container {
            background-color: #ffffffc4; /* Clean white like hanji paper */
            border: 1px solid #d9c3ad;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            margin-top: 50px;
            margin-left: auto;
            margin-right: auto;
            max-width: 800px; /* More centralized and compact layout */
        }
        h1, h2, h3, h4, h5, h6 {
            color: #583e2e; /* Elegant brown for headlines */
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-korean {
            background-color: #8d6c56;
            color: #fff;
            font-size: 16px;
            padding: 10px 30px;
            border-radius: 30px;
            border: 2px solid #583e2e;
            text-transform: none;
            transition: all 0.3s;
            display: block;
            margin: 20px auto;
        }
        .btn-korean:hover {
            background-color: #b09c7d;
            color: #333;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#" style="padding-left: 30px;">Web Risa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" style="padding-right: 30px;">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('article') }}">Projects</a></li>
            </ul>
        </div>
    </nav>
    

    <div class="container mt-4">
        <h1>@yield('content-title')</h1>
        @yield('content')        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
