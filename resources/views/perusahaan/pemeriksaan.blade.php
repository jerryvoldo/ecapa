<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pemeriksaan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="border border-green-800 border-collapse mx-auto mt-8 mb-4">
                    <thead>
                        <tr>
                            <th class="border border-green-500 px-2 py-2">Tanggal</th>
                            <th class="border border-green-500 px-2 py-2">Surat Tugas</th>
                            <th class="border border-green-500 px-2 py-2">Lead Auditor</th>
                            <th class="border border-green-500 px-2 py-2">Status CAPA</th>
                            <th class="border border-green-500 px-2 py-2">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
