<x-layouts.app :title="__('Adicionar Usuário')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <!-- Header -->
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold tracking-tight">Adicionar Usuário</h1>
                <p class="text-muted-foreground">Crie uma nova conta de usuário</p>
            </div>
            <x-ui.button variant="outline">
                <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Voltar
            </x-ui.button>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <!-- Form -->
            <div class="md:col-span-2">
                <x-ui.card>
                    <x-ui.card-header>
                        <x-ui.card-title>Informações do Usuário</x-ui.card-title>
                        <x-ui.card-description>Preencha as informações básicas do usuário</x-ui.card-description>
                    </x-ui.card-header>
                    <x-ui.card-content>
                        <form class="space-y-6">
                            <div class="grid gap-4 md:grid-cols-2">
                                <x-ui.form-field>
                                    <x-ui.label for="first_name">Nome</x-ui.label>
                                    <x-ui.input id="first_name" name="first_name" placeholder="Digite o nome" required />
                                </x-ui.form-field>
                                
                                <x-ui.form-field>
                                    <x-ui.label for="last_name">Sobrenome</x-ui.label>
                                    <x-ui.input id="last_name" name="last_name" placeholder="Digite o sobrenome" required />
                                </x-ui.form-field>
                            </div>
                            
                            <x-ui.form-field>
                                <x-ui.label for="email">Email</x-ui.label>
                                <x-ui.input type="email" id="email" name="email" placeholder="usuario@email.com" required />
                                <x-ui.form-description>Este será o email usado para login</x-ui.form-description>
                            </x-ui.form-field>
                            
                            <x-ui.form-field>
                                <x-ui.label for="password">Senha</x-ui.label>
                                <x-ui.input type="password" id="password" name="password" placeholder="Digite uma senha segura" required />
                                <x-ui.form-description>A senha deve ter pelo menos 8 caracteres</x-ui.form-description>
                            </x-ui.form-field>
                            
                            <x-ui.form-field>
                                <x-ui.label for="password_confirmation">Confirmar Senha</x-ui.label>
                                <x-ui.input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirme a senha" required />
                            </x-ui.form-field>
                            
                            <x-ui.form-field>
                                <x-ui.label for="role">Função</x-ui.label>
                                <select id="role" name="role" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50">
                                    <option value="">Selecione uma função</option>
                                    <option value="admin">Administrador</option>
                                    <option value="user">Usuário</option>
                                    <option value="moderator">Moderador</option>
                                </select>
                                <x-ui.form-description>Define as permissões do usuário no sistema</x-ui.form-description>
                            </x-ui.form-field>
                            
                            <x-ui.form-field>
                                <x-ui.label for="bio">Biografia</x-ui.label>
                                <x-ui.textarea id="bio" name="bio" placeholder="Conte um pouco sobre o usuário..." />
                                <x-ui.form-description>Opcional. Máximo 500 caracteres.</x-ui.form-description>
                            </x-ui.form-field>
                            
                            <x-ui.separator />
                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <input type="checkbox" id="active" name="active" class="h-4 w-4 rounded border-gray-300 text-primary focus:ring-primary" checked />
                                    <x-ui.label for="active">Usuário ativo</x-ui.label>
                                </div>
                                <x-ui.badge variant="outline">Novo usuário</x-ui.badge>
                            </div>
                        </form>
                    </x-ui.card-content>
                    <x-ui.card-footer>
                        <div class="flex justify-end space-x-2">
                            <x-ui.button variant="outline">Cancelar</x-ui.button>
                            <x-ui.button type="submit">Criar Usuário</x-ui.button>
                        </div>
                    </x-ui.card-footer>
                </x-ui.card>
            </div>
            
            <!-- Sidebar -->
            <div class="space-y-4">
                <!-- Preview -->
                <x-ui.card>
                    <x-ui.card-header>
                        <x-ui.card-title>Prévia</x-ui.card-title>
                    </x-ui.card-header>
                    <x-ui.card-content>
                        <div class="flex flex-col items-center space-y-4">
                            <x-ui.avatar-root class="h-20 w-20">
                                <x-ui.avatar-fallback class="text-lg">US</x-ui.avatar-fallback>
                            </x-ui.avatar-root>
                            <div class="text-center">
                                <p class="font-medium">Nome do Usuário</p>
                                <p class="text-sm text-muted-foreground">email@exemplo.com</p>
                                <x-ui.badge variant="secondary" class="mt-2">Usuário</x-ui.badge>
                            </div>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
                
                <!-- Tips -->
                <x-ui.card>
                    <x-ui.card-header>
                        <x-ui.card-title>Dicas</x-ui.card-title>
                    </x-ui.card-header>
                    <x-ui.card-content>
                        <div class="space-y-3">
                            <x-ui.alert>
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <x-ui.alert-title>Senha Segura</x-ui.alert-title>
                                <x-ui.alert-description>
                                    Use uma combinação de letras, números e símbolos para uma senha mais segura.
                                </x-ui.alert-description>
                            </x-ui.alert>
                            
                            <div class="space-y-2">
                                <h4 class="font-medium">Permissões por Função:</h4>
                                <div class="space-y-1 text-sm">
                                    <div class="flex items-center space-x-2">
                                        <x-ui.badge variant="destructive" class="text-xs">Admin</x-ui.badge>
                                        <span class="text-muted-foreground">Acesso total</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <x-ui.badge variant="secondary" class="text-xs">Moderador</x-ui.badge>
                                        <span class="text-muted-foreground">Gerencia conteúdo</span>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <x-ui.badge variant="outline" class="text-xs">Usuário</x-ui.badge>
                                        <span class="text-muted-foreground">Acesso básico</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </x-ui.card-content>
                </x-ui.card>
            </div>
        </div>
    </div>
</x-layouts.app>
