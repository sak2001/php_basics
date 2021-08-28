<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.container{
    max-width:80;
    background-color:grey;
    margin: auto;
    padding: 23px;
}

</style>
<body>
    <div class = "container">
        <h1> Lets Learn about Php</h1>
        <p> You party status is here </p>
        <?php
        $age = 34;
        if($age > 18)
            echo "you can go to Party";
        else   
            echo "you cannot got to the party";      

        ?>

    </div>
</body>
</html>