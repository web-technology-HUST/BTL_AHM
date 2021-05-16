<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-15">
        <meta name="viewport" content="width=device-width, intial-scale=1.0"/>
    </head>
    <?php foreach($posts as $post): ?>
        <div>
            <img src="<?php echo $post['image'] ?>" >
            <h2>
                <?php ?>
            </h2>
        </div>
    <?php endforeach; ?>
</html>