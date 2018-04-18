<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Конвертер валют
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
        <div class="text-center mb-4">
            <form action="" method="get" class="form-inline">
                <label class="sr-only" for="inlineFormInput">Name</label>
                <input type="number" name="firstAmountOfCurrency" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="0">
                <select class="form-control" name="currencyFirst">
                    <optgroup label="Sale"></optgroup>
                    <option value="1">uah</option>
                    <option value="2">dollar</option>
                    <option value="3">euro</option>
                </select>
                <label class="sr-only" for="inlineFormInput">Name</label>
<!--                <input type="number" name="secondAmountOfCurrency" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="0">-->
                <select class="form-control" name="currencySecond">
                    <optgroup label="Buy"></optgroup>
                    <option value="1">uah</option>
                    <option value="2">dollar</option>
                    <option value="3">euro</option>
                </select>
                <input type="number" name="secondAmountOfCurrency" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="0" readonly>
                <input class="btn btn-primary" type="submit" value="Submit">
            </form>
        </div>
<!--        --><?php
//        var_dump($_GET);
//        ?>
