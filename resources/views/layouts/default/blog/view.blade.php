<style>
.comment-author-avatar img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}
</style>
<div class="theme-page padding-bottom-100">
  <div class="row gray full-width page-header vertical-align-table">
    <div class="row">
      <div class="page-header-left">
        <h1>{{ $title }}</h1>
      </div>
      <div class="page-header-right">
        <div class="bread-crumb-container">
          <ul class="bread-crumb">
            <li>
              <a title="Home" href="{{ url('') }}">
                Home
              </a>
            </li>
            <li class="separator">
              &#47;
            </li>
            <li>
              <a title="Blog" href="{{ url('posts') }}">
                Blog
              </a>
            </li>
            <li class="separator">
              &#47;
            </li>
            <li>
              {{ $posts->name }}
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix">
    <div class="row page-margin-top-section">
      <div class="column column-3-4">
        <div class="blog clearfix">
          <div class="post single">
            <a href="" title="How to: deep clean your kitchen" class="post-image">
              <div class="post-date">
                <div class="month">{{ date("M" , strtotime($posts->created)) }} </div>
                <h4>{{ date("j" , strtotime($posts->created)) }} </h4>
              </div>
              @if(file_exists('./uploads/images/'.$posts->image) && $posts->image !='' )
                  <img src="{{ url('uploads/images/'.$posts->image) }}" alt="" class="img-fluid img-responsive">
              @endif
            </a>
            <h2>{{ $title }}</h2>
            <div class="post-content-details-container clearfix">
              <ul class="post-content-details left">
                <li>{{ date("M j, Y " , strtotime($posts->created)) }}</li>
                <li>in <a href="#" title="{{ Helper::get_post_Cat_name($posts->cid) }}">{{ Helper::get_post_Cat_name($posts->cid) }}</a></li>
                <li>by <a href="#" title="Paige Morgan"> {{ ucwords($posts->username) }}</a></li>
              </ul>
              <ul class="post-content-details right">
                <li class="template-display"><a href="#">{{ $posts->views }}</a></li>
                <li class="template-comment"><a class="scroll-to-comments" href="#" title="comments">{{ $posts->comments }}</a></li>
              </ul>
            </div>

            {!! PostHelpers::formatContent($posts->note) !!}

            <ul class="taxonomies margin-top-30 clearfix">
              @if(!empty($posts->labels))
                <li><a href="#" title="{{ $posts->labels }}">{{ $posts->labels }}</a></li>
              @endif
            </ul>
            

            
          </div>
        </div>
        <div class="row page-margin-top">
          <h4>LEAVE A COMMENT</h4>
          <form action="{{ url('posts/comment') }}" class="comment-form margin-top-42" id="comment-form" method="post">
            @csrf
            <div class="row flex-box">
              <fieldset class="column column-1-2">
                <label>YOUR NAME</label>
                <input class="text-input" name="name" type="text">
                <label>YOUR EMAIL</label>
                <input class="text-input" name="email" type="email">
                <label>YOUR WEBSITE</label>
                <input class="text-input" name="website" type="text">
                <input type="hidden" name="pageID" value="{{ $posts->pageID }}" />    
                <input type="hidden" name="alias" value="{{ $posts->alias }}" />
              </fieldset>
              <fieldset class="column column-1-2">
                <label>COMMENT</label>
                <textarea name="comments"></textarea>
              </fieldset>
            </div>
            <div class="row margin-top-30">
              <div class="column column-1-2">
                <p>Your email address will not be published.</p>
                @if(Session::has('message'))
                    <p class="alert alert-success" style="padding: 0; color: green; font-style: italic;font-size: 18px;">{{ Session::get('message') }}</p>
                @endif
              </div>
              <div class="column column-1-2 align-right">
                <input type="submit" value="Post comment" class="more active">
              </div>
            </div>
          </form>
        </div>


















        <div class="row margin-top-65">
          <h4>{{ $posts->comments }} COMMENTS</h4>
          <ul id="comments-list">



            @if(!empty($comments))
            @foreach($comments as $comm)
            <li class="comment clearfix" id="comment-1">
              <div class="comment-container clearfix">
                <div class="comment-author-avatar radius">
                   <?php if( file_exists( './uploads/users/'.$comm->avatar) && $comm->avatar !='') { ?>
                      <img src="{{ url('uploads/users').'/'.$comm->avatar }} " border="0" width="60" class="avatar" />
                  <?php  } else { ?> 
                      <img alt="" src="http://www.gravatar.com/avatar/{{ md5($comm->email) }}" width="60" class="avatar" />
                  <?php } ?> 
                </div>
                <div class="comment-details">
                  <div class="posted-by clearfix">
                    <h6>{{ ucwords($comm->username) }}</h6>
                    <abbr class="timeago" title="{{ date("M j, Y " , strtotime($comm->posted)) }}">{{ date("M j, Y " , strtotime($comm->posted)) }}</abbr>
                    {{-- <a class="more gray small" href="#comment-form" title="Reply">Reply</a> --}}
                  </div>
                  <p>
                    {!!$comm->comments !!}
                  </p>
                  <div class="tools">
                      @if(Session::get('gid') == '1' OR $comm->userID == Session::get('uid')) 
                      <a href="{{ url('posts/remove/'.$posts->pageID.'/'. $posts->alias.'/'.$comm->commentID) }}" class="text-danger remove"><i class="fa fa-minus-circle"></i> Remove  </a>
                      @endif
                  </div>
                </div>
              </div>
            </li>
            @endforeach
            @endif




          </ul>
          <!--<ul class="pagination page-margin-top">-->
          <!--  <li class="left">-->
          <!--    <a href="#" title="" class="template-arrow-horizontal-3">&nbsp;</a>-->
          <!--  </li>-->
          <!--  <li class="selected">-->
          <!--    <a href="#" title="">-->
          <!--      1-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li>-->
          <!--    <a href="#" title="">-->
          <!--      2-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li>-->
          <!--    <a href="#" title="">-->
          <!--      3-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li class="right">-->
          <!--    <a href="#" title="" class="template-arrow-horizontal-3">&nbsp;</a>-->
          <!--  </li>-->
          <!--</ul>-->
        </div>
      </div>
      <div class="column column-1-4 cm-smart-column">
        @include('layouts.default.blog.widget')
      </div>
    </div>
  </div>
</div>