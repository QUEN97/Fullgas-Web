@extends('layouts.app')

@section('title', 'El Buen Trato')

@section('content')
    <x-heroTitle image="images/headers/header-buen-trato.jpg" title="¡Es nuestra gran diferencia!" paragraph=""
        subparagraph="Programa de generación de bienestar el cual busca mejorar y transformar la calidad de vida de las personas que interactúan con la familia FullGas."
        overlay="bg-black/50" />

    <section class="bg-[#d11a50] py-8 px-6">
        <div class="max-w-4xl grid grid-cols-1 md:grid-cols-3 gap-4 mx-auto">
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M251.76,88.94l-120-64a8,8,0,0,0-7.52,0l-120,64a8,8,0,0,0,0,14.12L32,117.87v48.42a15.91,15.91,0,0,0,4.06,10.65C49.16,191.53,78.51,216,128,216a130,130,0,0,0,48-8.76V240a8,8,0,0,0,16,0V199.51a115.63,115.63,0,0,0,27.94-22.57A15.91,15.91,0,0,0,224,166.29V117.87l27.76-14.81a8,8,0,0,0,0-14.12ZM128,200c-43.27,0-68.72-21.14-80-33.71V126.4l76.24,40.66a8,8,0,0,0,7.52,0L176,143.47v46.34C163.4,195.69,147.52,200,128,200Zm80-33.75a97.83,97.83,0,0,1-16,14.25V134.93l16-8.53ZM188,118.94l-.22-.13-56-29.87a8,8,0,0,0-7.52,14.12L171,128l-43,22.93L25,96,128,41.07,231,96Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">
                        {{ __('CAPACITACIÓN') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Personal capacitado para brindar una atención de calidad en cada una de nuestras estaciones de servicio.') }}
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('AUDITORÍA') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Evaluación continua de procesos en cada una de nuestras estaciones de servicio.') }}
                </p>
            </div>
            <div class="bg-[#f4f4f5] p-8 rounded-lg shadow-lg max-w-md mx-auto ">
                <div class="flex flex-col items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 bg-[#fff] rounded-full p-2" fill="#ff0101"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,96A88,88,0,1,0,72,163.83V240a8,8,0,0,0,11.58,7.16L128,225l44.43,22.21A8.07,8.07,0,0,0,176,248a8,8,0,0,0,8-8V163.83A87.85,87.85,0,0,0,216,96ZM56,96a72,72,0,1,1,72,72A72.08,72.08,0,0,1,56,96ZM168,227.06l-36.43-18.21a8,8,0,0,0-7.16,0L88,227.06V174.37a87.89,87.89,0,0,0,80,0ZM128,152A56,56,0,1,0,72,96,56.06,56.06,0,0,0,128,152Zm0-96A40,40,0,1,1,88,96,40,40,0,0,1,128,56Z">
                        </path>
                    </svg>
                    <h2 class="text-xl text-center font-bold text-gray-800 mt-3">{{ __('INCENTIVOS') }}</h2>
                </div>
                <p class="text-gray-700 mt-4">
                    {{ __('Reconocimiento al desempeño de nuestro personal.') }}
                </p>
            </div>
        </div>
    </section>

    <x-galeria-buentrato />
@endsection
