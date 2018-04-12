<?php
function postValidationToInt ($areInteger) {
    $arrayOfNumber = array('-', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',);
    $controlSum=0;
    for ($i = 0; $i < strlen($areInteger); $i++) {
        for ($ii = 0; $ii < count($arrayOfNumber); $ii++) {
            if ($areInteger[$i] === $arrayOfNumber[$ii]) {
                $controlSum++;
            }
        }
    }
    if ($controlSum == strlen($areInteger)) {
        return true;
    } else {
        return false;
    }
}
function postValidationMathOperation ($areInteger) {
    $arrayOfNumber = array('-', '+', '*', '/', '%', '^',);
    $controlSum=0;
    for ($i = 0; $i < strlen($areInteger); $i++) {
        for ($ii = 0; $ii < count($arrayOfNumber); $ii++) {
            if ($areInteger[$i] === $arrayOfNumber[$ii]) {
                $controlSum++;
            }
        }
    }
    if ($controlSum == strlen($areInteger)) {
        return true;
    } else {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <form action="calculate.php" method="POST">
        <label>Enter first value:<br>
            <input type="number" id="firstValue" name="firstValue" >
        </label><br>
        <label>Enter second value<br>
        <input type="number" id="secondValue" name="secondValue" ><br>
        </label>
        <label> Enter operation <br />
            <select name="operation">
                <option  id="+" value="+">добавление</option>
                <option  id="-" value="-">отнимание</option>
                <option  id="*" value="*">умножение</option>
                <option  id="/" value="/">деление</option>
                <option  id="%" value="%">деление по модулю</option>
                <option  id="^" value="^">возведение в степень</option>
            </select>

<!--        <input type="text" name="operation" id="operation" value="operation"><br></label>-->
        <input type="submit" value="Submit">
    </form>
    <table>
        <tr>
            <td>
                <?php
                if (
                        !empty($_POST) && (is_numeric($_POST['firstValue'])) &&  (is_numeric($_POST['secondValue'])) && (postValidationMathOperation($_POST['operation'])) && (strlen($_POST['operation'])==1)) {
//                        && (postValidationToInt($_POST['firstValue']))            //самописный вариант
//                        && (postValidationToInt($_POST['secondValue']))           //
//                        && (postValidationMathOperation($_POST['operation']))     //самописный вариант
//                        && (strlen($_POST['operation'])==1)) {                    //самописный вариант
                    $firstValue = $_POST['firstValue'];
                    $secondValue = $_POST['secondValue'];
                    switch ($_POST['operation']) {
                        case "-" :
                            $result = $firstValue - $secondValue;
                            break;
                        case "+":
                            $result = $firstValue + $secondValue;
                            break;
                        case "*":
                            $result = $firstValue * $secondValue;
                            break;
                        case "/":
                            if (($secondValue) == 0){
                            $result = 'error';
                            break;
                            } else {
                            $result = $firstValue / $secondValue;}
                            break;
                        case "%":
                            $result = $firstValue % $secondValue;
                            break;
                        case "^":
                            $result = $firstValue ** $secondValue;
                            break;
                    }
                    if ($result === 0) {
                        $result = '0';
                    }
                } else {
                    if ( (isset($_POST['firstValue'])) && !empty((postValidationToInt($_POST['firstValue'])))){
                        echo 'invalid first value';
                    };
                    if ( (isset($_POST['secondValue'])) && !empty(postValidationToInt($_POST['secondValue']))){
                        echo 'invalid second value';
                    }
                }
                ?>
            <?php
                if (!empty($result)){
                 echo $result;
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>