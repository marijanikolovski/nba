<header class="blog-header py-3">
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="/">Teams</a>
        <a class="p-2 text-muted" href="/news">News</a>
        <a class="p-2 text-muted" href="/news/create">Create News</a>

        @if (auth()->check())
        <p>{{ auth()->user()->name }}</p>
        <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
      @else
      <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
        <a class="btn btn-sm btn-outline-secondary" href="/register">Sing up</a>
      @endif
      </nav>
    </div>
  </header>
  
