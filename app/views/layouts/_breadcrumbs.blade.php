<ol class="breadcrumb">
  <li>{{ link_to_route('home', 'Home') }}</li>
  @foreach($breadcrumbs as $breadcrumb)
    <li class="active">{{ $breadcrumb }}</li>
  @endforeach
</ol>