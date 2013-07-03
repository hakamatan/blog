<?php if(!empty($_GET['tag'])): ?>
<h1><i><?php echo CHtml::encode($_GET['tag']); ?></i> というタグを持つ記事</h1>
<?php endif; ?>
 
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'template'=>"{items}\n{pager}",
)); ?>