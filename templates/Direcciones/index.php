<div style="min-height:100vh; font-family:Arial, sans-serif; background:#eef2f7;">

    <!-- HEADER SUPERIOR -->
    <header style="background:#ffffff; padding:15px 40px; display:flex; justify-content:space-between; align-items:center; border-bottom:1px solid #dbeafe;">
        
        <h2 style="margin:0; color:#1e3a8a;">📍 <?= __('Direcciones') ?></h2>

        <div style="display:flex; gap:10px;">

            <?= $this->Html->link(
                __('Usuarios'),
                ['controller' => 'Users', 'action' => 'index'],
                ['style' => 'padding:8px 12px; background:#e0e7ff; color:#1e3a8a; border-radius:6px; text-decoration:none;']
            ) ?>

            <?= $this->Html->link(
                '➕ ' . __('Nueva Dirección'),
                ['action' => 'add'],
                ['style' => 'padding:8px 14px; background:#2563eb; color:white; border-radius:6px; text-decoration:none; font-weight:bold;']
            ) ?>

            <?= $this->Form->postLink(
                __('Cerrar sesión'),
                ['controller' => 'Users', 'action' => 'logout'],
                ['style' => 'padding:8px 12px; background:#f87171; color:white; border-radius:6px;']
            ) ?>

        </div>
    </header>

    <!-- CONTENIDO -->
    <div style="padding:40px;">

        <div style="max-width:1200px; margin:auto;">

            <!-- CARD -->
            <div style="background:white; border-radius:12px; padding:25px; box-shadow:0 8px 20px rgba(0,0,0,0.05);">

                <h3 style="margin-bottom:20px; color:#374151;">
                    <?= __('Listado de Direcciones') ?>
                </h3>

                <table style="width:100%; border-collapse:collapse; font-size:14px;">

                    <thead>
                        <tr style="background:#f1f5f9; color:#475569;">
                            <th style="padding:12px;">ID</th>
                            <th><?= __('Calle') ?></th>
                            <th><?= __('Ciudad') ?></th>
                            <th><?= __('Código Postal') ?></th>
                            <th><?= __('Teléfono') ?></th>
                            <th><?= __('País') ?></th>
                            <th><?= __('Acciones') ?></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($direcciones as $d): ?>
                        <tr style="border-top:1px solid #e5e7eb; transition:0.2s;"
                            onmouseover="this.style.background='#f8fafc'"
                            onmouseout="this.style.background='white'">

                            <td style="padding:12px;"><?= $d->id ?></td>
                            <td><?= h($d->calle) ?></td>
                            <td><?= h($d->ciudad) ?></td>
                            <td><?= h($d->codigo_postal) ?></td>
                            <td><?= h($d->telefono) ?></td>
                            <td><?= h($d->pais) ?></td>

                            <td style="padding:10px;">

                                <?= $this->Html->link(__('Ver'), ['action' => 'view', $d->id], [
                                    'style' => 'margin-right:5px; padding:5px 8px; background:#dbeafe; color:#1d4ed8; border-radius:5px; text-decoration:none;'
                                ]) ?>

                                <?= $this->Html->link(__('Editar'), ['action' => 'edit', $d->id], [
                                    'style' => 'margin-right:5px; padding:5px 8px; background:#fef3c7; color:#92400e; border-radius:5px; text-decoration:none;'
                                ]) ?>

                                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $d->id], [
                                    'style' => 'padding:5px 8px; background:#fee2e2; color:#b91c1c; border-radius:5px;'
                                ]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>