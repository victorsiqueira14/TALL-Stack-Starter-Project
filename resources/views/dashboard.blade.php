<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <x-ui.card>
                <x-ui.card-header>
                    <x-ui.card-title>Vendas</x-ui.card-title>
                    <x-ui.card-description>Total de vendas do mês</x-ui.card-description>
                </x-ui.card-header>
                <x-ui.card-content class="relative aspect-video">
                    <div class="flex items-center justify-center h-full">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">R$ 45.231</div>
                            <p class="text-sm text-muted-foreground">+20.1% em relação ao mês passado</p>
                        </div>
                    </div>
                </x-ui.card-content>
            </x-ui.card>
            
            <x-ui.card>
                <x-ui.card-header>
                    <x-ui.card-title>Usuários</x-ui.card-title>
                    <x-ui.card-description>Usuários ativos hoje</x-ui.card-description>
                </x-ui.card-header>
                <x-ui.card-content class="relative aspect-video">
                    <div class="flex items-center justify-center h-full">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">1,234</div>
                            <p class="text-sm text-muted-foreground">+5.2% em relação a ontem</p>
                        </div>
                    </div>
                </x-ui.card-content>
            </x-ui.card>
            
            <x-ui.card>
                <x-ui.card-header>
                    <x-ui.card-title>Pedidos</x-ui.card-title>
                    <x-ui.card-description>Pedidos processados hoje</x-ui.card-description>
                </x-ui.card-header>
                <x-ui.card-content class="relative aspect-video">
                    <div class="flex items-center justify-center h-full">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-primary">89</div>
                            <p class="text-sm text-muted-foreground">+12.5% em relação a ontem</p>
                        </div>
                    </div>
                </x-ui.card-content>
            </x-ui.card>
        </div>
        
        <x-ui.card class="relative h-full flex-1">
            <x-ui.card-header>
                <x-ui.card-title>Atividade Recente</x-ui.card-title>
                <x-ui.card-description>Últimas atividades do sistema</x-ui.card-description>
            </x-ui.card-header>
            <x-ui.card-content class="relative h-full overflow-hidden">
                <div class="space-y-4">
                    <div class="flex items-center space-x-4">
                        <x-ui.badge variant="default">Novo</x-ui.badge>
                        <div class="flex-1">
                            <p class="text-sm font-medium">Novo usuário registrado</p>
                            <p class="text-sm text-muted-foreground">João Silva se registrou no sistema</p>
                        </div>
                        <span class="text-sm text-muted-foreground">2min atrás</span>
                    </div>
                    
                    <x-ui.separator />
                    
                    <div class="flex items-center space-x-4">
                        <x-ui.badge variant="secondary">Venda</x-ui.badge>
                        <div class="flex-1">
                            <p class="text-sm font-medium">Venda processada</p>
                            <p class="text-sm text-muted-foreground">Pedido #1234 foi processado com sucesso</p>
                        </div>
                        <span class="text-sm text-muted-foreground">5min atrás</span>
                    </div>
                    
                    <x-ui.separator />
                    
                    <div class="flex items-center space-x-4">
                        <x-ui.badge variant="destructive">Erro</x-ui.badge>
                        <div class="flex-1">
                            <p class="text-sm font-medium">Erro no sistema</p>
                            <p class="text-sm text-muted-foreground">Falha na conexão com o gateway de pagamento</p>
                        </div>
                        <span class="text-sm text-muted-foreground">10min atrás</span>
                    </div>
                </div>
            </x-ui.card-content>
        </x-ui.card>
    </div>
</x-layouts.app>
