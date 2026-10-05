<x-admin.layout>

    @php
        $students = [
            ['id' => 1, 'name' => 'Bhishma', 'classroom' => '11 PPLG 2'],
            ['id' => 2, 'name' => 'Dani', 'classroom' => '11 PPLG 2'],
            ['id' => 3, 'name' => 'Giga', 'classroom' => '11 PPLG 1'],
            ['id' => 4, 'name' => 'Iyan', 'classroom' => '11 PPLG 1'],
            ['id' => 5, 'name' => 'Abdillah', 'classroom' => '11 PPLG 2'],
            ['id' => 6, 'name' => 'Pandu', 'classroom' => '11 PPLG 1'],
            ['id' => 7, 'name' => 'Rafif', 'classroom' => '11 PPLG 2'],
            ['id' => 8, 'name' => 'Dika', 'classroom' => '11 PPLG 1'],
            ['id' => 9, 'name' => 'Haqi', 'classroom' => '11 PPLG 2'],
            ['id' => 10, 'name' => 'Abel', 'classroom' => '11 PPLG 1'],
        ];
    @endphp

    <div class="col-span-full">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">

            <div>
                <h1 class="text-2xl font-bold mb-1">
                    Students
                </h1>

                <p class="text-gray-500 dark:text-gray-400">
                    Student data
                </p>
            </div>

            {{-- Add --}}
            <button
                type="button"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Add Student
            </button>

        </div>


        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">
                            ID
                        </th>

                        <th class="px-6 py-3">
                            Name
                        </th>

                        <th class="px-6 py-3">
                            Classroom
                        </th>

                        <th class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($students as $student)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4">
                                {{ $student['id'] }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $student['name'] }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $student['classroom'] }}
                            </td>

                            <td class="px-6 py-4">
                                <button class="text-blue-600 hover:underline">
                                    Edit
                                </button>

                                <button class="ml-3 text-red-600 hover:underline">
                                    Delete
                                </button>
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</x-admin.layout>
