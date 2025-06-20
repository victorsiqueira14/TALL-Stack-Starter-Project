<section class="mt-10 space-y-6">
    <div class="relative mb-5">
        <h2 class="text-lg font-semibold text-zinc-900 dark:text-white">{{ __('Delete account') }}</h2>
        <p class="mt-1 text-sm text-zinc-600 dark:text-zinc-400">{{ __('Delete your account and all of its resources') }}</p>
    </div>

    <button x-data=""
            x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
            class="inline-flex items-center justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-400 dark:focus:ring-offset-zinc-800">
        {{ __('Delete account') }}
    </button>

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
        <div class="fixed inset-0 bg-zinc-400/25 backdrop-blur-sm dark:bg-zinc-700/50"></div>

        <!-- Modal -->
        <div class="relative min-h-full flex items-center justify-center p-4">
            <div x-on:click.stop
                 x-transition:enter="ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave="ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                 class="relative w-full max-w-lg transform overflow-hidden rounded-xl bg-white p-6 text-left shadow-xl transition-all dark:bg-zinc-800 sm:my-8">
                
                <form wire:submit="deleteUser" class="space-y-6">
                    <div>
                        <h3 class="text-lg font-semibold text-zinc-900 dark:text-white">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h3>

                        <p class="mt-2 text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-zinc-900 dark:text-zinc-100">
                            {{ __('Password') }}
                        </label>
                        <input type="password"
                               id="password"
                               wire:model="password"
                               class="mt-1 block w-full rounded-lg border border-zinc-300 bg-white px-3 py-2 text-sm text-zinc-900 shadow-sm outline-none placeholder:text-zinc-400 focus:border-primary-500 focus:ring-1 focus:ring-primary-500 disabled:bg-zinc-50 disabled:text-zinc-500 dark:border-zinc-700 dark:bg-zinc-800 dark:text-white dark:placeholder:text-zinc-500 dark:focus:border-primary-400 dark:focus:ring-primary-400 dark:disabled:bg-zinc-900 dark:disabled:text-zinc-400" />
                    </div>

                    <div class="flex justify-end space-x-2 rtl:space-x-reverse">
                        <button type="button"
                                x-on:click="show = false"
                                class="inline-flex items-center justify-center rounded-lg bg-white px-4 py-2 text-sm font-semibold text-zinc-900 shadow-sm ring-1 ring-inset ring-zinc-300 hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-primary-500 disabled:opacity-50 dark:bg-zinc-800 dark:text-zinc-100 dark:ring-zinc-700 dark:hover:bg-zinc-700 dark:focus:ring-primary-400">
                            {{ __('Cancel') }}
                        </button>

                        <button type="submit"
                                class="inline-flex items-center justify-center rounded-lg bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 disabled:opacity-50 dark:bg-red-500 dark:hover:bg-red-400 dark:focus:ring-red-400 dark:focus:ring-offset-zinc-800">
                            {{ __('Delete account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
