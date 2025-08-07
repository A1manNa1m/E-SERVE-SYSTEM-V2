<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg p-6 overflow-x-auto">
                <table class="min-w-full text-sm divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Name</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Type</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Venue</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Date</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Time Start</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Time End</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Organizer</th>
                            <th class="p-2 text-left font-medium  uppercase bg-black text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($events as $event)
                            <tr>
                                <td class="p-2 whitespace-nowrap">{{ $event->name }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->type }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->venue }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->date }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->timestart }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->timeend }}</td>
                                <td class="p-2 whitespace-nowrap">{{ $event->organizer }}</td>
                                <td class="p-2 whitespace-nowrap">
                                    <button class="bg-blue-600 hover:bg-blue-800 text-white font-bold py-2 px-4 rounded shadow transition duration-200">
                                        ADD
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>