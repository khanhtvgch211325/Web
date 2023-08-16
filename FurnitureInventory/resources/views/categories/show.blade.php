{{$category->id}}<br>
{{$category->name}}<br>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach($category->products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
        </tr>
    @endforeach
</table>