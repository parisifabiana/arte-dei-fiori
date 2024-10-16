@extends('layouts.app')

@section('content')
<main>
    <div class="container hero-text">
        <h1>Benvenuti a L'arte dei fiori</h1>
        <p>Scopri la magia e l'eleganza delle nostre creazioni floreali. Da oltre 20 anni, trasformiamo i vostri momenti speciali in ricordi indimenticabili attraverso l'arte dei fiori.</p>
    </div>
    <section class="hero">
        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('immagini/bouquet.jpg') }}" class="d-block w-100 slider img-full-width" alt="Elegante bouquet di rose rosse e bianche con foglie di eucalipto">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('immagini/battesimo.jpg') }}" class="d-block w-100 slider img-full-width" alt="Decorazione per battesimo">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('immagini/fiori2.jpg') }}" class="d-block w-100 slider img-full-width" alt="Composizione floreale moderna per evento aziendale con calle bianche e foglie tropicali">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('immagini/fiori3.jpg') }}" class="d-block w-100 slider img-full-width" alt="Centrotavola primaverile con tulipani colorati, narcisi e margherite in vaso rustico">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="events py-5">
        <div class="container">
            <h2 class="text-center mb-4">Le nostre creazioni per i tuoi eventi</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @php
                    $events = [
                        ['name' => 'Matrimoni', 'image' => 'matrimonio.jpg'],
                        ['name' => 'Compleanni', 'image' => 'compleanno.jpg'],
                        ['name' => 'Battesimi', 'image' => 'battesimo.jpg'],
                        ['name' => 'Eventi aziendali', 'image' => 'eventi.jpg'],
                        ['name' => 'Lauree', 'image' => 'lauree.jpg'],
                        ['name' => 'Cerimonie', 'image' => 'cerimonie.jpg'],
                    ];
                @endphp
    
                @foreach($events as $event)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('immagini/' . $event['image']) }}" class="card-img-top event-grid img-full-width" alt="{{ $event['name'] }}" style="height: 200px; object-fit: cover;">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title h5 mb-0">{{ $event['name'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="event-description py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">L'arte dei fiori: il tuo alleato perfetto per ogni evento</h2>
            <p>In ogni momento speciale della vita, L'arte dei fiori è al tuo fianco per trasformare i tuoi sogni in realtà. Le nostre creazioni floreali uniche e personalizzate sono progettate per esaltare l'atmosfera di ogni evento, che si tratti di un matrimonio romantico, una festa di compleanno vivace, un battesimo intimo o un elegante evento aziendale.</p>
            <p>I nostri esperti fioristi lavorano a stretto contatto con te per comprendere la tua visione e tradurla in composizioni floreali mozzafiato. Utilizziamo solo i fiori più freschi e di alta qualità, combinandoli con maestria per creare allestimenti che catturano l'essenza di ogni occasione.</p>
            <p>Con L'arte dei fiori, ogni dettaglio è curato con passione e precisione. Dai delicati centrotavola ai maestosi archi floreali, dalle eleganti boutonniere ai bouquet da sposa da sogno, ci assicuriamo che ogni elemento si integri perfettamente con il tuo evento, creando un'atmosfera indimenticabile che i tuoi ospiti ricorderanno per anni.</p>
            <p>Lascia che L'arte dei fiori sia il tuo partner creativo. Insieme, daremo vita alla magia floreale che renderà il tuo evento davvero speciale.</p>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
    .hero {
        position: relative;
    }
    .hero-text {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 20px;
    }
    .carousel-item img {
        height: 60vh;
        object-fit: cover;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        new bootstrap.Carousel(document.getElementById('heroCarousel'), {
            interval: 5000
        });
    });
</script>
@endpush