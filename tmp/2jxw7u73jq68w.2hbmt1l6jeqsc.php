<!doctype html>

<html>
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
    </head>
    <body>
        <h1><?= $title ?></h1>
        <p>User logged in as <?= $username ?> using <?= $password ?></p>
        
        <h3>Message</h3>
        <?php if ($preferredCustomer): ?>
            <strong>Thank you as always for your service</strong>
        <?php endif; ?>
        
        <p>
        <?php if ($lastLogin > strtotime('-1 month')): ?>
            Welcome back
            <?php else: ?>It's been a while
        <?php endif; ?>
        </p>
        
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
        
        <h3>Desserts</h3>
        <ul>
            <?php foreach (($desserts?:[]) as $dessertKey=>$dessert): ?>
                <li>
                    <input type="checkbox" name="<?= $dessertKey ?>"
                           value="<?= $dessert ?>">
                    <?= $dessert.PHP_EOL ?>
                </li>
            <?php endforeach; ?>
        </ul>
        
        <h3>My Pet</h3>
        <p><?= $firstPet->getName() ?></p>
        <p> <?= $firstPet->getColor() ?> </p>
        
        <?php if ($secondPet->getColor() === $color): ?>
            an image of a pet
            <?php else: ?>some text
        <?php endif; ?>
    </body>
</html>