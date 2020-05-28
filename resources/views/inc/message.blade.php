@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach    
@endif

@if(session('success'))
<div class="font-italic text-success mt-3">
    <p >{{session('success')}}</p>
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{session('error')}}
</div>
@endif
