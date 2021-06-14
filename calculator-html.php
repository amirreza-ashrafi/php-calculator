<?php
    require_once "calculator-code.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>calculator</title>
    <link rel="stylesheet" href="calculator-style.css">
</head>
<body>
<form method="POST">
    <section class="content-box">
        <div class="calculator-box">
            <input type="hidden" name="input" value='<?php echo json_encode($input) ?>' />
            <input type="text" value="<?php echo getInputAsString($input); ?>" />
            <ul class="calculator-list">
                <ul class="calculator-row">
                    <li><input type="submit" name="ce" value="CE"/></li>
                    <li><input type="submit" name="clear" value="C"/></li>
                    <li><input type="submit" name="back" value="<"/></li>
                    <li><input type="submit" name="divide" value="/"/></li>
                </ul>
                <ul class="calculator-row">
                    <li><input type="submit" name="7" value="7"/></li>
                    <li><input type="submit" name="8" value="8"/></li>
                    <li><input type="submit" name="9" value="9"/></li>
                    <li><input type="submit" name="multiply" value="X"/></li>
                </ul>
                <ul class="calculator-row">
                    <li><input type="submit" name="4" value="4"/></li>
                    <li><input type="submit" name="5" value="5"/></li>
                    <li><input type="submit" name="6" value="6"/></li>
                    <li><input type="submit" name="minus" value="-"/></li>
                </ul>
                <ul class="calculator-row">
                    <li><input type="submit" name="1" value="1"/></li>
                    <li><input type="submit" name="2" value="2"/></li>
                    <li><input type="submit" name="3" value="3"/></li>
                    <li><input type="submit" name="plus" value="+"/></li>
                </ul>
                <ul class="calculator-row">
                    <li><input type="submit" name="square" value="^"/></li>
                    <li><input type="submit" name="0" value="0"/></li>
                    <li><input type="submit" name="point" value="."/></li>
                    <li><input type="submit" name="equal" value="="/></li>
                </ul>
            </ul>
        </div>
    </section>
</form>
</body>
</html>
