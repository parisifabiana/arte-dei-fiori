@extends('layouts.app')

@section('title', 'Cosa facciamo | L\'arte dei fiori - Composizioni floreali uniche per ogni occasione')

@section('meta_description', 'Scopri i servizi di composizione floreale di L\'arte dei fiori. Creiamo allestimenti unici per matrimoni, eventi aziendali e occasioni speciali a Firenze e in tutta la Toscana.')

@section('content')
<main class="cosa-facciamo">
    <div class="container">
        <h1 class="text-center mb-5">I nostri servizi di composizione floreale</h1>
        
        <section class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2>Matrimoni da sogno</h2>
                <p>Trasformiamo il giorno più importante della vostra vita in un'esperienza floreale indimenticabile. Le nostre composizioni per matrimoni sono create su misura per riflettere la personalità degli sposi e l'atmosfera dell'evento. Dal bouquet della sposa agli addobbi per la chiesa e la location del ricevimento, ogni dettaglio è curato con passione e maestria.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('immagini/matrimonio.jpg') }}" alt="Elegante composizione floreale per matrimonio con rose bianche e peonie rosa" class="img-fluid rounded">
            </div>
        </section>
        
        <section class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <h2>Eventi aziendali di prestigio</h2>
                <p>Diamo un tocco di classe ed eleganza ai vostri eventi aziendali. Che si tratti di una conferenza, una cena di gala o un lancio di prodotto, le nostre composizioni floreali creano l'atmosfera perfetta per impressionare clienti e partner. Utilizziamo fiori di alta qualità e design innovativi per riflettere l'identità del vostro brand.</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('immagini/eventi.jpg') }}" alt="Sofisticato allestimento floreale per evento aziendale con orchidee e verde tropicale" class="img-fluid rounded">
            </div>
        </section>
        
        <section class="row align-items-center mb-5">
            <div class="col-md-6">
                <h2>Celebrazioni e ricorrenze speciali</h2>
                <p>Ogni occasione merita di essere celebrata con fiori straordinari. Dai compleanni alle lauree, dalle nascite agli anniversari, creiamo composizioni uniche che esprimono le vostre emozioni. I nostri designer floreali lavorano a stretto contatto con voi per realizzare creazioni personalizzate che lasceranno senza fiato i vostri cari.</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('immagini/lauree.jpg') }}" alt="Vivace composizione floreale per compleanno con gerbere multicolori e palloncini" class="img-fluid rounded">
            </div>
        </section>
        
        <section class="row align-items-center mb-5">
            <div class="col-md-6 order-md-2">
                <h2>Bouquet e composizioni giornaliere</h2>
                <p>Visitate il nostro negozio nel cuore di Firenze per scoprire una vasta gamma di bouquet freschi e composizioni pronte. Che sia per un regalo spontaneo o per abbellire la vostra casa, troverete sempre creazioni originali che catturano la bellezza della stagione. Offriamo anche un servizio di consegna a domicilio per portare la gioia dei fiori direttamente a chi amate.</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="{{ asset('immagini/shop.jpg') }}" alt="Il nostro negozio L'arte dei fiori a Firenze, con una vetrina piena di composizioni floreali colorate" class="img-fluid rounded">
            </div>
        </section>
        
        <section class="servizi-aggiuntivi mb-5">
            <h2 class="text-center mb-4">Servizi su misura per te</h2>
            <ul class="list-group">
                <li class="list-group-item">Consulenza personalizzata per la scelta dei fiori e delle composizioni</li>
                <li class="list-group-item">Allestimenti floreali per vetrine e spazi commerciali</li>
                <li class="list-group-item">Abbonamenti floreali per uffici e hotel</li>
                <li class="list-group-item">Workshops e corsi di arte floreale per appassionati</li>
            </ul>
        </section>
        
        <section class="chiusura text-center">
            <p class="mb-4">A L'arte dei fiori, crediamo che ogni occasione meriti di essere celebrata con la bellezza e la fragranza dei fiori più freschi e pregiati. La nostra passione e competenza si riflettono in ogni petalo, in ogni composizione che creiamo. Lasciateci trasformare i vostri momenti speciali in ricordi indimenticabili attraverso il linguaggio universale dei fiori.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Richiedi un preventivo personalizzato</a>
        </section>
    </div>
</main>
@endsection


    
