<?php

namespace App\Livewire\Tables;

use App\Models\admin\User;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\BooleanColumn;

class UsersTable extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('slug')
            ->setTableRowUrl(function ($row) {
                return route('users.edit', $row);
            })
            ->setTableRowUrlTarget(function ($row) {
                return '_self';
            });
        $this->setConfigurableAreas([
            'toolbar-right-start' => [
                'dashboard.components.table.button', [
                    'route' => route('users.create'),
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
        foreach ($this->getSelected() as $user) {
            try {
                $user = User::findBySlug($user);
                $user->update(['active', ! $user->active]);
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
                ->searchable()
                ->sortable(),
            Column::make('Nome', 'name')
                ->searchable()
                ->sortable(),
            Column::make('Email', 'email')
                ->searchable()
                ->sortable(),
            Column::make('Slug', 'slug')
                ->sortable(),
            Column::make('Ativo', 'slug')
                ->sortable(),
            BooleanColumn::make('Active'),
            Column::make('Criado em', 'created_at')
                ->sortable(),
            Column::make('Atualizado em', 'updated_at')
                ->sortable(),
        ];
    }
}
