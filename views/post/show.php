<?php
$this->title = 'Show';
$this->registerMetaTag(['name' => 'description', 'content' => 'description']);
$this->registerMetaTag(['name' => 'keywords', 'content' => 'keywords'])
?>
<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>
    <h1>Show</h1>
    <button class="btn btn-success" id="btn">Click me...</button>
<?php
$js = <<< JS
    $('#btn').on('click', function() {
        $.ajax({
            url: '/post/',
            type: 'POST',
            data: {test: 123},
            success: function(d) {
                console.log(d);
            },
            error: function() {
                alert('Error!');
            }
        });
    });
JS;
$this->registerJs($js);
?>