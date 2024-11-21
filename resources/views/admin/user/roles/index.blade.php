<x-admin-layout>
    @forelse ($roles as $role)
        {{ $role }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
