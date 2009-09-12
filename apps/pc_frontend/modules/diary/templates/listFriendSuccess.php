<?php use_helper('opDiary'); ?>

<?php $title = __('Diaries of Friends') ?>
<?php if ($pager->getNbResults()): ?>
<div class="dparts recentList"><div class="parts">
<div class="partsHeading"><h3><?php echo $title ?></h3></div>
<?php echo op_include_pager_navigation($pager, 'diary/listFriend?page=%d'); ?>
<?php foreach ($pager->getResults() as $diary): ?>
<dl>
<dt><?php echo op_format_date($diary->getCreatedAt(), 'XDateTimeJa') ?></dt>
<dd><?php echo link_to(op_diary_get_title_and_count($diary), 'diary_show', $diary) ?> (<?php echo $diary->getMember()->getName() ?>)<?php if ($diary->hasImages()) : ?> <?php echo image_tag('icon_camera.gif', array('alt' => 'photo')) ?><?php endif; ?></dd>
</dl>
<?php endforeach; ?>
<?php echo op_include_pager_navigation($pager, 'diary/listFriend?page=%d'); ?>
</div></div>
<?php else: ?>
<?php op_include_box('diaryList', __('There are no diaries'), array('title' => $title)) ?>
<?php endif; ?>
