<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                <a href="{{ route('equipments.index') }}" class="btn btn-dark float-right">
                    back
                </a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card borde-0 shadow-lg my-3">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Add Equipments</h3>
                    </div>
                    <form enctype="multipart/form-data" action="{{ route('equipments.store') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label h5" for=""> Name: </label>
                                <input value="{{ old('name') }}" type="text"
                                    class="@error('name') is-invalid @enderror form-control form-control-lg"
                                    placeholder="Name" name="name">
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <x-input-label for="type" :value="__('Enter type')" /><br>
                                <select
                                    class="block appearance-none border rounded py-2 px-3 leading-tight focus:outline-none focus:shadow-outline mt-1 w-64"
                                    style="width: 100%;" id="type" name="type">
                                    <option value="0" {{ old('type') == '0' ? 'selected' : '' }}>Electric</option>
                                    <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Manual</option>
                                    <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Pending</option>
                                    <option value="3" {{ old('type') == '3' ? 'selected' : '' }}>Complete</option>
                                </select>
                                @error('type')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Description </label>
                                <textarea class="form-control" name="description" cols="30" rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Qty </label>
                                <input value="{{ old('qty') }}" type="text"
                                    class="@error('qty') is-invalid @enderror form-control form-control-lg"
                                    placeholder="qty" name="qty">
                                @error('qty')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label h5" for="">Price </label>
                                <input value="{{ old('price') }}" type="text"
                                    class="@error('price') is-invalid @enderror form-control form-control-lg"
                                    placeholder="price" name="price">
                                @error('price')
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
                            </div>

                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary ">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>








</body>

</html>
