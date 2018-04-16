<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>Виберіть країну відпочинку<br />
                <select size="3" name="country">
                    <option name="Turkey">Туречина </option>
                    <option name="Egypt" id="Egypt">Єгипет </option>
                    <option name="Italy">Італія </option>
                </select><br />
            </label>
            <label>Введить кількість днів відпочинку <br />
                <input type="number" name="numberDays">
            </label><br />
            <label>
                У Вас є знижка?
                <input type="checkbox" name="discount">
            </label>
            <input type="submit" value="submit">
        </form>
        <?php

        if (isset($_POST)) {
            $a = $_POST;
            switch ($a['country']) {
                case "Туречина":
                    $index = 0;
                    break;
                case  "Єгипет" :
                    $index = 0.1;
                    break;
                case "Італія" :
                    $index = 0.2;
            }
            $discount = 0;
            $price = 100;
            $numberDays = $a['numberDays'];
            $priceWithIndex = $price + ($price * $index);
            $pricePlusDays = $priceWithIndex * $numberDays;
            if ($a['discount'] == 'on') {
                $discount =$pricePlusDays *0.05;
            } else {
                $discount=0;
            }

            $totalCost = (($price *$numberDays)  + ($price*$numberDays*$index) - $discount);

            echo '<br>'.($totalCost);


        }






                  # количество дней


        ?>
    </body>
</html>

