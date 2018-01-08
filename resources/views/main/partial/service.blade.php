<div class="row">
    <div class="col text-center">
        <h2 class="ServiceHeader">The corner garage for collector cars</h2>
    </div>
</div>
<div class="row text-center text-uppercase">
    @if(!empty($services))
        @foreach($services as $service)
            <div class="col-sm">
                <div class="one-tride">
                    {!! svgToCode($service->image) !!}
                    <h5>{{$service->title}}</h5>
                </div>
            </div>
        @endforeach
    @endif
</div>