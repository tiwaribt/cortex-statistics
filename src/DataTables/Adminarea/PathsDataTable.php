<?php

declare(strict_types=1);

namespace Cortex\Statistics\DataTables\Adminarea;

use Rinvex\Statistics\Models\Path;
use Cortex\Foundation\DataTables\AbstractDataTable;

class PathsDataTable extends AbstractDataTable
{
    /**
     * {@inheritdoc}
     */
    protected $model = Path::class;

    /**
     * Get default builder parameters.
     *
     * @return array
     */
    protected function getBuilderParameters(): array
    {
        return [
            'keys' => true,
            'retrieve' => true,
            'autoWidth' => false,
            'dom' => "<'row'<'col-sm-6'B><'col-sm-6'f>> <'row'r><'row'<'col-sm-12't>> <'row'<'col-sm-5'i><'col-sm-7'p>>",
            'buttons' => [
                'print', 'reset', 'reload', 'export',
                ['extend' => 'colvis', 'text' => '<i class="fa fa-columns"></i> '.trans('cortex/foundation::common.columns').' <span class="caret"/>'],
                ['extend' => 'pageLength', 'text' => '<i class="fa fa-list-ol"></i> '.trans('cortex/foundation::common.limit').' <span class="caret"/>'],
            ],
        ];
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns(): array
    {
        return [
            'host' => ['title' => trans('cortex/statistics::common.host'), 'responsivePriority' => 0],
            'locale' => ['title' => trans('cortex/statistics::common.locale')],
            'accessarea' => ['title' => trans('cortex/statistics::common.accessarea')],
            'path' => ['title' => trans('cortex/statistics::common.path')],
            'parameters' => ['title' => trans('cortex/statistics::common.parameters'), 'render' => 'data ? JSON.stringify(data) : ""'],
            'count' => ['title' => trans('cortex/statistics::common.count')],
        ];
    }
}
