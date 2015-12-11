<ul class="products">
    <?php foreach($products as $p): ?>
    <li>
        <h3><?php echo $p['name']; ?></h3>
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $p['image']; ?>" alt="" />
        <p>UAH <?php echo $p['price']; ?></p>
        <?php echo form_open('general/add_cart_item'); ?>
            <fieldset>
                <label>Quantity</label>
                <?php echo form_input('quantity', '1', 'maxlength="2"'); ?>
                <?php echo form_hidden('b_id', $p['b_id']); ?>
                <?php echo form_hidden('id', $id); ?>
                <?php echo form_submit('add', 'Add'); ?>
            </fieldset>
        <?php echo form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>