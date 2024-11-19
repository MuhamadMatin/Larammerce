<x-admin-layout>
    @forelse ($users as $user)
        {{ $user }}
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
