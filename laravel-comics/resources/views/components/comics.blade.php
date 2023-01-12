<div class="black">
    <div class="cards">
        @foreach ($fumetti as $elem)
            <div class="fumetto">
                <img src="{{ $elem['thumb'] }}" alt="fumetto">
                <h5><a href="">{{ $elem['title'] }}</h5></a>
            </div>
        @endforeach
    </div>
</div>
