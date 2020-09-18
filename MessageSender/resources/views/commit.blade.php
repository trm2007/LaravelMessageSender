@extends("layouts.default")

@section("MainTitle")Сообщения @endsection

@section("Content")
<div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"
><a href="{{ route("messages.create") }}" class="underline text-gray-900 dark:text-white">Написать новое</a></div>
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"
><a href="{{ route("messages.index") }}" class="underline text-gray-900 dark:text-white">Посмотреть сообщения</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1>Сообщение отправлено!</h1>
</div>
@endsection