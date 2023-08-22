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
        [ 'bookTitle' => "book name 1",
          'author' => 'Author 1',
          'URL' => 'http://example1.com'
        ],
        [ 'bookTitle' => "book name 2",
          'author' => 'Author 2',
          'URL' => 'http://example2.com'
        ],
        [ 'bookTitle' => "book name 3",
          'author' => 'Author 3',
         'URL' => 'http://example3.com'   
        ]
      ];
    ?>
    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['URL'] ?>">
           <?= $book['bookTitle']; ?>
        </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
