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
                    <h3 style="text-align: center;color:lime">Contact Page</h3>
                    <p style="text-align: justify">Contact us for any inquiries or collaborations. We're here to assist
                        you with our dedicated support. Reach out via email or phone, and let's connect to explore
                        opportunities together. We look forward to hearing from you!</p>

                </article>
            </div>
        </div>
    </div>
</body>

</html>

@include('pages.footer')
