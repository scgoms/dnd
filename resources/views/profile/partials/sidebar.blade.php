@panel
    <ul class="list-reset">
        <li class="py-1 px-4 -ml-4  @if(request()->segment(count(request()->segments())) === 'profile') active-link @endif">
            <a href="/profile" class="text-grey-light no-underline">
                Profile
            </a>
        </li>
        <li class="py-1 px-4 -ml-4  @if(request()->segment(count(request()->segments())) === 'games') active-link @endif">
            <a href="/profile/games" class="text-grey-light no-underline">
                My Lobbies
            </a>
        </li>
        <li class="py-1 px-4 -ml-4  @if(request()->segment(count(request()->segments())) === 'characters') active-link @endif">
            <a href="/profile/characters" class="text-grey-light no-underline">
                My Characters
            </a>
        </li>
    </ul>
@endpanel
