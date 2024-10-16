@extends('layouts.app')

@section('content')
<div class="container chi-siamo">
    <h1 class="text-center mb-5">La nostra storia</h1>
    
    <div class="row mb-5">
        <div class="col-md-6">
            <h2>Le nostre origini</h2>
            <p>L'arte dei fiori nasce nel 1990 dalla passione di Maria Rossi, una giovane fioraia con un sogno: trasformare ogni occasione in un momento indimenticabile attraverso la magia dei fiori. Cresciuta tra i campi fioriti della campagna toscana, Maria ha sempre avuto un legame speciale con la natura e la sua bellezza effimera.</p>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('immagini/maria_rossi.jpg') }}" alt="Maria Rossi, fondatrice de L'arte dei fiori" class="img-fluid rounded force-img-size">
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-md-6 order-md-2">
            <h2>Il nostro primo negozio</h2>
            <p>Il primo negozio, una piccola bottega nel cuore di Firenze, divenne presto un punto di riferimento per chi cercava composizioni floreali uniche e personalizzate. La creatività di Maria e la sua attenzione ai dettagli attirarono l'attenzione di clienti sempre più esigenti, dai privati alle aziende, fino agli organizzatori di eventi di prestigio.</p>
        </div>
        <div class="col-md-6 order-md-1">
            <img src="{{ asset('immagini/bouquet.jpg') }}" alt="Il primo negozio de L'arte dei fiori" class="img-fluid rounded">
        </div>
    </div>

    <!-- Ripeti questo pattern per le altre sezioni -->

    <div class="row mb-5">
        <div class="col-md-6">
            <h2>I nostri valori</h2>
            <ul class="list-unstyled">
                <li><strong>Qualità:</strong> Utilizziamo solo i fiori più freschi e di alta qualità.</li>
                <li><strong>Creatività:</strong> Ogni composizione è un'opera d'arte unica.</li>
                <li><strong>Sostenibilità:</strong> Ci impegniamo a ridurre il nostro impatto ambientale.</li>
                <li><strong>Passione:</strong> Mettiamo il cuore in ogni creazione.</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('immagini/premio.jpg') }}" alt="Premio per l'eccellenza nell'arte floreale" class="img-fluid rounded">
        </div>
    </div>

    <div class="bg-light p-4 rounded">
        <p class="text-center mb-0">Che si tratti di un matrimonio da sogno, di un evento aziendale di prestigio o di un semplice gesto d'amore, L'arte dei fiori è qui per trasformare ogni occasione in un momento indimenticabile. Venite a trovarci e lasciatevi incantare dal meraviglioso mondo dei fiori!</p>
    </div>
</div>
@endsection