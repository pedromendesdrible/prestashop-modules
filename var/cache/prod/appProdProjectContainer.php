<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDteg6gt\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDteg6gt/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerDteg6gt.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerDteg6gt\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerDteg6gt\appProdProjectContainer([
    'container.build_hash' => 'Dteg6gt',
    'container.build_id' => '7cb3ea81',
    'container.build_time' => 1677672292,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDteg6gt');
