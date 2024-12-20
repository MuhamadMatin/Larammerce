<footer class="py-8 text-white bg-blueDarker">
    <div class="max-w-screen-xl px-4 mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <!-- About Section -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">About Us</h3>
                <p class="text-sm">
                    We are a team of passionate developers dedicated to creating innovative and user-friendly websites.
                    Our mission is to empower businesses through digital solutions.
                </p>
            </div>

            <!-- Quick Links Section -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">Quick Links</h3>
                <span class="flex flex-col space-y-2 text-sm">
                    <a wire:navigate href="{{ route('index') }}" class="hover:text-orangeDark">Home</a>
                    <a wire:navigate href="{{ route('shopping') }}" class="hover:text-orangeDark">Shopping</a>
                    <a wire:navigate href="{{ route('blog') }}" class="hover:text-orangeDark">Blog</a>
                    {{-- <a wire:navigate href="{{ route('index') }}" class="hover:text-orangeDark">Contact</a> --}}
                </span>
            </div>

            <!-- Contact Section -->
            <div>
                <h3 class="mb-4 text-xl font-semibold">Contact</h3>
                <p class="text-sm">Email: admin@admin.com</p>
                <p class="text-sm">Phone: (123) 456-7890</p>
                <div class="mt-4">
                    <a href="https://facebook.com" class="mr-4 hover:text-orangeDark">Facebook</a>
                    <a href="https://twitter.com" class="mr-4 hover:text-orangeDark">Twitter</a>
                    <a href="https://instagram.com" class=" hover:text-orangeDark">Instagram</a>
                </div>
            </div>
        </div>

        <div class="mt-8 text-sm text-center">
            <p>&copy; {{ \Carbon\Carbon::now()->year }} Larammerce. All rights reserved.</p>
        </div>
    </div>
</footer>
