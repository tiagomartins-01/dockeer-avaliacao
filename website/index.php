<html>
    <head>
        <title>Loja</title>
    </head>

    <body>
        <h1>Bem Vindo(a)</h1>
        <h4>Produtos disponíveis:</h4>
        <ul>
            <?php

            $json = file_get_contents('http://product-service/');
            $obj = json_decode($json);
            $products = $obj->products;
            
            foreach ($products as $product) {
                echo "<li>$product</li>";
            }

            ?>
        </ul>
    </body>
</html>