@forelse ($users as $user)
    <div class="p-5 bg-white">
        <span class="flex">
            <img class="rounded-full w-14 h-14" src="{{ $user->image }}" alt="" loading='lazy'>
            <span class="ml-3">
                <h3>{{ $user->name }}</h3>
                <h4>{{ $user->email }}</h4>
                @forelse ($user->roles as $role)
                    <p>{{ $role->name }}</p>
                @empty
                    <p>empty role</p>
                @endforelse
            </span>
        </span>
        <span class="flex justify-end mt-4 gap-x-2">
            <a wire:navigate class="px-6 py-2 text-white duration-150 rounded-md bg-blueDarker hover:bg-orangeDark"
                href="">Edit</a>
            <a wire:navigate class="px-6 py-2 text-white duration-150 rounded-md bg-blueDarker hover:bg-orangeDark"
                href="">Delete</a>
        </span>
    </div>
@empty
    <p>empty</p>
@endforelse
