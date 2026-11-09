
<x-admin.layout>

    <div class="col-span-full">

        {{-- Header --}}
        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold mb-1">
                    {{ $title }}
                </h1>

                <p class="text-gray-500 dark:text-gray-400">
                    Student data
                </p>
            </div>

            {{-- Button Add Student --}}
            <button
                type="button"
                data-modal-target="studentModal"
                data-modal-toggle="studentModal"
                class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                Add Student
            </button>
        </div>

        {{-- Success Message --}}
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50">
                {{ session('success') }}
            </div>
        @endif

        {{-- Table --}}
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">NIS</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Class</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($students as $index => $student)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                            <td class="px-6 py-4">
                                {{ $index + 1 }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $student->nis }}
                            </td>

                            <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">
                                {{ $student->name }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $student->classroom?->name ?? '-' }}
                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>


    {{-- Modal Add Student --}}
    <div id="studentModal"
        tabindex="-1"
        aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-full">

        <div class="relative p-4 w-full max-w-2xl max-h-full">

            <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

                {{-- Modal Header --}}
                <div class="flex justify-between items-center pb-4 mb-4 border-b dark:border-gray-600">

                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add Student
                    </h3>

                    <button
                        type="button"
                        data-modal-hide="studentModal"
                        class="text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5">
                        ✕
                    </button>

                </div>

                {{-- Modal Body --}}
                <form action="{{ route('admin.student.store') }}" method="POST">
                    @csrf

                    <div class="grid gap-4 mb-4 sm:grid-cols-2">

                        {{-- NIS --}}
                        <div>
                            <label for="nis"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                NIS
                            </label>

                            <input
                                type="number"
                                name="nis"
                                id="nis"
                                value="{{ old('nis') }}"
                                required
                                placeholder="Enter student NIS"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            @error('nis')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Name --}}
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Student Name
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                required
                                placeholder="Enter student name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                            @error('name')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Class --}}
                        <div class="sm:col-span-2">

                            <label for="classroom_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Class
                            </label>

                            <select
                                name="classroom_id"
                                id="classroom_id"
                                required
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white">

                                <option value="">-- Select Class --</option>

                                @foreach ($classrooms as $classroom)

                                    <option
                                        value="{{ $classroom->id }}"
                                        {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>

                                        {{ $classroom->name }}

                                    </option>

                                @endforeach

                            </select>

                            @error('classroom_id')
                                <p class="mt-1 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>

                    </div>

                    {{-- Submit Button --}}
                    <button
                        type="submit"
                        class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm px-5 py-2.5">

                        Save Student

                    </button>

                </form>

            </div>

        </div>

    </div>

</x-admin.layout>
