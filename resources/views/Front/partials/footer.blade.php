<footer class="footerMain">
    <div class="top-footer">
        <h2>{{__("Diş Estetiği ile ilgili sorunlarınız mı var?")}}</h2>
        <a>{{__("Bize Ulaşın")}}</a>
    </div>
    <div class="bottom-footer">
        <div class="upper">
            @foreach($setting as $item)
            <div class="logo-part">
                <img src="{{Storage::url($item->bottom_logo)}}" alt="">
                <div class="address">
                    <p class="address-line">{{$item->address}}</p>
                    <p class="phone-number">Telefon: {{$item->phone}}</p>
                    <p class="email">Mail: {{$item->mail}}</p>
                </div>
            </div>
            @endforeach
            @foreach($blogs->shuffle()->chunk(5) as $column)
            <div class="titles-part">
                    <div class="column">
                        @foreach($column as $blog)
                            <p><a href="" class="footer-li">{{$blog->translations->first()->title}}</a></p>
                        @endforeach
                    </div>
            </div>
            @endforeach
        </div>
        <div class="lower">
            <p>© 2024 {{__("Tüm hakları www.dentnis.com'a aittir.")}}</p>
            <p>{{__("Dentnis.com'da yer alan tüm içerikler sadece kullanıcıyı bilgilendirmek amacı ile sunulmuş olup tıbbi tedavi anlamında tavsiye niteliği taşımamaktadır.")}}</p>
        </div>
    </div>
</footer>
