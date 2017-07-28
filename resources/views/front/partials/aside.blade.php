<!--lista de categorias-->
<div class="list-group">
  <div class="col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group" role="menu" style="height: auto;
        max-height: 200px;
        overflow-x: hidden;">
        <a href="#" class="list-group-item active">Categorias</a>
        @foreach ($categories as $category)

          <a href="{{ route('front.search.category',$category->name)}}" class="list-group-item">
              {{$category->name}} <span class="badge"> {{ $category->articles->count() }} </span>
          </a>
        @endforeach
    </div>
  </div><!--/.sidebar-offcanvas-->

  <div class="col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="scrollable-menu" role="menu" style="height: auto;
        max-height: 200px;
        overflow-x: hidden;">
        <a href="#" class="list-group-item active">Tags</a>
        <div class="panel" style="padding:4px">
        @foreach ($tags as $tag)
          <span class="label label-default"><a href="{{ route('front.search.tag',$tag->name)}}" style="color:white">
             {{ $tag->name }} </a></span>
          &nbsp;
        @endforeach
      </div>
    </div>
  </div><!--/.sidebar-offcanvas-->
</div><!--/list-->
