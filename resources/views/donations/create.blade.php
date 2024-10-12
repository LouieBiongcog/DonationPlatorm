<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        .transparent-container {
            background-color: rgba(255, 255, 255, 0.5);
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="display-5 text-primary mb-4">Create New Donation</h1>
        <div class="parent-container">
            <form action="{{ route('donations.store') }}" method="POST" class="transparent-container shadow-sm p-4 rounded">
                @csrf

                <div class="mb-3">
                    <label for="donor_name" class="form-label">Donor Name</label>
                    <input type="text" name="donor_name" id="donor_name" required
                           class="form-control" placeholder="Enter donor's name">
                </div>

                <div class="mb-3">
                    <label for="amount" class="form-label">Donation Amount (₱)</label>
                    <input type="number" name="amount" id="amount" step="0.01" required
                           class="form-control" placeholder="Enter donation amount">
                </div>

                <div class="mb-3">
                    <label for="message" class="form-label">Message (Optional)</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Leave a message..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary shadow-sm transform-hover">
                    Submit Donation
                </button>
                <a href="{{ route('donations.index') }}" class="btn btn-secondary ms-2 shadow-sm transform-hover">Cancel</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
