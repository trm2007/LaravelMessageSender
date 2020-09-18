@extends("layouts.default")

@section("MainTitle")Отправка сообщения @endsection

@section("Content")

<h1>Новое сообщение</h1>
<form action="{{ route('messages.store') }}" method="POST"
        class="p-6 w-full max-w-sm border border-gray-400 rounded">
    @csrf
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="user_name">
                Ваше имя:
            </label>
        </div>
        <div class="md:w-2/3">
            <input type="text" name="user_name" placeholder="введите имя"
class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
            >
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label for="user_email" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                Email:
            </label>
        </div>
        <div class="md:w-2/3">
            <input type="email" name="user_email" placeholder="введите email"
class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
            >
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label for="subject" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                Тема сообщения:
            </label>
        </div>
        <div class="md:w-2/3">
            <input type="text" name="subject" placeholder="тема"
class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
            >
        </div>
    </div>
    <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
            <label for="message" class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                Текст сообщения:
            </label>
        </div>
        <div class="md:w-2/3">
            <textarea name="message" placeholder="введите сообщение"
class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" 
            ></textarea>
        </div>
    </div>
    <div class="flex items-center">
        <button type="submit" 
class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >Отправить</button>
    </div>
</form>
@endsection