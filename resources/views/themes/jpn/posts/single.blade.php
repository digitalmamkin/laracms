@extends('themes.jpn.layouts.app')
@section('content')

<div class="container max-width-adaptive-lg">
  <div class="grid gap-md">

    <!-- Sticky Share Sidebar -->
    <div class="col-1@md display@md">
      @include('components.layouts.partials.sticky-sharebar')
    </div>
    
    <!-- Content Start -->
    <div class="col-11@md padding-x-lg@md">
      @include('components.posts.single.article-plain')
      <div class="border-top margin-top-lg"></div>

      <!-- Comments -->
      <section class="comments padding-top-md">
        @include('components.comments.comments-v1')
      </section>
    </div>

    <!-- Sidebar -->
    <div class="col-3@md">
      @include('components.posts.lists.related-posts-sidebar')
    </div>

  </div>
</div>

 @endsection
