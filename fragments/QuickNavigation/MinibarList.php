<?php
/**
 * @var $this rex_fragment
 * @psalm-scope-this rex_fragment
 */
?>

<ul class="quick-navigation-minibar-list">
<?php foreach($this->getVar('listItems', []) as $listItem): ?>
    <li>
        <div class="quick-navigation-item">
            <?= $listItem ?>
        </div>
    </li>
<?php endforeach ?>
</ul>