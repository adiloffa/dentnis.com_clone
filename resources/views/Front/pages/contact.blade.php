@extends('Front.Layouts.front')

@section('content')
    <div class="contact">
        <div class="subheader">
            <div class="container1">
                <div class="columnOne">
                    <h1>{{__("İletişim")}}</h1>
                    <ul>
                        <li><a href="">{{__("Anasayfa")}}</a></li>
                        <span><i class="fa-solid fa-angle-right"></i></span>
                        <li><a href="">{{__("İletişim")}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <div class="section1">
            <div class="row1">
                <form action="{{route('contact-post')}}" method="post">
                    @php
                        $errorMessages = [];
                        if($errors->has('full_name')) $errorMessages[] = __("Ad, Soyad");
                        if($errors->has('phone')) $errorMessages[] = __("Telefon");
                        if($errors->has('email')) $errorMessages[] = __("Email");
                        if($errors->has('subject')) $errorMessages[] = __("Konu");
                        if($errors->has('message')) $errorMessages[] = __("Mesaj");
                        if($errors->has('kvkk')) $errorMessages[] = __("KVKK");

                        $errorMessage = implode(', ', $errorMessages);
                        if (!empty($errorMessage)) {
                            echo '<div style="color:red; margin-bottom: 10px" class="error-message">' . __("Bu alan(lar) gereklidir") . ': ' . $errorMessage . '.</div>';
                        }
                    @endphp
                    @csrf

                    <div class="flex">
                        <input type="text" name="full_name" placeholder="{{__("Ad, Soyad")}}" value="{{old('full_name')}}">
                        <input type="number" name="phone" placeholder="{{__("Telefon")}}" value="{{old('phone')}}">
                    </div>
                    <input type="email" name="email" placeholder="{{__("Email")}}" value="{{old('email')}}">

                    <input type="text" name="subject" placeholder="{{__("Konu")}}" value="{{old('subject')}}">

                    <textarea cols="40" rows="5" name="message" placeholder="{{__("Mesaj")}}">{{old('message')}}</textarea>

                    <label for="">
                        <input type="checkbox" name="kvkk" value="1" {{ old('kvkk') ? 'checked' : '' }}>
                        <a>{{__("KVKK")}}</a> {{__("'yı okudum, kabul ediyorum")}}.
                    </label>

                    <button>{{__("Gönder")}}</button>
                </form>

            </div>
            <div class="row2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16491.755351405183!2d49.86224668359764!3d40.38313033265291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1saz!2saz!4v1705053966399!5m2!1saz!2saz"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="section2">
            <div class="row1">
                <h3>{{__("İletişim Bilgileri")}}</h3>
                @foreach($setting as $item)
                    <p><strong>{{__("Adres")}}:</strong> {{$item->address}} </p>
                    <p><strong>{{__("Telefon")}}:</strong> <a href="">{{$item->phone}} </a></p>
                    <p><strong>{{__("Mail")}}:</strong> <a href="">{{$item->mail}}</a></p>
                @endforeach
            </div>
            <span>

            <div class="row2">

                <h3>{{__("Çalışma Saatleri")}}</h3>
                <p><strong>{{__("Pazartesi – Cumartesi")}}:</strong> 08.30 – 19.00<br>
                    <strong>{{__("Pazar")}}:</strong> {{__("Kapalı")}}
                </p>
            </div>
                </span>
        </div>


    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/front/css/contact.css')}}">
@endpush
