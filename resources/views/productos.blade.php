<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Ingersar Productos!
                    <br>
                    <form action="{{ route('productos') }}" method="get">
                    <p>Codigo: <input type="text" name="codigo" size="40"></p>
                    <p>Descripcion: <input type="text" name="descripcion" size="40"></p>
                    <p>Cantidad: <input type="text" name="cantidad" size="40"></p>
                    <p>Precio: <input type="number" name="precio" size="40"></p>
                    <p>Unidad: <input type="text" name="unidad" size="40"></p>
                    <p>
                        <input type="submit" value="Enviar">
                    </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>