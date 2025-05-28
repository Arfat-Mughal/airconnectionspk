<div>
    <h2 class="text-center mb-5 fw-bold">Get a Tourist Visa</h2>
    <div class="row g-4">
        @foreach($visas as $visa)
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card product-card h-100 shadow-sm">
                <a href="{{ $visa['url'] }}" class="text-decoration-none">
                    <img src="{{ $visa['image'] }}" class="card-img-top" alt="{{ $visa['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $visa['title'] }}</h5>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>