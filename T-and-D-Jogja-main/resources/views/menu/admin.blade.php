<li class="nav-item {{ Nav::isRoute('member.index') }}">
    <a class="nav-link" href="{{ route('member.index') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>{{ __('Users') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.type') }}">
    <a class="nav-link" href="{{ route('program.type') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>{{ __('Program Type') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.category') }}">
    <a class="nav-link" href="{{ route('program.category') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>{{ __('Program Category') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.location') }}">
    <a class="nav-link" href="{{ route('program.location') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>{{ __('Program Location') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.office') }}">
    <a class="nav-link" href="{{ route('program.office') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>{{ __('Program Office') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.index') }}">
    <a class="nav-link" href="{{ route('program.index') }}">
        <i class="fas fa-fw fa-book"></i>
        <span>{{ __('Program') }}</span>
    </a>
</li>

<li class="nav-item {{ Nav::isRoute('program.members') }}">
    <a class="nav-link" href="{{ route('program.members') }}">
        <i class="fas fa-fw fa-users"></i>
        <span>{{ __('Program Members') }}</span>
    </a>
</li>
