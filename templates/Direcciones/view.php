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

/* CONTENIDO */
.card-body {
    padding: 25px;
}

/* GRID INFO */
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
        <h2>📍 <?= __('Detalle de Dirección') ?></h2>
        <p><?= __('Información completa registrada en el sistema') ?></p>
    </div>

    <!-- BODY -->
    <div class="card-body">

        <div class="info-grid">

            <div class="info-item">
                <div class="label"><?= __('Calle') ?></div>
                <div class="value"><?= h($direccione->calle) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Ciudad') ?></div>
                <div class="value"><?= h($direccione->ciudad) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Código Postal') ?></div>
                <div class="value"><?= h($direccione->codigo_postal) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Teléfono') ?></div>
                <div class="value"><?= h($direccione->telefono) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Referencia') ?></div>
                <div class="value"><?= h($direccione->referencia) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('País') ?></div>
                <div class="value"><?= h($direccione->pais) ?></div>
            </div>

            <div class="info-item">
                <div class="label">ID</div>
                <div class="value"><?= $this->Number->format($direccione->id) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Creado') ?></div>
                <div class="value"><?= h($direccione->created) ?></div>
            </div>

            <div class="info-item">
                <div class="label"><?= __('Modificado') ?></div>
                <div class="value"><?= h($direccione->modified) ?></div>
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
                ['action' => 'edit', $direccione->id],
                ['class' => 'btn btn-edit']
            ) ?>

            <?= $this->Form->postLink(
                '🗑 ' . __('Eliminar'),
                ['action' => 'delete', $direccione->id],
                [
                    'confirm' => __('¿Seguro que deseas eliminar esta dirección?'),
                    'class' => 'btn btn-delete'
                ]
            ) ?>
        </div>

    </div>

</div>