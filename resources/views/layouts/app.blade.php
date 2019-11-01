<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body class="home">
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div>
      <div>
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
