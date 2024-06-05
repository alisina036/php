<html>
    <?php
        $names = [
            "John",
            "Jane",
            "Bob"
        ];
    ?>

    <body>

        <ol>
            <?php
            // foreach ($names as $name){
            //     echo "<li>{$name}</li>";
            // }
            ?>

            <?php foreach ($names as $name) : ?>
                <li><?= $name ?></li>
            <?php endforeach; ?>
        </ol>

    </body>
</html>
<?php 
?>