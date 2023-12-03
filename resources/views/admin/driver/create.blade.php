@extends("admin.admin_dashboard") 

@section('name')

@if ($errors->any())
@foreach ($errors->all() as $e)
<div class="error">
    {{$e}}
</div>
@endforeach   
@endif 

<form action="{{ route('driver.store')}}" method="post">
    @include('admin.driver.todo')
</form>

@endsection