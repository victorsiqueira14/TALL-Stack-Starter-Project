<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="card">
                <div class="card-content relative aspect-video">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-muted-foreground/20" />
                </div>
            </div>
            <div class="card">
                <div class="card-content relative aspect-video">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-muted-foreground/20" />
                </div>
            </div>
            <div class="card">
                <div class="card-content relative aspect-video">
                    <x-placeholder-pattern class="absolute inset-0 size-full stroke-muted-foreground/20" />
                </div>
            </div>
        </div>
        <div class="card relative h-full flex-1">
            <div class="card-content relative h-full overflow-hidden">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-muted-foreground/20" />
            </div>
        </div>
    </div>
</x-layouts.app>
