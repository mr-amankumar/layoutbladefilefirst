@include('pages.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 style="text-align: center">Laravel Web App</h3>
                <span> <a href="/">Home Page</a></span> &nbsp &nbsp <span> <a href="/about">About Page</a></span>
                <span> <a href="/contact"> &nbsp Contact Page</a></span>
                <article>
                    <h3 style="text-align: center;color:lime">About Page</h3>
                    <p style="text-align: justify">Welcome to our website! Dive into a world of engaging and diverse
                        content, from insightful articles to the latest trends. Join our vibrant community, share your
                        ideas, and stay informed with up-to-date information. Discover, connect, and enhance your
                        knowledge with us.</p>

                </article>
            </div>
        </div>
    </div>
</body>

</html>

@include('pages.footer')
