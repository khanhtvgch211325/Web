<table style="border:1px solid">
    <tr style="border:1px solid">
        <th>Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Description</th>
        <th>Year</th>
        <th>Category</th>
        <th>Tags</th>
        <th>Action</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->quantity}}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->year }}</td>
            <td><a href="/categories/{{$product->category->id}}">{{ $product->category->name }}</a></td>
            <td>
                @foreach($product->tags as $tag)
                    <a href="/tags/{{$tag->id}}">{{ $tag->name }}</a>
                @endforeach
            </td>
            <td>
                <a href="/products/{{$product->id}}/edit">Edit</a>
                <form action="/products/{{ $product->id }}" method="post" style="display: inline">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Delete" onclick="return confirm('Are you sure?');">
                </form>
            </td>
        </tr>
    @endforeach
</table>
<a href =../products/create> <button>Create</button>
<a>