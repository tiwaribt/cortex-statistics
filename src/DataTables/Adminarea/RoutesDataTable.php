<?php

declare(strict_types=1);

namespace Cortex\Statistics\DataTables\Adminarea;

use Rinvex\Statistics\Models\Route;
use Cortex\Foundation\DataTables\AbstractDataTable;
use Cortex\Statistics\Transformers\Adminarea\RouteTransformer;

class RoutesDataTable extends AbstractDataTable
{
    /**
     * {@inheritdoc}
     */
    protected $model = Route::class;

    /**
     * {@inheritdoc}
     */
    protected $transformer = RouteTransformer::class;

    /**
     * {@inheritdoc}
     */
    protected $createButton = false;

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            'name' => ['title' => trans('cortex/statistics::common.name'), 'responsivePriority' => 0],
            'path' => ['title' => trans('cortex/statistics::common.path')],
            'action' => ['title' => trans('cortex/statistics::common.action')],
            'middleware' => ['title' => trans('cortex/statistics::common.middleware'), 'visible' => false],
            'parameters' => ['title' => trans('cortex/statistics::common.parameters'), 'visible' => false, 'render' => 'data ? JSON.stringify(data) : ""'],
            'count' => ['title' => trans('cortex/statistics::common.count')],
        ];
    }
}
