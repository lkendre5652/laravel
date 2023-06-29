<html>
    <head>
        <title>Product Page</title>
    </head>
    <body>
        <div class="container">
            {{ $prod_id }}
            <h1><?php echo $prod_id; ?></h1>
            <span> {{ $fname }} {{ $lname}}</span>
            <div class="product-outer"></div>
        </div>
    </body>
</html>