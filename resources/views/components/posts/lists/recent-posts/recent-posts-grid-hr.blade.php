
<ul class="grid-auto-xs grid-auto-sm@sm grid-auto-lg@md gap-md">

@foreach($recent_posts as $recent_post)
<li class="">
  <a href="{{ route('post.show', $recent_post) }}">
    <figure class="margin-bottom-xs">
     <img class="block width-100%" loading="lazy" src="{{ url('/storage').$recent_post->getPreviewImage()  }}" alt="Image description">
    </figure>
  </a>
    <div class="card__content recent-post-card line-height-1 margin-xxs">
     <a href="{{ route('post.show', $recent_post) }}" class="link-subtle text-sm">{{$recent_post->title}}</a>
      <p class="text-xs color-contrast-low padding-top-sm">{{ $recent_post->created_at->diffforhumans() }}<br></p>
    </div>
</li>
@endforeach
</ul>