@extends('layouts.app')

@section('content')
<div class="container-fluid my-3">

    <div class="text-center">
        <img class="img-fluid" src="{{ asset('images/nn.png') }}" alt="no">
    </div>

    <div class="my-2 jumbotron bg-dark">
        <h2 class="text-light" >¿Quienes somos?</h2> 
        <hr class="bg-warning"> 
        <div class="col-10">
            <p class="text-light h5">Somos una empresa conformada por un grupo de profesionales que asesoramos y facilitamos la administración de procesos apoyados en información de los diferentes sectores económicos y basados en análisis estadísticos para la toma de decisiones. Nos apasiona analizar y evaluar el impacto de las políticas públicas en el sector privado y generar alternativas para su aprovechamiento.</p>                
        </div>
    </div>
    
    <div class="text-center my-2" >
        <img  width="180" src="{{ asset('images/adb1.png') }}" class="m-4" alt="">
        <br>
        <span class="text-warning">
            +57 3163413215
        </span>    
        <br>        
        <span class="text-warning">
            wilopez@adbconsulting.com.co
        </span>
    </div>

    <div class="jumbotron my-2 py-5 bg-dark">
        <div class="container">    
            <div class="row text-center">
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('images/LOGO_BLACK.jpg') }}" class="img-fluid" alt="nada">                        
                        <div class="card-body">
                            <p class="card-text">Diseño y estructuración de procesos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('images/LOGO_LIGHT.jpg') }}" class="img-fluid" alt="nada">                        
                        <div class="card-body">
                            <p class="card-text">Documentación y estandarización de procesos</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('images/LOGO_BLACK.jpg') }}" class="img-fluid" alt="nada">                        
                        <div class="card-body">
                            <p class="card-text">Análisis de las políticas públicas y su impacto en los diferentes sectores económicos</p>
                        </div>
                    </div>
                </div> 
                <div class="col-sm-6 col-md-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('images/LOGO_LIGHT.jpg') }}" class="img-fluid" alt="nada">                   
                        <div class="card-body">
                            <p class="card-text">Medición y evaluación por gestión de procesos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center my-2" >
        <img  width="180" src="{{ asset('images/adb1.png') }}" class="m-4" alt="">
        <br>
        <span class="text-warning">
            +57 3163413215
        </span>    
        <br>        
        <span class="text-warning">
            wilopez@adbconsulting.com.co
        </span>
    </div>

    <div class="jumbotron my-3 text-center bg-dark">
            <div class="row text-light p-3">
                <div class="col-sm-6 text-center p-3">
                    <img src="{{ asset('images/LOGO_BLACK.jpg') }}" class="img-fluid p-2 rounded-circle" alt="nada" style="max-width: 10rem">
                    <h2>Mision</h2>
                    <hr class="bg-warning"> 
                    <p>Diseñar, mejorar y administrar procesos que permitan a nuestros aliados tomar decisiones estratégicas para generar valor a sus grupos de interés con responsabilidad, rentabilidad y crecimiento.  </p>
                </div>
                <div class="col-sm-6 text-center p-3">
                    <img src="{{ asset('images/LOGO_LIGHT.jpg') }}" class="rounded-circle img-fluid p-2" alt="nada" style="max-width: 10rem">  
                    <h2>Vision</h2>
                    <hr class="bg-warning"> 
                    <p>Ser el aliado estratégico de nuestros clientes reconocido por nuestra propuesta de valor y la generación de oportunidades de crecimiento.</p>
                </div>
            </div>
        </div>

    <div class="jumbotron bg-light text-center">
        <div class="container text-center">
            <div class="row my-4">                
                <div class="col-sm-6">
                        <h3><i class="fas fa-envelope-open-text"></i>   Deja aquí tu mensaje</h3>
                    <form class="text-center py-4" action="">
                        <div class="row">
                            <div class="col-6 form-group">
                                <input type="text" class="form-control"  placeholder="Nombre">
                            </div>
                            <div class="col-6 form-group">
                                <input type="text" class="form-control"  placeholder="Empresa">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col form-group">
                                <input type="email" class="form-control"  placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class=" form-control" name="" id="" rows="3" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Enviar</button>
                        </div>                        
                    </form>
                </div>
                <div class="col-sm-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253821.43539405765!2d-75.73682094767057!3d6.269000615057376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428ef4e52dddb%3A0x722fd6c39270ac72!2sMedell%C3%ADn%2C+Antioquia!5e0!3m2!1ses-419!2sco!4v1566075456204!5m2!1ses-419!2sco" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
