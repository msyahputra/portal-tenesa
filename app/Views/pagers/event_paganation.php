<?php $pager->setSurroundCount(2) ?>

<div aria-label="row mx-0">
    <div class="col-12 text-center pb-4 pt-4">
        <?php if ($pager->hasPrevious()) : ?>
            <a class="btn_mange_pagging" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                &nbsp;&nbsp;<span class="fa fa-long-arrow-left" aria-hidden="true"><?= lang('Pager.first') ?></span>
            </a>
            <a class="btn_mange_pagging" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                &nbsp;&nbsp;<span class="fa fa-long-arrow-left" aria-hidden="true"><?= lang('Pager.previous') ?></span>
            </a>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <span <?= $link['active'] ? 'class="active btn_pagging_active"' : '' ?>>
                <a class="btn_pagging" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </span>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <a class="btn_mange_pagging" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                <span class="fa fa-long-arrow-right" aria-hidden="true"><?= lang('Pager.next') ?></span>
            </a>
            <a class="btn_mange_pagging" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                <span class="fa fa-long-arrow-right" aria-hidden="true"><?= lang('Pager.last') ?></span>
            </a>
        <?php endif ?>
    </div>
</div>