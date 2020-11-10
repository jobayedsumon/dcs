<div class="theme-page padding-bottom-100">
  <div class="row gray full-width page-header vertical-align-table">
    <div class="row">
      <div class="page-header-left">
        <h1>BLOG</h1>
      </div>
      <div class="page-header-right">
        <div class="bread-crumb-container">
          <ul class="bread-crumb">
            <li>
              <a title="Home" href="?page=home">
                Home
              </a>
            </li>
            <li class="separator">
              &#47;
            </li>
            <li>
              Blog
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix">
    <div class="row page-margin-top-section">
      <div class="column column-3-4">
        <ul class="blog clearfix">
          @if(!empty($posts))
           @foreach( $posts as $post)
          <li>
            <a href="{{ url('posts/read/'.$post->alias) }}" title="How to: deep clean your kitchen" class="post-image">
              <div class="post-date">
                <div class="month">{{ date("M" , strtotime($post->created)) }}</div>
                <h4>{{ date("j" , strtotime($post->created)) }}</h4>
              </div>
                @if(file_exists('./uploads/images/'.$post->image) && $post->image !='' )
                <img src="{{ url('uploads/images/'.$post->image) }}" alt="" class="img-responisve">
                @else
                <img src="{{ url('uploads/images/no-image.png') }}" alt="" class="img-responisve">
                @endif
            </a>
            <h2><a href="{{ url('posts/read/'.$post->alias) }}">{{ $post->title }}</a></h2>
            <div class="post-content-details-container clearfix">
              <ul class="post-content-details left">
                <li>{{ date("M j, Y" , strtotime($post->created)) }}</li>
                <li>in <a href="#" title="House Cleaning">House Cleaning</a></li>
                <li>by <a href="#" title="Paige Morgan">{{ $post->username }}</a></li>
              </ul>
              <ul class="post-content-details right">
                <li class="template-display"><a href="#">{{ $post->views }}</a></li>
                <li class="template-comment"><a href="?page=post#comments-list" title="{{ $post->comments }}">{{ $post->comments }}</a></li>
              </ul>
            </div>
            {{-- {!! $post->note !!} --}}
            {!! \Illuminate\Support\Str::limit($post->note,500) !!}
           <span class="url">
              <a href="{{ url('posts/read/'.$post->alias) }}" title="Read more">Read more</a>
            </span>
          </li>
          @endforeach
          @endif
        </ul>

        {{ $posts->links() }}
        
      </div>


      <div class="column column-1-4 cm-smart-column">
        @include('layouts.default.blog.widget')
      </div>

    </div>
  </div>
</div>