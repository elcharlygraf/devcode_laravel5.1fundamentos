<div class="profile-info" data-lock-name="Juan Carlos" data-lock-email="juan@gmail.com">
	<span class="name">{!! Auth::user()->name !!}
	@if(Auth::user()->rol_id == 1)
		<p>Hola Administrador</p>
	@endif</span>
	<a role="menuitem" tabindex="-1" href="{!! route('logout') !!}">Salir</a>
</div>