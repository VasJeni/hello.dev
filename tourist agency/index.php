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

        echo '<br>';

        require 'validation.php';
        require 'charge.php';

        if (isset($_POST) && (! empty($_POST))) {
                    $data = checking($_POST);
                    echo charge($data);}





                  # количество дней


        ?>