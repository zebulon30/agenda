<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9wfxwmc\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9wfxwmc/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container9wfxwmc.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container9wfxwmc\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container9wfxwmc\srcDevDebugProjectContainer(array(
    'container.build_hash' => '9wfxwmc',
    'container.build_id' => 'b5da3b72',
    'container.build_time' => 1537556045,
), __DIR__.\DIRECTORY_SEPARATOR.'Container9wfxwmc');
