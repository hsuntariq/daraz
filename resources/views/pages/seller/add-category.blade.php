<x-flash/>
<x-seller-layout>
    <div class="container ">
        <h1 class="display-4 text-center">
            Add Category
        </h1>
        <form action="/add-category" class="shadow col-lg-5 mx-auto p-5" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Category Name</label>
            <input type="text" name="name" placeholder="Category name..." class="form-control" value="{{old('name')}}">
            @error('name')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror
            <label for="">Category image</label>
            <input type="file" name="image" class="form-control" value="{{old('image')}}">
            @error('image')
                <p class="text-danger fw-bold">
                    {{$message}}
                </p>
            @enderror
            <x-button>
                Add Category
            </x-button>
        </form>
    </div>
</x-seller-layout>