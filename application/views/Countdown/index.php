<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remaining Seconds till End of day</title>
    <style>
        h1,
        div{
            text-align: center;
        }
        div{
            border: solid 2px black;
            width: fit-content;
            padding: 20px 50px;
            font-size: 1.6rem;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <h1>Countdown before End of day!</h1>
    <div>
        <p><?= $remain ?> Seconds</p>
        <p><?= $now ?></p>
    </div>
</body>
</html>