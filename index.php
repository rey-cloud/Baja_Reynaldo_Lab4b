<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 Laboratory Exercise 2</title>
</head>
<body>
    <h2>Know Your Healthful Food!</h2>

    <form method="get">
        <input type="text" name="num">
        <input type="submit">
    </form>

    <?php

    if(isset($_GET["num"])) {

        $choice = $_GET["num"];
    
        switch (strtoupper($choice)) {
            case "ALMOND":
                echo "<h2>Almond has magnesium, vitamin E, iron, calcium, and fiber.</h2>";
                break;
            case "OATMEAL":
                echo "<h2>Oats contain complex carbohydrates, as well as water-soluble fiber.</h2>";
                break;
            case "BROCCOLI":
                echo "<h2>Broccoli provides good amounts of fiber, calcium, potassium, folate, and phytonutrient.</h2>";
                break;
            case "APPLE":
                echo "<h2>Apples are an excellent source of antioxidants, which combat free radicals.</h2>";
                break;
            case "AVOCADOS":
                echo "<h2>Avocados provide healthful fats, as well as B vitamins, vitamin K, and vitamin E.</h2>";
                break;
            case "CHICKEN":
                echo "Chicken is cost-effective meat that is an excellent source of protein.";
                break;
            default:
                echo "<br>Data for " . $choice . " is not available. Please try again!";
        }
    }

    ?>


</body>
</html>
