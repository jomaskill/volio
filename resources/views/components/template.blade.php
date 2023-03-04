@props([
    'title' => '',
    'action' => '',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Volio</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body>
        <div>
            <div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
                <div class="flex flex-grow flex-col overflow-y-auto border-r border-gray-200 bg-white pt-5">
                    <div class="flex flex-shrink-0 items-center px-4">
                        <span class="text-indigo-700 font-bold text-xl tracking-widest select-none">
                            VOLIO
                        </span>
                    </div>
                    <div class="mt-5 flex flex-grow flex-col">
                        <nav class="flex-1 space-y-1 px-2 pb-4">
                            <x-navigation link="person.index">
                                <x-icons.user/>
                                People
                            </x-navigation>

                            <x-navigation link="email.index">
                                <x-icons.inbox/>
                                Email
                            </x-navigation>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="flex flex-1 flex-col md:pl-64">
                <div class="sticky top-0 z-10 flex h-16 flex-shrink-0 bg-white shadow">
                    <button type="button" class="border-r border-gray-200 px-4 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                        </svg>
                    </button>
                </div>
                <main class="flex-1">
                    <div class="py-6">
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 w-full inline-flex justify-between">
                            <h1 class="text-2xl font-semibold text-gray-900">{{ $title }}</h1>
                            {{ $action }}
                        </div>
                        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 mt-8">
                            {{ $slot }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
