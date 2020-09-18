@extends("layouts.default")

@section("MainTitle")Все сообщения @endsection

@section("Content")

<h1>Все сообщения</h1>
@include("inc.comments")

@if( $AllMessages )
    @foreach($AllMessages as $Message)
        <div class="max-w-sm w-full mb-3">
          <div class="p-3 border border-gray-400 bg-white rounded-b flex flex-col justify-between leading-normal">
            <div class="mb-8">
              <div class="text-gray-900 font-bold text-xl mb-2">{{ $Message->subject }}</div>
              <p class="text-gray-700 text-base">{{ $Message->message }}</p>
            </div>
            <div class="flex items-center">
              <div class="text-sm">
                <p class="text-gray-900 leading-none">
                    {{ $Message->user_name }}, 
                    &lt;<a href="mailto:{{$Message->user_email}}">{{$Message->user_email}}</a>&gt;
                </p>
                <p class="text-gray-600">{{ $Message->created_at }}</p>
              </div>
            </div>
          </div>
        </div>
    @endforeach

    {{ $AllMessages->links() }} 
@endif
@endsection