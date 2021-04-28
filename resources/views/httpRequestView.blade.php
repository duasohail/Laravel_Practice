<h2>Users Table</h2>
<table>
{{print_r($collection[1])}}
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>photo</td>
    </tr>
    @foreach($collection as $item)
    
    <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['first_name']}}</td>
        <td>{{$item['email']}}</td>
        <td><img src="{{$item['avatar']}}" width="70px" height="70px"></td>
    </tr>
    @endforeach
</table>