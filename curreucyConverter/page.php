<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Конвертер валют
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <form action="" method="post">
            <label>введите количество<br/>
                <input type="number" max="1000000" value="amount" name="amount">
            </label>
            <label>продажа
                <select name="sale">
                    <option value="1">UAH</option>
                    <option value="2">Dollar</option>
                    <option value="3">Euro</option>
                </select>
            </label>
            <label> покупка
                <select name="buy">
                    <option value="1">UAH</option>
                    <option value="2">Dollar</option>
                    <option value="3">Euro</option>
                </select>
            </label>
            <input type="submit" value="submit">
            </label>
        </form>
