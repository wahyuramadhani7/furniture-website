<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Furniture Store</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            background-image: url('./images/furniture.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .header {
            background: #1565ed;
            padding: 1rem 2rem;
            color: white;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .brand {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 1.5rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-size: 1rem;
        }

        .main-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            width: 100%;
            box-sizing: border-box;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(5px);
            text-align: center;
        }

        .login-header {
            color: #1565ed;
            margin-bottom: 2rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #1565ed;
            box-shadow: 0 0 0 2px rgba(21, 101, 237, 0.2);
        }

        .remember-me {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .remember-me input {
            margin-right: 0.5rem;
        }

        .button {
            width: 100%;
            padding: 0.75rem;
            background: #1565ed;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 1rem;
        }

        .button:hover {
            background: #1557b0;
        }

        .links-container {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        .links-container a {
            color: #1565ed;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .links-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header class="header">
        <a href="/" class="brand">Furniture Store</a>
    </header>

    <main class="main-content">
        <div class="login-container">
            <div class="login-header">
                <h2>Login</h2>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                
                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-input" id="email" type="email" name="email" required autofocus>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-input" id="password" type="password" name="password" required>
                </div>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                
                <button type="submit" class="button">Log in</button>
                
                <div class="links-container">
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
