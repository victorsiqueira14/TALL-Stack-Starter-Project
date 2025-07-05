<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <h2 class="text-lg font-semibold text-foreground">{{ __('Delete account') }}</h2>
        <p class="mt-1 text-sm text-muted-foreground">{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <x-ui.button x-data=""
                 x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                 variant="destructive">
        {{ __('Delete account') }}
    </x-ui.button>

    <div x-data="{ show: @entangle('showDeleteModal').defer }"
         x-show="show"
         x-on:open-modal.window="$event.detail === 'confirm-user-deletion' && (show = true)"
         x-on:close.stop="show = false"
         x-on:keydown.escape.window="show = false"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto"
         style="display: none;">
        
        <!-- Overlay -->
        <div class="fixed inset-0 bg-background/80 backdrop-blur-sm"></div>

        <!-- Modal -->
        <div class="relative min-h-full flex items-center justify-center p-4">
            <x-ui.card x-on:click.stop
                      x-transition:enter="ease-out duration-300"
                      x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                      x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                      x-transition:leave="ease-in duration-200"
                      x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                      x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                      class="relative w-full max-w-lg transform overflow-hidden transition-all sm:my-8">
                
                <x-ui.card-header>
                    <x-ui.card-title>{{ __('Are you sure you want to delete your account?') }}</x-ui.card-title>
                    <x-ui.card-description>
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </x-ui.card-description>
                </x-ui.card-header>

                <form wire:submit="deleteUser">
                    <x-ui.card-content class="space-y-6">

                        <x-ui.form-field>
                            <x-ui.label for="password">{{ __('Password') }}</x-ui.label>
                            <x-ui.input type="password" id="password" wire:model="password" />
                        </x-ui.form-field>
                    </x-ui.card-content>

                    <x-ui.card-footer class="flex justify-end space-x-2">
                        <x-ui.button type="button" x-on:click="show = false" variant="outline">
                            {{ __('Cancel') }}
                        </x-ui.button>

                        <x-ui.button type="submit" variant="destructive">
                            {{ __('Delete account') }}
                        </x-ui.button>
                    </x-ui.card-footer>
                </form>
            </x-ui.card>
        </div>
    </div>
</section>
