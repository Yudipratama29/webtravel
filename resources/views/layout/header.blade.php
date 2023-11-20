<header class="d-flex flex-wrap justify-content-right py-1 mb-5 border-bottom">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brans" href="/">
            <img src="https://github.com/Yudipratama29/webtravel/blob/main/Traveloke%20Logo.png?raw=true" alt="Logo" width="50" height="50" class="d-inline-block">
          </a>
          <a>
            Traveloke
          </a>
          <ul class="nav nav-pills">
            @php
                $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'destination', 'name' => 'Destination List'], ['url' => 'transportation', 'name' => 'Transportation'], ['url' => 'book', 'name' => 'Book']];
            @endphp
    
            @foreach ($menu as $m)
                @include('layout.nav-item', ['menu' => $m])
            @endforeach
        </ul>
        </div>
      </nav>

    
</header>
