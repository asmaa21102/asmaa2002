<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: ltr;
            text-align: left;
        }
        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .menu-item {
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
            display: flex;
            align-items: center;
        }
        .menu-item img {
            max-width: 100px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Our Restaurant</h1>
    </header>

    <div class="container">
        <img src="https://mostaql.hsoubcdn.com/uploads/thumbnails/397023/610c1f10a67b1/%D9%84%D9%88%D8%AD%D8%A9-%D8%B5%D9%88%D8%B1-100-1201.jpg" alt="Restaurant" style="width:100%; height:300PX;">

        <h2>Menu</h2>
        <?php
        $menu_items = [
            ["name" => "Kebab Plate", "image" => "https://img.piri.net/resim/imagecrop/2018/12/21/10/36/resized_514bd-5fad6d2cb613e70fd9f59310cf0a8d33de3f2800.jpg","PRICE"=>"$15"],
            ["name" => "Grilled Mix", "image" =>"https://s3.eu-central-1.amazonaws.com/qatar-delicious/ItemsImages/ItemImage_7566_(0).jpg","PRICE"=>"$20"],
            ["name" => "PIZAA", "image" =>"https://elryad.com/ar/wp-content/uploads/2016/01/DSC00045-scaled-1-1024x683.jpg","PRICE"=>"$19"],
          ["name" => "Hummus Plate", "image" => "https://media.istockphoto.com/id/1160233750/tr/foto%C4%9Fraf/vegan-g%C4%B1da-humus-ile-plaka-hizmet-vermeye-haz%C4%B1r.jpg?s=1024x1024&w=is&k=20&c=IaVaLEo2s3t0GoDjp-ssUx5cCug9fnFjHOy0gt8qjgQ=","PRICE"=>"$10"]
        ];

        foreach ($menu_items as $item) {
            echo '<div class="menu-item">';
            echo '<img src="' . $item["image"] . '" alt="' . $item["name"] . '">';
            echo '<p>' . $item["name" ] . '-' . $item["PRICE"] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <footer>
        <p>Contact us: email@example.com | Phone: 0553-956-388</p>
    </footer>
</body>
</html>