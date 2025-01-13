<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            margin: 0;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            background-image: url('./images/furniture.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            backdrop-filter: blur(5px);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #333;
        }
        
        .form-input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.9);
        }
        
        .form-input:focus {
            outline: none;
            border-color: #1a73e8;
            box-shadow: 0 0 0 2px rgba(26, 115, 232, 0.2);
        }
        
        .error-message {
            color: #dc3545;
            font-size: 12px;
            margin-top: 5px;
        }
        
        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }
        
        .login-link {
            text-decoration: none;
            color: #1a73e8;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        
        .login-link:hover {
            color: #1557b0;
        }
        
        .register-button {
            background: #1a73e8;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .register-button:hover {
            background: #1557b0;
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="form-group">
                <label class="form-label" for="name">Name</label>
                <input class="form-input" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                <x-input-error class="error-message" :messages="$errors->get('name')" />
            </div>
            
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                <x-input-error class="error-message" :messages="$errors->get('email')" />
            </div>
            
            <div class="form-group">
                <label class="form-label" for="password">Password</label>
                <input class="form-input" id="password" type="password" name="password" required autocomplete="new-password" />
                <x-input-error class="error-message" :messages="$errors->get('password')" />
            </div>
            
            <div class="form-group">
                <label class="form-label" for="password_confirmation">Confirm Password</label>
                <input class="form-input" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error class="error-message" :messages="$errors->get('password_confirmation')" />
            </div>
            
            <div class="form-footer">
                <a class="login-link" href="{{ route('login') }}">Already registered?</a>
                <button class="register-button" type="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>