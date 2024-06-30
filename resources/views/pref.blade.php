<!DOCTYPE html>
<html>
<head>
    <title>User Preferences</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">User Preferences</h1>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="/preferences" method="POST">
            @csrf
            <div class="form-group">
                <label for="language">Preferred Language:</label>
                <select class="form-control" id="language" name="language" required>
                    <option value="English" {{ $language == 'English' ? 'selected' : '' }}>English</option>
                    <option value="Spanish" {{ $language == 'Spanish' ? 'selected' : '' }}>Spanish</option>
                    <option value="French" {{ $language == 'French' ? 'selected' : '' }}>French</option>
                </select>
            </div>
            <div class="form-group">
                <label for="theme">Theme:</label>
                <select class="form-control" id="theme" name="theme" required>
                    <option value="Light" {{ $theme == 'Light' ? 'selected' : '' }}>Light</option>
                    <option value="Dark" {{ $theme == 'Dark' ? 'selected' : '' }}>Dark</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Save Preferences</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
