@extends("admin.admin_dashboard") 

@section('name')

@if ($errors->any())
@foreach ($errors->all() as $e)
<div class="error">
    {{$e}}
</div>
@endforeach   
@endif 

<form action="{{ route('route.store')}}" method="post">
    @include('admin.route.todo')
</form>

@endsection