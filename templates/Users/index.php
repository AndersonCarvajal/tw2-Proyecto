<div style="background:#eef2f7; min-height:100vh; padding:30px; font-family:'Segoe UI', sans-serif;">

    <div style="max-width:1200px; margin:auto;">

        <!-- HEADER -->
        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
            
            <div>
                <h2 style="margin:0; color:#1e3a8a;">👤 <?= __('Usuarios') ?></h2>
                <p style="margin:5px 0 0; color:#64748b; font-size:14px;">
                    <?= __('Gestión de usuarios registrados') ?>
                </p>
            </div>

            <div style="display:flex; gap:10px;">
                
                <?= $this->Html->link(
                    '📍 ' . __('Direcciones'),
                    ['controller' => 'Direcciones', 'action' => 'index'],
                    ['style' => 'background:#e0e7ff;color:#1e3a8a;padding:8px 12px;border-radius:6px;text-decoration:none;']
                ) ?>

                <?= $this->Form->postLink(
                    '🚪 ' . __('Cerrar sesión'),
                    ['action' => 'logout'],
                    [
                        'style' => 'background:#f87171;color:white;padding:8px 12px;border:none;border-radius:6px;'
                    ]
                ) ?>

            </div>

        </div>

        <!-- BOTÓN CREAR -->
        <div style="margin-bottom:15px;">
            <?= $this->Html->link(
                '➕ ' . __('Nuevo Usuario'),
                ['action' => 'add'],
                ['style' => 'background:#2563eb;color:white;padding:10px 14px;border-radius:6px;text-decoration:none;font-weight:bold;']
            ) ?>
        </div>

        <!-- CARD TABLA -->
        <div style="background:white; border-radius:12px; box-shadow:0 8px 20px rgba(0,0,0,0.05); overflow:hidden;">

            <table style="width:100%; border-collapse:collapse; font-size:14px;">

                <thead>
                    <tr style="background:#f1f5f9; color:#475569;">
                        <th style="padding:12px;"><?= $this->Paginator->sort('id', __('ID')) ?></th>
                        <th><?= $this->Paginator->sort('nombre', __('Nombre')) ?></th>
                        <th><?= $this->Paginator->sort('apellido', __('Apellido')) ?></th>
                        <th><?= $this->Paginator->sort('correo', __('Correo')) ?></th>
                        <th><?= $this->Paginator->sort('created', __('Creado')) ?></th>
                        <th><?= $this->Paginator->sort('language', __('Idioma')) ?></th>
                        <th><?= __('Acciones') ?></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr style="border-top:1px solid #e5e7eb; transition:0.2s;"
                        onmouseover="this.style.background='#f8fafc'"
                        onmouseout="this.style.background='white'">

                        <td style="padding:12px;"><?= $user->id ?></td>
                        <td><?= h($user->nombre) ?></td>
                        <td><?= h($user->apellido) ?></td>
                        <td><?= h($user->correo) ?></td>
                        <td><?= h($user->created) ?></td>
                        <td><?= h($user->language) ?></td>

                        <td style="padding:10px;">

                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], [
                                'style' => 'margin-right:5px; padding:5px 8px; background:#dbeafe; color:#1d4ed8; border-radius:5px; text-decoration:none;'
                            ]) ?>

                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id], [
                                'style' => 'margin-right:5px; padding:5px 8px; background:#fef3c7; color:#92400e; border-radius:5px; text-decoration:none;'
                            ]) ?>

                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], [
                                'style' => 'padding:5px 8px; background:#fee2e2; color:#b91c1c; border-radius:5px;'
                            ]) ?>

                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>

        </div>

        <!-- PAGINACIÓN -->
        <div style="margin-top:15px; color:#64748b; font-size:14px;">
            <?= $this->Paginator->counter(
                __('Página {{page}} de {{pages}}, mostrando {{current}} de {{count}} registros')
            ) ?>
        </div>

    </div>

</div>