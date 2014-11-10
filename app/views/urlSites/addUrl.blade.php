@foreach($urlSities as $key => $value)
<tr  id="{{$value->id_url}}" style="text-align:center;">
    <td>{{ $value->id_url}}</td>
    <td>{{ $value->nameUrl}}</td>
    <td><button id ="viewEditor" class="btn btn-sm btn-primary">Ver</button></td>
</tr>
@endforeach


     
