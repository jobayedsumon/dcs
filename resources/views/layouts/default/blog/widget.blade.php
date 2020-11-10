


        <div class="cm-smart-column-wrapper">
          <ul class="categories clearfix">
            @if(!empty($categories))
            @foreach($categories as $category)
            <li>
              <a href="{{ url('posts/category/'.$category->alias ) }}" title="{{ $category->name }}">
                {{ $category->name }} <span>{{ $category->total }}</span>
              </a>
            </li>
            @endforeach
            @endif

          </ul>
{{--           <ul class="services-list services-icons gray page-margin-top clearfix">
            <li>
              <a href="?page=service_calculator" title="Cost Calculator">
                <span class="service-icon features-calculator"></span>
              </a>
              <h4><a href="?page=service_calculator" title="Cost Calculator">COST CALCULATOR</a></h4>
              <p class="description">Estimate cleaning cost.</p>
              <div class="align-center margin-top-40 padding-bottom-16">
                <a class="more" href="?page=service_calculator" title="Learn more">Learn more</a>
              </div>
            </li>
          </ul> --}}
          @if(!empty($latests))
          <h6 class="box-header page-margin-top">LATEST POSTS</h6>
          <ul class="blog small margin-top-30 clearfix">
            @foreach($latests as $latest)
            <li>
              <a href="{{ url('posts/read/'.$latest->alias) }}" title="{{ $latest->title }}" class="post-image">
                <img src="{{ $latest->image }}" alt="" style="height: 90px; width: 90px">
              </a>
              <div class="post-content">
                <a href="{{ url('posts/read/'.$latest->alias) }}" title="{{ $latest->title }}">{{ $latest->title }}</a>
                <ul class="post-details">
                  <li class="date">{{ date("M j, Y " , strtotime($latest->created)) }}</li>
                </ul>
              </div>
            </li>
            @endforeach
          </ul>
          @endif

          @if(!empty($popular))
          <h6 class="box-header page-margin-top">MOST POPULAR</h6>
          <ul class="blog small margin-top-30 clearfix">
            @foreach($popular as $pop)
            <li>
              <a href="{{ url('posts/read/'.$pop->alias) }}" title="Best pro tips for home cleaning" class="post-image">
                <img src="{{ $pop->image }}" alt="" style="height: 90px; width: 90px">
              </a>
              <div class="post-content">
                <a href="{{ url('posts/read/'.$pop->alias) }}" title="{{ $pop->title }}">{{ $pop->title }}</a>
                <ul class="post-details">
                  <li class="date">{{ date("M j, Y " , strtotime($pop->created)) }}</li>
                </ul>
              </div>
            </li>
            @endforeach
          </ul>
          @endif


{{--           <h6 class="box-header page-margin-top">TEXT WIDGET</h6>
          <p class="margin-top-10">What makes Cleanmate trusted above other cleaning service providers? When you combine higher standards, smarter strategies and <a href="#">superior quality</a> all in one package, the result is top notch.</p> --}}
{{--           <h6 class="box-header page-margin-top">ARCHIVES</h6>
          <ul class="taxonomies full-width margin-top-30 clearfix">
            <li><a href="#" title="August 2017">August 2017<span>2</span></a></li>
            <li><a href="#" title="July 2017">July 2017<span>5</span></a></li>
          </ul> --}}
          <h6 class="box-header page-margin-top">TAGS</h6>
          <ul class="taxonomies margin-top-30 clearfix">
            @if(!empty($posts))
              @foreach( $posts as $post)
                @if(!empty($post->labels))
                <li><a href="{{ url('posts/read/'.$post->alias) }}" title="Carpet Cleaning">{{ $post->labels }}</a></li>
                @endif
              @endforeach
            @endif

            @if(!empty($posts->labels))
            <li><a href="#" title="{{ $posts->labels }}">{{ $posts->labels }}</a></li>
            @endif

          </ul>
        </div>

