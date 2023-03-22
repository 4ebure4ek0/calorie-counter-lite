<!DOCTYPE html>
<html>
    <head>
        <title>Calorie counter lite</title>
        <meta charset='utf-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <link rel='stylesheet' href='css/style.css' >
    </head>
    <body>
        <div class='container'>
            <h1>Calorie counter lite</h1>
            <form action='add.php' method='post'>
                <input type='text' name='product' id='product' placeholder='Product' />
                <input type='number' name='call' id='call' placeholder='Calories' />
                <!-- <button type='submit' name='button'>Add</button><br /> -->
                <input type='submit' value='Add' name='sendProduct'/><br />
            </form>
            <?php 
            require 'configDB.php';

            echo '<ul>';
            $query = $pdo->query('SELECT * FROM `products` ORDER BY `id` DESC');
            $total = 0;
            while($row = $query->fetch(PDO::FETCH_OBJ)){
                echo '<li class="products">'.$row->product.'<span class="calories">'.$row->calories.' kcal<a href="delete.php?id='.$row->id.'"><button class="del_btn">X</button></a></span></li>';
                $total = $total + $row->calories;
            }
            echo '<div class="total">Total: '.$total.' kcal</div>';
            echo '</ul>';
            ?>
        </div>
    </body>
</html>