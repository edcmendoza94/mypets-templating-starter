<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        <p>It is currently <?= $temp ?> degrees Fahrenheit</p>
        <p>In Celsius, the temperature is <?= $temp - 32 * (5.0 / 9.0) ?> degrees</p>
        <p>One of my favorite colors is <?= $color ?></p>
        <p>If a circle's radius is <?= $radius ?>,
           then its circumference is <?= (2 * 3.14) * $radius ?></p>
        
        <h3><?= $username ?>'s Bookmarks</h3>
        <p>First bookmark: <a href="<?= $bookmarks[0] ?>">Serenes Forest</a></p>
        
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li>
                    <a href="<?= $bookmark ?>">
                    <?= str_replace('https://', '', $bookmark).PHP_EOL ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h3>Addresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p>
        <p></p>
    </body>
</html>