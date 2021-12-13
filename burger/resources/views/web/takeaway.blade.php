@extends('web.plantilla')    
@section('contenido')
<section class="bg-04 mt-5" id="our-menu">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading">
                                <span>Menu</span>
                                <h2>Explore Nuestro Menu</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Asperiores officiis explicabo blanditiis consequuntur fugit 
                                fugiat, incidunt totam consectetur veritatis minus corporis
                                doloribus, qui maxime velit nesciunt, officia praesentium odit 
                                facilis.</p>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                @foreach($aProductos as $item)
                                <div class="col-md-3">
                                    <div class="wrapper">
                                        <div class="tab-content">
                                            <figure class="text-center">
                                                <img src='/files/{{$item->imagen}}' class="imagenes">
                                            </figure>
                                            <div class="sentence">
                                                <h3>{{$item->nombre}}<span>${{$item->precio}}</span></h3>
                                                <p>{{$item->descripcion}}</p>
                                            </div>
                                            <div class="rate-box">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                                    <input value="{{$item->idproducto}}" name="txtIdProducto" type="hidden">
                                                    <input type="number" name="txtCantidad" placeholder="CANTIDAD" class="txtCantidad">
                                                    <button class="btn">AGREGAR</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection