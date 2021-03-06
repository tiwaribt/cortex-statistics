<?php

declare(strict_types=1);

namespace Cortex\Statistics\Transformers\Adminarea;

use Rinvex\Statistics\Models\Path;
use Rinvex\Support\Traits\Escaper;
use League\Fractal\TransformerAbstract;

class PathTransformer extends TransformerAbstract
{
    use Escaper;

    /**
     * @return array
     */
    public function transform(Path $path): array
    {
        return $this->escape([
            'host' => (string) $path->host,
            'locale' => (string) $path->locale,
            'accessarea' => (string) $path->accessarea,
            'path' => (string) $path->path,
            'parameters' => (string) $path->parameters,
            'count' => (int) $path->count,
        ]);
    }
}
