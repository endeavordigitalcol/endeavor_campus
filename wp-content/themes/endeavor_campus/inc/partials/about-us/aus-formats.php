<ul class="aus-formats-list text-center">
    <?php foreach($args as $index=>$item){ ?>
    <li>
        <div class="aus-formats--card">
            <div class="aus-formats--card-icon">
                <span class="icon-<?php echo $item['icon'] ?>"></span>
            </div>
            <div class="aus-formats--card-text">
                <p>
                <?php echo $item['name'] ?>
                </p>
            </div>
        </div>
    </li>
    <?php } ?>
</ul>