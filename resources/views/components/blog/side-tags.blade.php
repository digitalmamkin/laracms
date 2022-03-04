@props(['tags'])

<div class="sidenav__label margin-bottom-xxxs">
    <span class="text-sm color-contrast-medium text-xs@md">tags</span>
  </div>
  
  <ul class="sidenav__list">
      @foreach($tags as $tag)
    <li class="sidenav__item">
      <a href="{{ route('theme.default.archive.tags.show', $tag) }}" class="sidenav__link">
        <span class="sidenav__text text-sm@md">{{ $tag->name }}</span>
        <span class="sidenav__counter">{{ $tag->posts_count }}<i class="sr-only">notifications</i></span>
      </a>
    </li>
      @endforeach
  </ul>