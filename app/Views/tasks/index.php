<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h1>Task List</h1>
<p>All tasks ordered by task date.</p>
<section class="table-wrap" aria-label="All tasks">
    <table>
        <thead><tr><th scope="col">Title</th><th scope="col">Status</th><th scope="col">Task date</th></tr></thead>
        <tbody>
        <?php foreach ($tasks as $task): ?>
            <tr><td><?= esc($task['title']) ?></td><td><?= esc($task['status']) ?></td><td><?= esc($task['task_date']) ?></td></tr>
        <?php endforeach ?>
        </tbody>
    </table>
</section>
<?= $this->endSection() ?>