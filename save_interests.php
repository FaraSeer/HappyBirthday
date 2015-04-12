<?php if (!empty($_POST)) : ?>

	<?php $i = 1; ?>

    <hr />
    <h3>Получена структура данных:</h3>
    <pre><?php print_r($_POST) ?></pre>
    <hr />
    <h3>Приняты следующие данные:</h3>
    <dl>
        <?php foreach ($_POST as $key => $value) :
            if (gettype($key) === "integer") : ?>
                <dt>Строка № <?php echo $i++ ?> : </dt>
                    <dd>
                        <strong>Текстовое поле : </strong><?php echo $value['text'] ?><br/>
                    </dd>
            <?php endif ?>
        <?php endforeach ?>
    </dl>
<?php endif ?>