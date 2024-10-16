@extends('layouts.app')

@section('title', 'Contatti | L\'arte dei fiori - Firenze')

@section('meta_description', 'Contatta L\'arte dei fiori a Firenze. Richiedi un preventivo per il tuo evento o ordina un bouquet speciale. Vieni a trovarci in negozio o chiamaci per una consulenza personalizzata.')

@section('content')
<main class="contatti">
    <div class="container py-5">
        <h1 class="text-center mb-5">Contattaci</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <section class="contact-info">
                    <h2>I nostri recapiti</h2>
                    <ul class="list-unstyled">
                        <li><strong>Indirizzo:</strong> Via dei Fiori, 123, 50123 Firenze</li>
                        <li><strong>Telefono:</strong> <a href="tel:+390551234567">055 123 4567</a></li>
                        <li><strong>Email:</strong> <a href="mailto:info@artedeifiori.it">info@artedeifiori.it</a></li>
                        <li><strong>Orari di apertura:</strong> Lun-Sab: 9:00-19:00, Dom: 10:00-16:00</li>
                    </ul>
                </section>

                {{-- <section class="map mt-4">
                    <h2>Dove trovarci</h2>
                    <div id="google-map" style="height: 300px;">
                        <!-- La mappa Google verrà caricata qui -->
                    </div>
                </section> --}}
            </div>

            <div class="col-md-6">
                <section class="contact-form">
                    <h2>Inviaci un messaggio</h2>
                    <form id="contactForm" action="{{ route('email.contact.form') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">Oggetto:</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="message">Messaggio:</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Invia messaggio</button>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
