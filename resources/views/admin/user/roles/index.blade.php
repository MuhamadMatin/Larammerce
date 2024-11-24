<x-admin-layout>
    @forelse ($roles as $role)
        <div class="">
            <h3>{{ $role->name }}</h3>
        </div>
        {{ $role }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
