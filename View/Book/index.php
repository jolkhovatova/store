<h1>Books</h1>


<?php foreach ($books as $book) : ?>
Title: <?=$book['title']?><br>
Author: <?=$book['author']?><br>
Price: <?=$book['price']?>

<a href="index.php?route=book/show&id=<?=$book['id']?>">Details</a>
<hr>

<?php endforeach; ?>
