<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLilbhyx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLilbhyx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLilbhyx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLilbhyx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLilbhyx\appProdProjectContainer([
    'container.build_hash' => 'Lilbhyx',
    'container.build_id' => '15ddfba2',
    'container.build_time' => 1669645917,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLilbhyx');