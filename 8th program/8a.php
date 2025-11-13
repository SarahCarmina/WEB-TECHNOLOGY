<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistor Content</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px; 
        }
        h1{
            color: #333;
        }
        p{
            font-size: 1.2em;
        }
        #name{
        font-weight: 900;
        background: linear-gradient(to right, orange, hotpink,yellow);
        color: royalblue;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif  ;
    }
    </style>
</head>
<body>
     <p id="name"><b>SARAH CARMINA DALMEIDA <br> 4MW23CS137</b>
    </p>
    <?php $file="counter.txt";
    $count=file_exists($file)?(int)file_get_contents($file):0;
    file_put_contents($file,++$count);
    ?>
    <h1>Visitor counter</h1>
    <p>Number of Visitors: <strong><? php echo $count; ?</strong></p>
</body>
</html>