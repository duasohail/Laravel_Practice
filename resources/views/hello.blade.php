<h1>hello</h1>
<a href="/">welcome</a>
@foreach($users as $user)
<h1>{{$user}}</h1>
@endforeach

@csrf;

<!-- <script>
var data= @json($users);
console.log(data);
</script> -->