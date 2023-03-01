@foreach ($users as $user)
<ul>
{{$user->id}}
{{$user->name}}
{{$user->age}}
{{$user->email}}

</ul>
@endforeach