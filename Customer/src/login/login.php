<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #bbdefb);
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 400px;
            margin-top: 100px;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: #007bff;
            color: #fff;
            border-bottom: none;
            padding: 1.5rem;
            border-radius: 1rem 1rem 0 0;
            text-align: center;
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0.5rem;
            padding: 0.75rem 1.5rem;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .form-control {
            border-radius: 0.5rem;
            border-color: #ced4da;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }

        .alert {
            border-radius: 0.5rem;
        }

        .login-footer {
            text-align: center;
            margin-top: 1rem;
        }

        .login-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Login</h4>
            </div>
            <div class="card-body">
                <!-- Alert message for login errors (if any) -->
                <div class="alert alert-danger <?php echo isset($_GET['error']) ? '' : 'd-none'; ?>" role="alert" id="login-alert">
                    <strong>Error:</strong> Username atau password salah.
                </div>
                <form action="login_process.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-custom">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
