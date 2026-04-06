<div style="display:flex; height:100vh; font-family:Arial, sans-serif;">

    <!-- LADO IZQUIERDO (DECORACIÓN / MARCA) -->
    <div style="flex:1; background:linear-gradient(135deg, #6a11cb, #2575fc); color:white; display:flex; flex-direction:column; justify-content:center; align-items:center; padding:40px;">
        <h1 style="font-size:40px; margin-bottom:10px;">Anderson</h1>
        <p style="font-size:18px; text-align:center; max-width:300px;">
            <?= __('Bienvenido, accede a tu cuenta para continuar') ?>
        </p>
    </div>

    <!-- LADO DERECHO (FORMULARIO) -->
    <div style="flex:1; display:flex; justify-content:center; align-items:center; background:#f8f9fa;">

        <div style="width:350px;">
            
            <h2 style="margin-bottom:25px;"><?= __('Iniciar Sesión') ?></h2>

            <?= $this->Form->create() ?>

            <!-- EMAIL -->
            <div style="margin-bottom:15px;">
                <?= $this->Form->control('correo', [
                    'label' => __('Email'),
                    'required' => true,
                    'placeholder' => __('Ingrese su correo'),
                    'style' => 'width:100%; padding:12px; border:none; border-bottom:2px solid #ccc; outline:none; background:transparent;'
                ]) ?>
            </div>

            <!-- PASSWORD -->
            <div style="margin-bottom:20px;">
                <?= $this->Form->control('password', [
                    'label' => __('Contraseña'),
                    'required' => true,
                    'placeholder' => __('Ingrese su contraseña'),
                    'style' => 'width:100%; padding:12px; border:none; border-bottom:2px solid #ccc; outline:none; background:transparent;'
                ]) ?>
            </div>

            <!-- IDIOMA -->
            <div style="margin-bottom:20px;">
                <?= $this->Form->control('lang', [
                    'type' => 'select',
                    'options' => [
                        'es' => 'Español',
                        'en' => 'English'
                    ],
                    'label' => __('Idioma'),
                    'default' => 'es',
                    'style' => 'width:100%; padding:10px; border-radius:5px; border:1px solid #ccc;'
                ]) ?>
            </div>

            <!-- BOTÓN -->
            <button style="width:100%; padding:12px; background:#6a11cb; color:white; border:none; border-radius:25px; font-size:16px; cursor:pointer;">
                <?= __('Ingresar') ?>
            </button>

            <?= $this->Form->end() ?>

        </div>
    </div>

</div>