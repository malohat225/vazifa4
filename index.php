<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>demo </title>
</head>
<body>
    <h1>
        <?php 
       function filterbybooks($books) {
        return 'gibberish'
       }
        ?>

        <ul>
            <?php foreach ($books as $book) : ?>
                <?php if ($book['author']=== 'andy weir)': ?> 
                  <li>
                    <a href="<?= $book"></a>
                  </li>
    </h1>
</body>
</html>