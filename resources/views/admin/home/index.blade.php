<h1>Hello, {{ Auth::guard('admin')->user()->name }}</h1>

<a class="icon-btn simple-navbar__action-btn simple-navbar__action-btn_blue-btn" href="#" rel="nofollow"
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    تسجيل خروج
</a>
<form method="POST" id="logout-form" action="{{ route('admin.auth.logout') }}">
    @csrf
</form>
