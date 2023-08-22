<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple</title>
</head>
<body>
    
        <?php
          $name = "Book 1 Name";
          $read = true;

          if ($read) {
              $message = "I have read $name";
          } else {
            $message = "I have not read $name";
          }

          
        ?>
    <h1>
        <?= $message; ?>
    </h1>

</body>
</html>
