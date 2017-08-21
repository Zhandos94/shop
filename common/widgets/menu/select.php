<li>
    <a href="" class="mycolapse"> <?= $category['name'] ?>
        <?php if(isset($category['children'])) { ?>
            <span class="badge pull-right col"><i class="fa fa-plus "></i></span>
        <?php } ?>
    </a>
    <?php if(isset($category['children'])) { ?>
        <ul class="children">
            <?= $this->getMenuHtml($category['children']) ?>
        </ul>
    <?php } ?>
</li>
