<?php

namespace App\Livewire\Tables;

use App\Models\admin\Blog;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class BlogsTable extends DataTableComponent
{
    protected $model = Blog::class;

    public function configure(): void
    {
        $this->setPrimaryKey('slug')
            ->setTableRowUrl(function ($row) {
                return route('blogs.edit', $row);
            })
            ->setTableRowUrlTarget(function ($row) {
                return '_self';
            });
        $this->setConfigurableAreas([
            'toolbar-right-start' => [
                'dashboard.components.table.button', [
                    'route' => route('blogs.create'),
                    'text' => 'Criar novo',
                ],
            ],
        ]);

        $this->setBulkActions([
            'deleteSelected' => 'Delete',
        ]);
    }

    public function deleteSelected(): void
    {
        foreach ($this->getSelected() as $blog) {
            try {
                $blog->delete();
                session()->flash('success', 'Ocorreu tudo como planejado');
            } catch (\Exception $e) {
                session()->flash('error', 'Ocorreu algum erro, tente novamente mais tarde');
            }
        }
    }

    public function columns(): array
    {
        return [
            Column::make('Id', 'id')
                ->sortable(),
//            ImageColumn::make('Imagens', 'image'),
            Column::make(__('Title'), 'title_1')
                ->searchable()
                ->sortable(),
            Column::make(__('Created at'), 'created_at')
                ->sortable(),
            Column::make(__('Updated at'), 'updated_at')
                ->sortable(),
        ];
    }
}
