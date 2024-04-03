<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="{{ route('site.home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">logo</span>
    </a>

    <ul class="nav nav-pills me-4">
        <li class="nav-item">
            <a 
                href="{{ route('site.home') }}" 
                @class(['nav-link', 'active' => \Request::is('/')])
                aria-current="page"
            >
                {{ __('home') }}
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                {{ __('about us') }}
            </a>
        </li>
        <li class="nav-item">
            <a 
                href="{{ route('site.pages.contacts') }}" 
                @class(['nav-link', 'active' => \Request::is('contacts')])
            >
                {{ __('contacts') }}
            </a>
        </li>
    </ul>

    <div class="dropdown mt-1">
        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            @if (app()->getLocale() == 'ru')
                <img 
                    src="{{ asset('public/site/assets/img/flags/ru.png') }}" 
                    alt="mdo" width="32" height="32" class="rounded-circle"
                >
            @endif

            @if (app()->getLocale() == 'en')
                <img 
                    src="{{ asset('public/site/assets/img/flags/en.png') }}" 
                    alt="mdo" width="32" height="32" class="rounded-circle"
                >
            @endif
        </a>
        <ul class="dropdown-menu text-small" style="">
            @forelse (config('app.available_locales') as $locale)
                @if ($locale != app()->getLocale())
                    <li>
                        <a href="{{ route('site.option.set-lang', [
                            'lang' => $locale,
                        ]) }}" class="dropdown-item">
                            @lang($locale)
                        </a>
                    </li>
                @endif
            @empty
                
            @endforelse
        </ul>
    </div>
</header>