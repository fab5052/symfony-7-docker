<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWbbmJ7x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWbbmJ7x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWbbmJ7x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWbbmJ7x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWbbmJ7x\App_KernelDevDebugContainer([
    'container.build_hash' => 'WbbmJ7x',
    'container.build_id' => '2d100860',
    'container.build_time' => 1731441025,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWbbmJ7x');
