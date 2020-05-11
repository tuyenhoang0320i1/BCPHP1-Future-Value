<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    #content{
        width: 450px;
        margin: 0 auto;
        padding: 0px 20px 20px;
        background: white;
        border: 2px solid navy;
    }

    h2{
        color: navy;
    }

    label{
        width: 10em;
        padding-right: 1em;
        float: left;
    }

    #data input{
        float: left;
        width: 15em;
        margin-bottom: .5em;
    }

    #button input{
        float: left;
        margin-bottom: .5em;
    }
    br{
        clear: left;
    }

</style>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $rate = $_POST["rate"];
    $year = $_POST["year"];
    $futurerate = $amount + $year * ($amount * $rate/100);

}
?>
<div id="content">
    <h2>Future Value Calculator</h2>
    <form method="post">
        <div id="data">
            <label>Investment Amount</label>
            <input width="20px" type="text" name="amount" value="0"/><br/>
            <label>Yearly Interest Rate</label>
            <input width="20px" type="text" name="rate" value="0"/><br/>
            <label>Number of Years</label>
            <input width="20px" type="text" name="year" value="0"/><br/>
        </div>
        <div id="button">
            <label>&nbsp;</label>
            <input type="submit" name="calculate" value="Calculate"/><br/>
            <?php echo $futurerate . "$";?>
        </div>
        <br/>

    </form>
</div>

</body>
</html>