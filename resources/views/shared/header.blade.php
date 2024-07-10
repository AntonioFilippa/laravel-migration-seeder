<header>
  
    {{-- NAVBAR BOOTSTRAP --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="">Laravel Template</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        {{-- ROUTE index --}}
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        {{-- ROUTE CONTACT --}}
                        <a class="nav-link" href="{{ route('trains.index') }}">Train</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>