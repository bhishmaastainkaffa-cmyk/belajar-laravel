<div>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav"
        id="drawer-navigation"
    >

        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

            <ul class="space-y-2">

                {{-- Dashboard --}}
                <x-admin.menu-item
                    href="/admin/dashboard"
                    label="Dashboard"
                >
                    <x-slot:icon>
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </x-slot:icon>
                </x-admin.menu-item>


                {{-- About --}}
                <x-admin.menu-item
                    href="/admin/about"
                    label="About"
                >
                    <x-slot:icon>
                        <path
                            fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd"
                        />
                    </x-slot:icon>
                </x-admin.menu-item>

            </ul>

        </div>
    </aside>
</div>
