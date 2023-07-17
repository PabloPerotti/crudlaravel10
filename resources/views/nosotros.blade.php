@extends('layouts.app')
@section('content')
    <section id="about">
        <div class="contenedor">
            <h2>Sobre nuestra Vinoteca</h2>
            <div class="columnas">
                <div class="columna1">
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                        Proin eget tortor risus. Sed porttitor lectus nibh. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit.

                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        Cras ultricies ligula sed magna dictum porta.
                    </p>
                    <img src="{{ url('assets/img/about.jpg')}}" alt="">
                </div>
                <div class="columna">
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                        Proin eget tortor risus. Sed porttitor lectus nibh. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit.

                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        Cras ultricies ligula sed magna dictum porta.
                    </p>
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere 
                        cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper
                        sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. 
                        Vivamus suscipit tortor eget felis porttitor volutpat
                    </p>
                    <p>
                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin
                        eget tortor risus. Sed porttitor lectus nibh.
                    </p>
                </div>
                <div class="columna">
                    <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. 
                        Proin eget tortor risus. Sed porttitor lectus nibh. Lorem ipsum dolor 
                        sit amet, consectetur adipiscing elit.

                        Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.
                        Cras ultricies ligula sed magna dictum porta.
                    </p>
                    <p>
                        Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis 
                        in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, 
                        auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, 
                        pretium ut lacinia in, elementum id enim. Vivamus suscipit.
                    </p>
                    <img src="{{ url('assets/img/about2.png')}}" alt="">
                
                </div>
            </div>
        </div>


    </section>

    @include('layouts.footer')
@endsection

