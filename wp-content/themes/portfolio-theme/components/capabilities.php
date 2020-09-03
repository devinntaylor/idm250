<?php if( have_rows('design') ): ?>
    <?php while( have_rows('design') ): the_row(); 

        // Get sub field values.
        $body = get_sub_field('body');
        echo $body;

        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('code') ): ?>
    <?php while( have_rows('code') ): the_row(); 

        // Get sub field values.
        $body = get_sub_field('body');
        echo $body;

        ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('software') ): ?>
    <?php while( have_rows('software') ): the_row(); 

        // Get sub field values.
        $body = get_sub_field('body');
        echo $body;

        ?>
    <?php endwhile; ?>
<?php endif; ?>