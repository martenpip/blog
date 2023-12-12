<li><a href="/">Home</a></li>
@auth
<li>
    <details>
        <summary>
            Make a new burger.
        </summary>
        <ul class="p-2 z-20 bg-base-100">
            <li><a href="{{route('articles.index')}}">Burger Feed.</a></li>
        </ul>
    </details>
</li>
@endauth
