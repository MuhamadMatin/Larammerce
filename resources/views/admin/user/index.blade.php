<x-admin-layout>
    @forelse ($users as $user)
        {{ $user }}
        @forelse ($user->roles as $role)
            {{ $role }}
        @empty
            <p>empty role</p>
        @endforelse
    @empty
        <p>empty</p>
    @endforelse
</x-admin-layout>
