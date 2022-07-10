<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container px-lg-5">
        <a class="navbar-brand" href="#!">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                @if(Auth::check())
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/add-company">Naujos įmonės sukūrimas</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/logout">Atsijungti</a></li>
                @else
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/login">Prisijungti</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
