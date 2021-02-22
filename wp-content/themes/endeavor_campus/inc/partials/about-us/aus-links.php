<ul class="aus-links">
    <?php foreach ($args as $item) { ?>
        <li>
            <a href="#<?php echo strtolower($item)?>"><?php echo $item?></a>
        </li>
    <?php } ?>
</ul>