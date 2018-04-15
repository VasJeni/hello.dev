<?php
/**
 * Created by PhpStorm.
 * User: Geomanser
 * Date: 15.04.2018
 * Time: 6:41
 */
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <body>
        <form action="charge.php" method="GET">
            <label>Виберіть країну відпочинку<br />
                <select size="3">
                    <option id="Turkey">Туречина </option>
                    <option id="Egypt">Єгипет </option>
                    <option id="Italy">Італія </option>
                </select><br />
            </label>
            <label>Введить кількість днів відпочинку <br />
                <input type="number" name="number_of_day">
            </label><br />

            <label>
                У Вас є знижка?
                <input type="checkbox" name="discount" id="true">
            </label>
        </form>
    </body>
</html>

