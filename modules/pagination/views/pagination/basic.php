<div class="pagination">
    <ul>
        <?php if ($previous_page !== FALSE): ?>
            <li><a href="<?php echo HTML::chars($page->url($previous_page)) ?>">«</a></li>
        <?php else: ?>
            <li class="disabled"><a href="#">«</a></li>
        <?php endif ?>

        <?php for ($i = 1; $i <= $total_pages; $i++): ?>

            <?php if ($i == $current_page): ?>
                <li class="active"><a href="#"><?php echo $i; ?></a></li>
            <?php else: ?>
                <li><a href="<?php echo HTML::chars($page->url($i)) ?>"><?php echo $i; ?></a></li>
            <?php endif ?>
        <?php endfor ?> 
        <?php if ($next_page !== FALSE): ?>
            <li><a href="<?php echo HTML::chars($page->url($next_page)) ?>">»</a></li>
        <?php else: ?>
            <li class="disabled"><a href="#">»</a></li>
        <?php endif ?>
    </ul>
</div>
