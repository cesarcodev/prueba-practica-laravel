<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Información del automovil
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                               Información del Carro
                            </h2>

                     
                        </header>
                        @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form action="{{ route('car/update', $car->id) }}" method="POST" class="mt-6 space-y-6">
                            @csrf
                            @method('PUT')

                         
                            <div>
                                <x-input-label for="brand" :value="__('Marca')" />
                                <x-text-input id="brand" name="brand" type="text" class="mt-1 block w-full" :value="old('brand', $car->brand)" required  autocomplete="brand" />
                                <x-input-error class="mt-2" :messages="$errors->get('brand')" />
                            </div>
                            <div>
                                <x-input-label for="model" :value="__('Modelo')" />
                                <x-text-input id="model" name="model" type="text" class="mt-1 block w-full" :value="old('model', $car->model)" required  autocomplete="model" />
                                <x-input-error class="mt-2" :messages="$errors->get('model')" />
                            </div>

                            <div>
                                <x-input-label for="price" :value="__('Precio')" />
                                <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" :value="old('price',$car->price)" required  autocomplete="price" />
                                <x-input-error class="mt-2" :messages="$errors->get('price')" />
                            </div>

                            <div>
                                <x-input-label for="year" :value="__('Año')" />
                                <x-text-input id="year" name="year" type="number" class="mt-1 block w-full" :value="old('year', $car->year)" required  autocomplete="year" />
                                <x-input-error class="mt-2" :messages="$errors->get('year')" />
                            </div>

                            <div>
                                <x-input-label for="color" :value="__('Color')" />
                                <x-text-input id="color" name="color" type="text" class="mt-1 block w-full" :value="old('color', $car->color)" required  autocomplete="color" />
                                <x-input-error class="mt-2" :messages="$errors->get('color')" />
                            </div>

                            <div>
                                <x-input-label for="mileage" :value="__('Kilometraje')" />
                                <x-text-input id="mileage" name="mileage" type="number" class="mt-1 block w-full" :value="old('mileage', $car->mileage)" required  autocomplete="mileage" />
                                <x-input-error class="mt-2" :messages="$errors->get('mileage')" />
                            </div>


                           
                            <div class="flex items-center gap-4">
                                <x-primary-button>Guardar</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
