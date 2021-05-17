
@extends('layouts.default')
@section('content')



    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <div class="u-s-p-b-60">

        <!--====== Section Intro ======-->
        <div class="section__intro u-s-m-b-16">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">
                            <h1 class="section__heading u-c-secondary u-s-m-b-12">CREATE PRODUCT</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__text-wrap">



                            <form method='post' action="{{ route('products.store') }}">
                                    @csrf



                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input name="name" value="camiseta" required type="text" class="form-control" id="name"
                                        placeholder="ingrese nombre de producto">
                                </div>

                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <textarea required name="description" class="form-control" id="description"
                                        placeholder="ingrese descripcion del producto" rows="3">
                                         Camiseta deportiva, todas las tallas, todos los colores
                                            </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="price">Precio</label>
                                    <input name="price" value="180000" required type="number" class="form-control"
                                        placeholder="ingrese precio del producto">
                                </div>

                                <div class="form-group">
                                    <label for="score">Score</label>
                                    <input name="score" value="5" required type="number" class="form-control" id="stock"
                                        placeholder="ingrese la valoracion inicial">
                                </div>

                                <div class="form-group">
                                    <label for="stock">Stock</label>
                                    <input name="stock" value="30" required type="number" class="form-control" id="stock"
                                        placeholder="ingrese cantidad de productos">
                                </div>

                                <div class="form-group">
                                    <label for="name">URL Video</label>
                                    <input name="video" value="https://www.youtube.com/watch?v=wj5pqaRRFMY" required type="text" class="form-control" id="video"
                                        placeholder="ingrese url del video">
                                </div>
                                <div class="form-group">
                                    <label for="discount">Descuento</label>
                                    <input name="discount" value="10" required type="number" class="form-control"
                                        placeholder="ingrese descuento del producto">
                                </div>

                                <div class="form-check">
                                    <label class="form-check-label" for="defaultCheck1">
                                        <input name="available" class="available" type="checkbox" value="" id="available">
                                        Disponibilidad
                                    </label>
                                </div>
                                <br>

                                <div class="form-group">
                                    <label for="categorias">Seleccione categorias del producto</label>
                                    <select name="categories[]" multiple class="form-control" id="categories">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form> 

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection