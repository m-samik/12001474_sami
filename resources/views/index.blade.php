<!DOCTYPE html>
<html>
<head>
    <title>News Articles</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">News Articles</h1>
        
        @if (!$promoViewed)
            <div class="alert alert-info" id="promo-banner">
                <h4>Promotion Banner Can be here</h4>
                <p>Check out our latest offers and discounts. Don't miss out!</p>
                <button class="btn btn-primary" onclick="hideBanner()">Got it!</button>
            </div>
        @endif

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{{ $article['title'] }}</h2>
                            <p class="card-text">{{ $article['content'] }}</p>
                            <p class="card-text"><small class="text-muted"><strong>Author:</strong> {{ $article['author'] }}</small></p>
                            <p class="card-text"><small class="text-muted"><strong>Date:</strong> {{ $article['date'] }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script>
        function hideBanner() {
            document.getElementById('promo-banner').style.display = 'none';

            document.cookie = "promo_viewed=true; path=/; max-age=" + (60*60*24*30);  // 30 days
        }
    </script>
</body>
</html>
