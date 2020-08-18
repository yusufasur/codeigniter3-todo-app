<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO List</title>
    <?php $this->load->view('dependencies/style.php') ?>
</head>
<body>

<div class="container">
    <h3 class="text-center">TODO List</h3>
    <div class="row">
        <div class="col-md-12">
            <form action="<?= base_url('todo/insert') ?>" method="post">
                <div class="row">
                    <div class="form-group col-md-11">
                        <input type="text" class="form-control" name="todo_title">
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-primary">Kaydet</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Açıklama</th>
                        <th class="text-center">Durum</th>
                        <th class="text-center">Sil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($todos as $todo): ?>
                        <tr>
                            <td class="text-left"><?= $todo->title ?></td>
                            <td class="text-center" style="width: 100px">
                                <input
                                        type="checkbox"
                                        data-url="<?= base_url("todo/isCompletedSetter/$todo->id") ?>"
                                        class="js-switch"
                                    <?= $todo->isCompleted ? 'checked' : null ?>>
                            </td>
                            <td class="text-center" style="width: 100px"><a href="<?= base_url("todo/delete/$todo->id") ?>" class="btn btn-danger">Sil</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('dependencies/scripts.php') ?>
</body>
</html>