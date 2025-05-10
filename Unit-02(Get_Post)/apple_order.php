<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordering Apple</title>
</head>
<body>
    <div class="container">
        <h4> Ordering Apple </h4>
    <form action="apple_order.php" method="post">
        <label for="quantity"> Quantity :</label> <br>
        <input type="text" id="quantity" name="quantity">
        <br>
        <br>
        <button type="submit" id="btn"> Order </button>
        <br>
        <br>
    </form>
    </div>
    <script>
        // let btn = document.querySelector("#btn");

        // btn.addEventListener("click",(e)=>{
        //     e.preventDefault();
        // });
    </script>
</body>

</html>
<?php 
    $item = "apple";
    $price = 25;
    $quan = $_POST["quantity"];
    
    $total = $quan * $price;

    echo "Ordered : $quan * $item <br>";
    echo "Total : $ $total";
?>