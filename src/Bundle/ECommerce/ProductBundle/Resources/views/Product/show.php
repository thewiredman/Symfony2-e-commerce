<?php $view->extend('ECommerceBundle::layout.php') ?>

<h1><?php echo $product ?></h1>
<?php foreach($product->getAttributes() as $attribute): ?>
    <div><?php echo $attribute ?> : </div>
    <?php foreach($attribute->getOptions() as $option): ?>
        <div><?php echo $option ?></div>
    <?php endforeach ?>
<?php endforeach ?>


