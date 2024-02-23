<?php
/** @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Сортировка по дедлайну';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="tasks-info-page w-80">
    <table class="w-100">
        <thead>
        <tr>
            <th class="border border-dark pt-3 pb-3 ps-5" style="height: 70px;">Задача</th>
            <th class="border border-dark pt-3 pb-3 ps-5" style="height: 70px;">Дедлайн</th>
            <th class="border border-dark pt-3 pb-3 ps-5" style="height: 70px;">Story point</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="p-0 m-0 border border-dark">

                <?php foreach($tasks as $task):
                    ?>
                    <div class="task-name m-0 border-bottom border-dark pt-3 pb-3 ps-5" style="height: 70px;">
                        <?= Html::a($task->name, ['task/'.$task->id], ['class' => 'my-link text-decoration-none fz-18 text-black', 'target' => '_blank']); ?>
                    </div>
                <?php
                endforeach;
                ?></td>
            <td class="p-0 m-0 border border-dark">

                <?php foreach($tasks as $task):
                    ?>
                    <div class="task-name m-0 border-bottom border-dark pt-3 pb-3 ps-5" style=" height: 70px;">
                        <p><?= $task->date_end; ?></p>
                    </div>
                <?php
                endforeach;
                ?></td>
            <td class="p-0 m-0 border border-dark">

                <?php foreach($tasks as $task):
                    ?>
                    <div class="task-name m-0 border-bottom border-dark pt-3 pb-3 ps-5" style="height: 70px;">
                        <p><?= $task->story_point; ?></p>
                    </div>
                <?php
                endforeach;
                ?></td>
        </tr>
        </tbody>
    </table>
</div>