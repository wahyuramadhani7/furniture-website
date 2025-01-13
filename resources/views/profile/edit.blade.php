<x-app-layout>
    <style>
        body {
            background-image: url('{{ asset("images/furniture.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Styling untuk header section */
        .header-section {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://source.unsplash.com/random/1200x400/?furniture');
            background-size: cover;
            background-position: center;
            padding: 4rem 2rem;
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            border-radius: 8px;
        }

        .header-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: white;
        }

        .header-description {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Styling untuk card sections */
        .profile-section {
            background: white;
            border-radius: 8px;
            padding: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .section-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }

        /* Form styling */
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
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: #1565ed;
            box-shadow: 0 0 0 2px rgba(21, 101, 237, 0.1);
        }

        /* Button styling */
        .btn-primary {
            background: #1565ed;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-primary:hover {
            background-color: #1151c3;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-danger:hover {
            background-color: #b91c1c;
        }

        /* Container styling */
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }
    </style>

    <!-- Header Section -->
    <div class="header-section">
        <h2 class="header-title">
            {{ __('Profile Settings') }}
        </h2>
        <p class="header-description">Kelola informasi profil dan pengaturan akun Anda</p>
    </div>

    <div class="content-container">
        <div class="space-y-6">
            <!-- Profile Information Section -->
            <div class="profile-section">
                <h3 class="section-title">Informasi Profil</h3>
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <!-- Update Password Section -->
            <div class="profile-section">
                <h3 class="section-title">Update Password</h3>
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Delete Account Section -->
            <div class="profile-section">
                <h3 class="section-title">Hapus Akun</h3>
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>