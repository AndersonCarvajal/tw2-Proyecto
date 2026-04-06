<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= $this->fetch('title') ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body style="background:#eef2f7; font-family:Arial, sans-serif;">

    <!-- HEADER GLOBAL -->
    <header style="background:white; padding:10px 30px; display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid #e5e7eb;">

        <!-- LOGO -->
        <div>
            <a href="<?= $this->Url->build('/') ?>" style="text-decoration:none; font-weight:bold; color:#2563eb;">
                Mi Sistema
            </a>
        </div>

        <!-- IDIOMA -->
        <div>
            <a href="?lang=es" style="margin-right:8px; text-decoration:none;">🇪🇸 ES</a>
            <a href="?lang=en" style="text-decoration:none;">🇺🇸 EN</a>
        </div>

    </header>

    <!-- CONTENIDO -->
    <main style="padding:20px;">
        <div style="max-width:1200px; margin:auto;">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>

</body>
</html>