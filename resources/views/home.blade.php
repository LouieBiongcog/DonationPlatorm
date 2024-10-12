<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container text-center py-5">
        <h1 class="display-4 text-primary mb-4">Welcome to the Donation Platform</h1>
        <p class="lead text-light mb-5">Make donations and support causes you care about.</p>


        <a href="{{ route('donations.index') }}" class="btn btn-outline-primary btn-lg me-3 shadow-sm transform-hover">
            View Donations
        </a>


        <a href="{{ route('donations.create') }}" class="btn btn-outline-success btn-lg shadow-sm transform-hover">
            Create a Donation
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
