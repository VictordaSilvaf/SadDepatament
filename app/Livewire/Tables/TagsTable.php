<?php

namespace App\Livewire\Tables;

use App\Models\admin\Tag;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\ImageColumn;

class TagsTable extends DataTableComponent
{
    protected $model = Tag::class;

    public function configure(): void
    {
        $this->setPrimaryKey('slug')
            ->setTableRowUrl(function ($row) {
                return route('tags.edit', $row);
            })
            ->setTableRowUrlTarget(function ($row) {
                return '_self';
            });
        $this->setConfigurableAreas([
            'toolbar-right-start' => [
                'dashboard.components.table.button', [
                    'route' => route('tags.create'),
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
            Column::make(__('Id'), 'id')
                ->sortable(),
            ImageColumn::make(__('Image'), 'image')
                ->location(function ($row) {
                    $path = Tag::find($row->id)->image;

                    if ($path) {
                        return asset($path);
                    } else {
                        return asset('assets/images/default.jpg');
                    }
                })
                ->attributes(function ($row) {
                    return [
                        'class' => 'w-8 h-8 rounded-full border overflow-hidden',
                    ];
                }),
            Column::make(__('Title'), 'title')
                ->searchable()
                ->sortable(),
            Column::make(__('Created at'), 'created_at')
                ->sortable(),
            Column::make(__('Updated at'), 'updated_at')
                ->sortable(),
        ];
    }
}
