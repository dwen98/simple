<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php
      $books = [
        "book name 1", "book name 2", "book name 3"
      ];

    ?>
    <ul>
      <?php foreach ($books as $book){
        echo "<li>{$book}™</li>";
      }
      ?>
    </ul>
   
    <ul>
    <?php foreach ($books as $book) : ?>
        <li><?= $book; ?></li>
    <?php endforeach; ?>
    </ul>

</body>
</html>
