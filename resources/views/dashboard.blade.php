<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">



                  
                        <div
                            class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <div class="flex flex-col items-center justify-center">
                                <dt class="mb-2 text-3xl font-extrabold"> {{ $total }}</dt>
                                <dd class="text-gray-500 dark:text-gray-400">Carros Registrados</dd>
                            </div>
                        </div>

                        <div class="py-2 w-1/2">
                            <canvas id="myChart"></canvas>
                        </div>
                    




                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
                labels: {!! json_encode($marcas) !!},
                datasets: [{
                    label: 'Automóviles',
                    data: {!! json_encode($cantidades) !!},
                    borderWidth: 1
                }]
            },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                            callback: function(value) {
                                if (Number.isInteger(value)) {
                                    return value;
                                }
                            },
                            stepSize: 1
                        }
                }
            }
        }
    });
    </script>
</x-app-layout>