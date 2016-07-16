<div id="{{ $moduleName }}" class="page-content{{ ($data['portfolio']->css_class ? ' ' . $data['portfolio']->css_class : '') }}">
    <div class="container">

        <div class="row">
            <div class="heading-title text-center">
                <h3 class="text-uppercase">{!! $data['portfolio']->title !!}</h3>
            </div>

            @if($data['portfolio']->show_category_filter == '1')
                <div class="text-center">
                    <ul class="portfolio-filter">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        @foreach($data['portfolio']->categories as $category)
                            <li>
                                <a href="#" data-filter=".{{ $category->name }}">
                                    {{ $category->display_name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="portfolio portfolio-with-title col-3 gutter">
                @foreach($data['portfolio']->items as $item)

                @define($categories = '');
                @define($categoryDisplays = '');

                @foreach($item->itemCategory as $itemCategory)
                    <?php $categories .= ' ' . $itemCategory->category->name;?>
                    <?php $categoryDisplays .= '<a href="#">' . $itemCategory->category->display_name . '</a>, ';?>
                @endforeach

                <div class="portfolio-item{{ $categories }}">

                    <a href="{{ url(str_slug($moduleName) . '/' . str_slug($item->title)) }}">
                        <div class="thumb">
                            <img src="{{ uploadUrl('portfolio-style-2/thumbnails/' . $item->image) }}" alt="{{ $item->title }}">
                            <div class="portfolio-hover">
                                <div class="action-btn">
                                    <i class="icon-basic_link"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                    <div class="portfolio-title">
                        <h4 class="m-bot-0">
                            <a href="{{ url(str_slug($moduleName) . '/' . str_slug($item->title)) }}">
                                {{ $item->title }}
                            </a>
                        </h4>
                        <p>
                            {!! rtrim($categoryDisplays, ',') !!}
                        </p>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </div>
</div>

{{--<!--career-aspiration-->--}}
{{--<div class="p-top-30-impt page-content gray-bg text-center m-bot-20">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-8 col-md-offset-2">--}}
                {{--<div class="career-aspiration-info m-bot-less">--}}
                    {{--<h3 class="p-top-0">--}}
                        {{--We are very happy if we can be a help for you.--}}
                    {{--</h3>--}}
                {{--</div>--}}
                {{--<div class="career-aspiration-form">--}}
                    {{--<a href="#contact" class="btn btn-medium btn-rounded btn-dark-solid text-uppercase">--}}
                        {{--Click here--}}
                    {{--</a>--}}

                    {{--<label>to consult with us.</label>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<!--career-aspiration-->--}}