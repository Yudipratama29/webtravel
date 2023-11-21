<header class="navbar navbar-expand-lg bg-body-tertiary py-1 mb-5 border-bottom">
    <nav class="navbar bg-body">
        <div class="container-fluid">
          <a class="" href="/">
            <img src="https://github.com/Yudipratama29/webtravel/blob/main/Traveloke%20Logo.png?raw=true" alt="Logo" width="50" height="50" class="">
          </a>
          <a>
            Traveloke
          </a>
            <ul class="nav nav-underline justify-content-end">
                <li class="nav-item">
                    @php
                        $menu = [['url' => '/', 'name' => 'Home'], ['url' => 'destination', 'name' => 'Destination List'], ['url' => 'transportation', 'name' => 'Transportation'], ['url' => 'book', 'name' => 'Book']];
                    @endphp
            
                    @foreach ($menu as $m)
                        @include('layout.nav-item', ['menu' => $m])
                    @endforeach
                </li>
            </ul>
        </div>
      </nav>  
</header>
