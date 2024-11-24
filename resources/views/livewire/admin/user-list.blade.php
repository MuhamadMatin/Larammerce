<div>
    <livewire:search />
    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
        @include('components.user.user-page-admin', ['users' => $this->users])
    </div>
    <div class="my-3">
        {{ $this->users->onEachSide(1)->links(data: ['scrollTo' => false]) }}
    </div>
</div>
