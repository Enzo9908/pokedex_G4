<!DOCTYPE html>
<html lang="fr">

<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="publisher" content="EASYWEB">
    <meta name="description" content="TP - ING1">
    <?= $this->fetch('meta') ?>
    <title>Pokedex</title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css([
        'style',
    ]) ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?= $this->fetch('css') ?>
</head>

<body>
    
    <main id="main">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>
    <footer>
    </footer>
    </div>
    <?= $this->Html->script([
        'main',
    ]); ?>
    <?= $this->fetch('script') ?>
</body>

</html>