<x-flash/>
<x-seller-layout>
    <div class="container ">
        <h1 class="display-4 text-center">
            Add Product
        </h1>
        <form action="/add-product" class="shadow col-lg-5 mx-auto p-5" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Product Name</label>
            <input type="text" name="name" placeholder="Product name..." class="form-control" value="{{old('name')}}">
            @error('name')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror

            <label for="">Product Description</label>
            <input type="text" name="desc" placeholder="Product description..." class="form-control" value="{{old('desc')}}">
            @error('desc')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror
            <label for="">Product Price</label>
            <input type="number" name="price" placeholder="Product Price..." class="form-control" value="{{old('price')}}">
            @error('desc')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror
            <label for="">Product Old Price</label>
            <input type="number" name="old_price" placeholder="Product Old Price..." class="form-control" value="{{old('old_price')}}">
            @error('old_price')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror

            <label for="">Product image</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">
            @error('image')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror
            <x-button>
                Add Product
            </x-button>
        </form>
    </div>
</x-seller-layout>