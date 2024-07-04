<!-- slider-area-start -->
<section class="ppp container" style="margin-top:55px !important">
    @php
        $sliders = App\Models\HomeBanner::latest()->first();
    @endphp
    <div class="row">
        <div class="col-sm-12">
            <div class="homes__bannar" style="">
                <img class="img-fluid" style="" src="{{ asset('uploads/banner/' . $sliders->image) }}" alt="{{ $sliders->title }}" >
            </div>
        </div>
    </div>
    
</section>
<!-- slider-area-end -->
