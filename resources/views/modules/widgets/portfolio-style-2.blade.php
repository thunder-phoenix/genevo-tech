<div id="{{ $moduleName }}" class="page-content{{ ($data['portfolio']->css_class ? ' ' . $data['portfolio']->css_class : '') }}">
    <div class="container">
        <div class="row">
            <div class="heading-title text-center">
                <h3 class="text-uppercase">{!! $data['portfolio']->title !!}</h3>
            </div>

            <div class="feature-box-grid">

                @foreach($data['portfolioItems'] as $item)

                <div class="col-md-4">
                    <div class="featured-item featured-item-img border-box text-center wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <div class="icon-img">
                            <img src="{{ uploadUrl('portfolio-style-1/' . $item->image) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="title text-uppercase">
                            <h4>{!! $item->title !!} </h4>
                        </div>
                        <div class="desc">
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>