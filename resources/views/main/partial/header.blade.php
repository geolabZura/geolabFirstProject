<header class="fitScreen">
    <div id="carouselControls" class="carousel slide  " data-ride="carousel">
        <div class="carousel-inner " role="listbox">

            @if(!empty($sliders))
                @foreach($sliders as $slider)
                    @php $is_active = $loop->index == 0 ? 'active' : ''; @endphp
                    <div class="carousel-item SlideImg {{$is_active}}" style="background-image: url({{$slider->image}});" >
                        <div class="carousel-caption d-none d-md-block text-right sliderCaption">
                            <h3>{{$slider->date}}</h3>
                            <p class="text-capitalize">{{$slider->title}}</p>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
        <a class="carousel-control-prev MyControll RightArrow" href="#carouselControls" data-slide="prev">
            <i class="fa fa-long-arrow-left MyArrow "></i>
        </a>
        <a class="carousel-control-next MyControll LeftArrow" href="#carouselControls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right MyArrow"></i>
        </a>
    </div>
</header>
