<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add materials</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Material Add</h3>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex jestify-content-end float-right ">
                <a href="{{ route('materials.index') }}" class="btn btn-dark float-right">
                    back
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Edit Materials</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('materials.update', $material->id) }}" method="post">
                        @method( 'PUT' )
                        @csrf

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label h5" for=""> Name: </label>
                                <input value="{{ old('name', $material->name) }}" type="text"
                                    class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Sku </label>
                                <input value="{{ old('sku', $material->sku) }}" type="text"
                                    class="@error('sku') is-invalid @enderror form-control form-control-lg"
                                    placeholder="sku" name="sku">
                                @error('sku')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Price </label>
                                <input value="{{ old('price', $material->price) }}" type="text"
                                    class="@error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="price" name="price">
                                @error('price')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Qty </label>
                                <input value="{{ old('qty', $material->qty) }}" type="text"
                                    class="@error('qty') is-invalid @enderror form-control form-control-lg"
                                    placeholder="qty" name="qty">
                                @error('qty')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="5">{{ old('description', $material->description) }}"</textarea>
                                @error('description')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Images </label>
                                <input type="file" class="form-control form-control-lg" placeholder="image"
                                    name="image">
                                @error('image')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror

                                @if ($material->image != '')
                                    <img class="w-50 my-3"
                                        src="{{ global_asset('materialuploads\materialproducts' . '/' . $material->image) }}" />
                                @endif
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary ">update</button>
                            </div>









                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
