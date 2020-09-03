<?php if( have_rows('vyb') ): ?>
    <?php while( have_rows('vyb') ): the_row(); 

        // Get sub field values.
        $body = get_sub_field('body');
        echo $body;

        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('intern') ): ?>
    <?php while( have_rows('intern') ): the_row(); 

        // Get sub field values.
        $body = get_sub_field('body');
        echo $body;

        ?>
    <?php endwhile; ?>
<?php endif; ?>
