@if($errors->any() )
<div role="alert" class="m-3">
  <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
    Внимание!
  </div>
  <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
    @foreach($errors->all() as $Error)
        <p>{{ $Error }}</p>
    @endforeach
  </div>
</div>
@endif
@if( session("success") )
<div role="alert" class="m-3">
  <div class="bg-blue-500 text-white font-bold rounded-t px-4 py-2">
    Информация:
  </div>
  <div class="border border-t-0 border-blue-400 rounded-b bg-blue-100 px-4 py-3 text-blue-700">
    @foreach(session("success") as $Comment)
        <p>{{ $Comment }}</p>
    @endforeach
  </div>
</div>
@endif

