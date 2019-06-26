@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div id="refprintCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dummyimage.com/1920x600/000/dddddd&text=slide+1" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/1920x600/000/cccccc&text=slide+2" class="d-block w-100"
                             alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dummyimage.com/1920x600/000/cccccc&text=slide+3" class="d-block w-100"
                             alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#refprintCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#refprintCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-sm py-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-light">Lorem header</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor eligendi expedita iure modi natus
                    omnis
                    quibusdam soluta suscipit. Beatae commodi dolores error esse ipsum magni nemo, non quam ratione
                    repellendus!
                </div>
            </div>
        </div>
        <div class="col-sm py-4">
            <div class="card shadow-sm">
                <div class="card-header bg-success text-light">Lorem header 2</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dignissimos, earum esse facere
                    inventore
                    laboriosam laudantium libero magnam maxime minus natus officia officiis omnis quae, quasi quia vero
                    voluptate voluptates?
                </div>
            </div>
        </div>
        <div class="col-sm py-4">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-light">Lorem header 3</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur eius fugiat id illum optio
                    sit
                    tempora vel? Beatae blanditiis delectus esse est maiores modi natus officiis omnis provident quas,
                    similique!
                </div>
            </div>
        </div>
        <div class="col-sm-12 py-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 sitebar">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam architecto,
                                autem beatae dolore
                                error facere facilis hic in laboriosam magni natus neque nobis placeat quidem similique,
                                totam, vel? Ipsum.
                            </p>
                        </div>
                        <div class="col-sm-9 content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias amet laborum natus quibusdam
                                repellat totam.
                                Aliquid, aspernatur delectus dolorem doloribus ea eos excepturi iusto, laudantium non
                                reiciendis similique
                                ut
                                veritatis?
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
