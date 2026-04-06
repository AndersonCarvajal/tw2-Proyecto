<style>
body {
    background: #eef2f7;
    font-family: 'Segoe UI', Tahoma, sans-serif;
}

.card {
    max-width: 700px;
    margin: 40px auto;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.06);
    border: 1px solid #e2e8f0;
    overflow: hidden;
}

.card-header {
    padding: 20px 25px;
    background: #dbeafe;
    color: #1e3a8a;
}

.card-header h2 {
    margin: 0;
}

.card-header p {
    margin-top: 5px;
    font-size: 14px;
    color: #475569;
}

.card-body {
    padding: 25px;
}

.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-size: 13px;
    color: #64748b;
    margin-bottom: 5px;
}

.form-group input,
.form-group select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #cbd5e1;
    background: #f8fafc;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 4px rgba(59,130,246,0.3);
}

.card-footer {
    display: flex;
    justify-content: space-between;
    padding: 15px 25px;
    border-top: 1px solid #e5e7eb;
    background: #f9fafb;
}

.btn {
    padding: 8px 14px;
    border-radius: 6px;
    border: none;
    cursor: pointer;
    font-size: 14px;
}

.btn-save {
    background: #22c55e;
    color: white;
}

.btn-back {
    background: #94a3b8;
    color: white;
    text-decoration: none;
}

.btn:hover {
    opacity: 0.9;
}
</style>

<div class="card">

    <!-- HEADER -->
    <div class="card-header">
        <h2>➕ <?= __('Nuevo Usuario') ?></h2>
        <p><?= __('Completa los datos para registrar un usuario') ?></p>
    </div>

    <?= $this->Form->create($user) ?>

    <!-- BODY -->
    <div class="card-body">

        <div class="form-grid">

            <div class="form-group">
                <?= $this->Form->label('nombre', __('Nombre')) ?>
                <?= $this->Form->control('nombre', ['label' => false]) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('apellido', __('Apellido')) ?>
                <?= $this->Form->control('apellido', ['label' => false]) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('correo', __('Correo')) ?>
                <?= $this->Form->control('correo', ['label' => false]) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('password', __('Contraseña')) ?>
                <?= $this->Form->control('password', ['label' => false]) ?>
            </div>

            <div class="form-group">
                <?= $this->Form->label('language', __('Idioma')) ?>
                <?= $this->Form->control('language', [
                    'type' => 'select',
                    'options' => [
                        'es' => 'Español',
                        'en' => 'English'
                    ],
                    'label' => false
                ]) ?>
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

        <?= $this->Form->button('💾 ' . __('Guardar'), ['class' => 'btn btn-save']) ?>

    </div>

    <?= $this->Form->end() ?>

</div>