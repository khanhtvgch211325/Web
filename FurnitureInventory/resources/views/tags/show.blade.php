{{$tag->id}}<br>
{{$tag->name}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach($tag->products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @endforeach
</table>