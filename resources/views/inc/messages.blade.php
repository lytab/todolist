@if (count($errors)>0)
    @foreach ($errors as $erro)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
@if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    
@endif