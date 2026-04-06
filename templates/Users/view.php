<style>
body {
    background: #eef2f7;
    font-family: 'Segoe UI', Tahoma, sans-serif;
}

.card {
    max-width: 750px;
    margin: 40px auto;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

/* HEADER */
.card-header {
    padding: 20px 25px;
    background: #e0e7ff;
    color: #1e3a8a;
}

.card-header h2 {
    margin: 0;
}

.card-header p {
    margin: 5px 0 0;
    font-size: 14px;
    color: #475569;
}

/* BODY */
.card-body {
    padding: 25px;
}

/* GRID */
.info-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px 25px;
}

.info-item {
    background: #f8fafc;
    padding: 12px;
    border-radius: 8px;
}

.label {
    font-size: 12px;
    color: #64748b;
}

.value {
    font-size: 14px;
    color: #1e293b;
    margin-top: 3px;
}

/* FOOTER */
.card-footer {
    display: flex;
    justify-content: space-between;
    padding: 15px 25px;
    border-top: 1px solid #e5e7eb;
    background: #f9fafb;
}

/* BOTONES */
.btn {
    padding: 8px 14px;
    border-radius: 6px;
    text-decoration: none;
    color: white;
    font-size: 14px;
}

.btn-edit { background: #3b82f6; }
.btn-delete { background: #ef4444; }
.btn-back { background: #94a3b8; }

.btn:hover {
    opacity: 0.9;
}
</style>

<div class="card">

    <!-- HEADER -->
    <div class="card-header">
        <h2>👤 <?= h($user->nombre . ' ' . $user->apellido) ?></h2>
        <p><?= __('Información del usuario') ?></p>
    </div>

    <!-- BODY -->
    <div class="card-body">

        <div class="info-grid">

            <div class="info-item">
                <div class="label"><?= __('Nombre') ?></div>
                <div class="value"><?= h($user->nombre) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Apellido') ?></div>
                <div class="value"><?= h($user->apellido) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Correo') ?></div>
                <div class="value"><?= h($user->correo) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Idioma') ?></div>
                <div class="value"><?= h($user->language) ?></div>
            </div>

            <div class="info-item">
                <div class="label">ID</div>
                <div class="value"><?= $this->Number->format($user->id) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Creado') ?></div>
                <div class="value"><?= h($user->created) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Modificado') ?></div>
                <div class="value"><?= h($user->modified) ?></div>
            </div>

        </div>

    </div>

    <!-- FOOTER -->
    <div class="card-footer">

        <?= $this->Html->link(
            '⬅ ' . __('Volver'),
            ['action' => 'index'],
            ['class' => 'btn btn-back']
        ) ?>

        <div style="display:flex; gap:10px;">
            <?= $this->Html->link(
                '✏️ ' . __('Editar'),
                ['action' => 'edit', $user->id],
                ['class' => 'btn btn-edit']
            ) ?>

            <?= $this->Form->postLink(
                '🗑 ' . __('Eliminar'),
                ['action' => 'delete', $user->id],
                [
                    'confirm' => __('¿Seguro que deseas eliminar este usuario?'),
                    'class' => 'btn btn-delete'
                ]
            ) ?>
        </div>

    </div>

</div>