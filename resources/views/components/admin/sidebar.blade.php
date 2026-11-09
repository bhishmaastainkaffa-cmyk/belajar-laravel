<div>
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidenav" id="drawer-navigation">

        <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">

            <ul class="space-y-2">

                {{-- Dashboard --}}
                <x-admin.menu-item href="/admin/dashboard" label="Dashboard">
                    <x-slot:icon>
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </x-slot:icon>
                </x-admin.menu-item>


                {{-- About --}}
                <x-admin.menu-item href="/admin/about" label="About">
                    <x-slot:icon>
                        <path fill-rule="evenodd"
                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                            clip-rule="evenodd" />
                    </x-slot:icon>
                </x-admin.menu-item>

                {{-- Students --}}
                <x-admin.menu-item href="/admin/student" label="Student">
                    <x-slot:icon>
                        <path fill-rule="evenodd"
                            d="M8 10a3 3 0 100-6 3 3 0 000 6zm-5 8a5 5 0 0110 0H3zm12-7a3 3 0 100-6 3 3 0 000 6zm-2 2a5 5 0 014 5h-4.5a6.97 6.97 0 00-2.5-4.9A5 5 0 0113 13z"
                            clip-rule="evenodd" />
                    </x-slot:icon>
                </x-admin.menu-item>

                {{-- Classroom --}}
                <x-admin.menu-item href="/admin/classroom" label="Classroom">
                    <x-slot:icon>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </x-slot:icon>
                </x-admin.menu-item>

                {{-- Subjects --}}
                <x-admin.menu-item href="/admin/subject" label="Subjects">
                    <x-slot:icon>
                        <path fill-rule="evenodd"
                            d="M4 3a1 1 0 011-1h10a1 1 0 011 1v16a1 1 0 01-1 1H5a1 1 0 01-1-1V3zm3 3h6v2H7V6zm0 4h6v2H7v-2z"
                            clip-rule="evenodd" />
                    </x-slot:icon>
                </x-admin.menu-item>

                {{-- Teachers --}}
                <x-admin.menu-item href="/admin/teacher" label="Teachers">
                    <x-slot:icon>
                        <path fill-rule="evenodd"
                            d="M12 12a4 4 0 100-8 4 4 0 000 8zm-7 8a7 7 0 0114 0H5zm12-9a3 3 0 100-6 3 3 0 000 6z"
                            clip-rule="evenodd" />
                    </x-slot:icon>
                </x-admin.menu-item>

            </ul>

        </div>
    </aside>
</div>
