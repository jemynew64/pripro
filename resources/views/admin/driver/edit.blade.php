@extends("admin.admin_dashboard") 

@section('name')

@if ($errors->any())
@foreach ($errors->all() as $e)
<div class="error">
    {{$e}}
</div>
@endforeach   
@endif 


<form action="{{ route('driver.update',$driver->id)}}" method="post">
    @method('put')

    @include('admin.driver.todo')
</form>

@endsection