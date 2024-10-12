<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations List</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .transparent-table {
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="display-5 text-primary mb-4">All Donations</h1>

        <a href="{{ route('donations.create') }}" class="btn btn-outline-success mb-3 shadow-sm transform-hover">
            Create a Donation
        </a>

        @if($donations->isNotEmpty())
        <table class="table table-striped table-hover table-bordered shadow-sm transparent-table">
            <thead class="table-dark">
                <tr>
                    <th>Donor Name</th>
                    <th>Amount (₱)</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->donor_name }}</td>
                    <td>{{ $donation->amount }}</td>
                    <td>{{ $donation->message ?? 'No message' }}</td>
                    <td>
                        <a href="{{ route('donations.edit', $donation->id) }}" class="btn btn-outline-primary btn-sm me-1 shadow-sm">Edit</a>
                        <form action="{{ route('donations.destroy', $donation->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm shadow-sm" onclick="return confirm('Are you sure you want to delete this donation?')">
                                Delete
                            </button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-light">No donations available. <a href="{{ route('donations.create') }}" class="text-primary">Create one</a> now!</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
