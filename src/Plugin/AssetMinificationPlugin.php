<?php

declare(strict_types=1);

namespace Omikron\FactfinderInfiniteScrollingExperimental\Plugin;

class AssetMinificationPlugin
{
    public function afterGetExcludes($subject, array $result, string $contentType): array
    {
        return array_merge($result, $contentType === 'js' ? ['/Omikron_FactfinderInfiniteScrollingExperimental/ff-web-components/'] : []);
    }
}
