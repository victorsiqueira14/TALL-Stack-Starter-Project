<x-layouts.app :title="__('Usuários')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold tracking-tight">Usuários</h1>
                <p class="text-muted-foreground">Gerencie os usuários do sistema</p>
            </div>
            <x-ui.button>
                <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                </svg>
                Adicionar Usuário
            </x-ui.button>
        </div>

        <!-- Stats Cards -->
        <div class="grid gap-4 md:grid-cols-4">
            <x-ui.card>
                <x-ui.card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                    <x-ui.card-title class="text-sm font-medium">Total de Usuários</x-ui.card-title>
                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-.5a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </x-ui.card-header>
                <x-ui.card-content>
                    <div class="text-2xl font-bold">1,234</div>
                    <p class="text-xs text-muted-foreground">+10.5% em relação ao mês passado</p>
                </x-ui.card-content>
            </x-ui.card>

            <x-ui.card>
                <x-ui.card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                    <x-ui.card-title class="text-sm font-medium">Usuários Ativos</x-ui.card-title>
                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </x-ui.card-header>
                <x-ui.card-content>
                    <div class="text-2xl font-bold">890</div>
                    <p class="text-xs text-muted-foreground">+5.2% em relação a ontem</p>
                </x-ui.card-content>
            </x-ui.card>

            <x-ui.card>
                <x-ui.card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                    <x-ui.card-title class="text-sm font-medium">Novos Usuários</x-ui.card-title>
                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                    </svg>
                </x-ui.card-header>
                <x-ui.card-content>
                    <div class="text-2xl font-bold">45</div>
                    <p class="text-xs text-muted-foreground">Esta semana</p>
                </x-ui.card-content>
            </x-ui.card>

            <x-ui.card>
                <x-ui.card-header class="flex flex-row items-center justify-between space-y-0 pb-2">
                    <x-ui.card-title class="text-sm font-medium">Taxa de Retenção</x-ui.card-title>
                    <svg class="h-4 w-4 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </x-ui.card-header>
                <x-ui.card-content>
                    <div class="text-2xl font-bold">72%</div>
                    <p class="text-xs text-muted-foreground">+2.1% em relação ao mês passado</p>
                </x-ui.card-content>
            </x-ui.card>
        </div>

        <!-- Filters -->
        <x-ui.card>
            <x-ui.card-header>
                <x-ui.card-title>Filtros</x-ui.card-title>
            </x-ui.card-header>
            <x-ui.card-content>
                <div class="flex flex-wrap gap-4">
                    <x-ui.form-field>
                        <x-ui.label for="search">Buscar</x-ui.label>
                        <x-ui.input id="search" placeholder="Buscar usuários..." />
                    </x-ui.form-field>
                    
                    <x-ui.form-field>
                        <x-ui.label for="status">Status</x-ui.label>
                        <select id="status" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                            <option value="">Todos</option>
                            <option value="active">Ativo</option>
                            <option value="inactive">Inativo</option>
                        </select>
                    </x-ui.form-field>
                    
                    <div class="flex items-end gap-2">
                        <x-ui.button>Filtrar</x-ui.button>
                        <x-ui.button variant="outline">Limpar</x-ui.button>
                    </div>
                </div>
            </x-ui.card-content>
        </x-ui.card>

        <!-- Users Table -->
        <x-ui.card>
            <x-ui.card-header>
                <x-ui.card-title>Lista de Usuários</x-ui.card-title>
                <x-ui.card-description>Gerencie e visualize todos os usuários do sistema</x-ui.card-description>
            </x-ui.card-header>
            <x-ui.card-content>
                <x-ui.table-wrapper>
                    <x-ui.table>
                        <x-ui.table-header>
                            <x-ui.table-row>
                                <x-ui.table-head>Usuário</x-ui.table-head>
                                <x-ui.table-head>Email</x-ui.table-head>
                                <x-ui.table-head>Status</x-ui.table-head>
                                <x-ui.table-head>Criado em</x-ui.table-head>
                                <x-ui.table-head>Ações</x-ui.table-head>
                            </x-ui.table-row>
                        </x-ui.table-header>
                        <x-ui.table-body>
                            <x-ui.table-row>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-3">
                                        <x-ui.avatar-root>
                                            <x-ui.avatar-image src="https://github.com/shadcn.png" alt="João Silva" />
                                            <x-ui.avatar-fallback>JS</x-ui.avatar-fallback>
                                        </x-ui.avatar-root>
                                        <div>
                                            <p class="font-medium">João Silva</p>
                                            <p class="text-sm text-muted-foreground">@joao.silva</p>
                                        </div>
                                    </div>
                                </x-ui.table-cell>
                                <x-ui.table-cell>joao.silva@email.com</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <x-ui.badge variant="default">Ativo</x-ui.badge>
                                </x-ui.table-cell>
                                <x-ui.table-cell>01/01/2024</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-2">
                                        <x-ui.button variant="ghost" size="sm">Editar</x-ui.button>
                                        <x-ui.button variant="ghost" size="sm">Deletar</x-ui.button>
                                    </div>
                                </x-ui.table-cell>
                            </x-ui.table-row>
                            
                            <x-ui.table-row>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-3">
                                        <x-ui.avatar-root>
                                            <x-ui.avatar-fallback>MS</x-ui.avatar-fallback>
                                        </x-ui.avatar-root>
                                        <div>
                                            <p class="font-medium">Maria Santos</p>
                                            <p class="text-sm text-muted-foreground">@maria.santos</p>
                                        </div>
                                    </div>
                                </x-ui.table-cell>
                                <x-ui.table-cell>maria.santos@email.com</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <x-ui.badge variant="secondary">Inativo</x-ui.badge>
                                </x-ui.table-cell>
                                <x-ui.table-cell>15/12/2023</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-2">
                                        <x-ui.button variant="ghost" size="sm">Editar</x-ui.button>
                                        <x-ui.button variant="ghost" size="sm">Deletar</x-ui.button>
                                    </div>
                                </x-ui.table-cell>
                            </x-ui.table-row>
                            
                            <x-ui.table-row>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-3">
                                        <x-ui.avatar-root>
                                            <x-ui.avatar-fallback>PO</x-ui.avatar-fallback>
                                        </x-ui.avatar-root>
                                        <div>
                                            <p class="font-medium">Pedro Oliveira</p>
                                            <p class="text-sm text-muted-foreground">@pedro.oliveira</p>
                                        </div>
                                    </div>
                                </x-ui.table-cell>
                                <x-ui.table-cell>pedro.oliveira@email.com</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <x-ui.badge variant="default">Ativo</x-ui.badge>
                                </x-ui.table-cell>
                                <x-ui.table-cell>20/02/2024</x-ui.table-cell>
                                <x-ui.table-cell>
                                    <div class="flex items-center space-x-2">
                                        <x-ui.button variant="ghost" size="sm">Editar</x-ui.button>
                                        <x-ui.button variant="ghost" size="sm">Deletar</x-ui.button>
                                    </div>
                                </x-ui.table-cell>
                            </x-ui.table-row>
                        </x-ui.table-body>
                    </x-ui.table>
                </x-ui.table-wrapper>
            </x-ui.card-content>
            <x-ui.card-footer>
                <x-ui.pagination>
                    <x-ui.pagination-content>
                        <x-ui.pagination-item>
                            <x-ui.pagination-link href="#" aria-label="Ir para página anterior">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                            </x-ui.pagination-link>
                        </x-ui.pagination-item>
                        <x-ui.pagination-item>
                            <x-ui.pagination-link href="#" :active="true">1</x-ui.pagination-link>
                        </x-ui.pagination-item>
                        <x-ui.pagination-item>
                            <x-ui.pagination-link href="#">2</x-ui.pagination-link>
                        </x-ui.pagination-item>
                        <x-ui.pagination-item>
                            <x-ui.pagination-link href="#">3</x-ui.pagination-link>
                        </x-ui.pagination-item>
                        <x-ui.pagination-item>
                            <x-ui.pagination-ellipsis>...</x-ui.pagination-ellipsis>
                        </x-ui.pagination-item>
                        <x-ui.pagination-item>
                            <x-ui.pagination-link href="#" aria-label="Ir para próxima página">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </x-ui.pagination-link>
                        </x-ui.pagination-item>
                    </x-ui.pagination-content>
                </x-ui.pagination>
            </x-ui.card-footer>
        </x-ui.card>
    </div>
</x-layouts.app>
