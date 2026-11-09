
<x-admin.layout>

    <div class="col-span-full">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold mb-1">
                    {{ $title }}
                </h1>

                <p class="text-gray-500 dark:text-gray-400">
                    Classroom data
                </p>
            </div>

            <button
                type="button"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Add Classroom
            </button>
        </div>

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Class</th>
                        <th class="px-6 py-3">Major</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($classrooms as $index => $classroom)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $classroom->name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $classroom->major }}
                            </td>

                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>

                                <a href="#" class="ml-3 font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            </td>

                        </tr>

                    @endforeach
                </tbody>

            </table>

        </div>

    </div>

</x-admin.layout>
