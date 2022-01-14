<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{$search}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <x-table>
            <div class="px-6 py-4 flex items-center">
                <x-jet-input class="flex-1 mr-3" placeholder="Escriba lo que desea buscar" type="text" wire:model="search" />
                @livewire('create-post')
            </div>
            @if ($posts->count())
            <table class="w-full">
                <thead>
                    <tr
                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class=" cursor-pointer px-4 py-3" wire:click="order('id')">ID</th>
                        <th class=" cursor-pointer px-4 py-3" wire:click="order('title')">Titulo</th>
                        <th class=" cursor-pointer px-4 py-3" wire:click="order('content')">Contenido</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($posts as $post)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                            {{$post->id}}
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">
                            {{$post->title}}
                        </td>
                        <td class="px-4 py-3 text-xs border">
                            {{$post->content}}
                        </td>
                        <td class="px-4 py-3 text-sm border">

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
                <div class="px-6 py-4">
                    <h3>No existen registros</h3>
                </div>
            @endif
        </x-table>
    </div>
</div>
