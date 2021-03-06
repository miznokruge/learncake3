<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List School Exams'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List School Students'), ['controller' => 'SchoolStudents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Student'), ['controller' => 'SchoolStudents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List School Subjects'), ['controller' => 'SchoolSubjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School Subject'), ['controller' => 'SchoolSubjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schoolExams form large-9 medium-8 columns content">
    <?= $this->Form->create($schoolExam) ?>
    <fieldset>
        <legend><?= __('Add School Exam') ?></legend>
        <?php
            echo $this->Form->input('school_student_id', ['options' => $schoolStudents,'class'=>'form-control','div'=>'form-group']);
            echo $this->Form->input('school_subject_id', ['options' => $schoolSubjects,'class'=>'form-control','div'=>'form-group']);
            echo $this->Form->input('score',['class'=>'form-control','div'=>'form-group']);
        ?>
    </fieldset>
    <div style="margin: 10px auto">
        <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary btn-sm']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>
