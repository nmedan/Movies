@if($errors->has($fieldName)) 
@foreach($errors->get($fieldName) as $error)
    <div class="alert-danger">
        <li>{{$error}}</li>
    </div>
@endforeach
@endif
