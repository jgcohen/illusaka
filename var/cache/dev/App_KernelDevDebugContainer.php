<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRkw2wUi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRkw2wUi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRkw2wUi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRkw2wUi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRkw2wUi\App_KernelDevDebugContainer([
    'container.build_hash' => 'Rkw2wUi',
    'container.build_id' => '05b5e414',
    'container.build_time' => 1631196429,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRkw2wUi');
