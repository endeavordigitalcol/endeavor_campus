<ul class="figures-list text-center">
    <?php foreach($args as $item){ ?>
    <li>
        <div class="figure-item">
            <p class="figure-number">
                +<?php echo $item['number'] ?>
            </p>
            <p class="figure-caption">
                <?php echo $item['text'] ?>
            </p>
        </div>
    </li>
    <?php } ?>
</ul>