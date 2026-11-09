
<x-admin.layout>

    <div class="col-span-full">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold mb-1">
                    {{ $title }}
                </h1>

                <p class="text-gray-500 dark:text-gray-400">
                    Teacher data
                </p>
            </div>

            <button
                type="button"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Add Teacher
            </button>
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">NIP</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Subject</th>
                        <th class="px-6 py-3">Start Date</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($teachers as $index => $teacher)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $teacher->nip }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $teacher->name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $teacher->subject?->name ?? '-' }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $teacher->start_date }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-admin.layout>
