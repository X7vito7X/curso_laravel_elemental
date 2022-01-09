<header>
    <h1>Sitco</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home')?'active':''}}">Inicio</a>
            </li>
            <li>
                <a href="{{route('personas.index')}}" class="{{request()->routeIs('personas.*')?'active':''}}">Personas</a>
            </li>
            <li>
                <a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros')?'active':''}}">Nosotros</a>
            </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.*')?'active':''}}">Contactenos</a>
            </li>
        </ul>
    </nav>
</header>
