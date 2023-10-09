<x-sidebar.sidebar :href="route('dashboard')" :logo="asset('/logo.svg')">

				<x-sidebar.sidebar-item name="Halaman Utama" :link="route('welcome')" icon="bi bi-arrow-90deg-left" />
				{{-- dashbord --}}
				@can('show-dashboard')
								<x-sidebar.side-title title="Dashboard" />
								<x-sidebar.sidebar-item name="Dashboard" :link="route('dashboard')" icon="bi bi-grid-fill" />
				@endcan
				{{-- user --}}
				@can('show-user')
								<x-sidebar.side-title title="Users" />
								<x-sidebar.sidebar-item name="Manajemen Users" :link="route('manage-users')" icon="bi bi-person-lines-fill" />
				@endcan
				{{-- role and permission --}}
				@canany(['show-role', 'show-permission'])
								<x-sidebar.side-title title="Role and Permission" />
								<x-sidebar.sidebar-item name="Manajemen Role Permission" :link="route('dashboard')" icon="bi bi-stack">
												<x-sidebar.sidebar-sub-item name="Role" :link="route('manage-role')" />
												<x-sidebar.sidebar-sub-item name="Permission" :link="route('manage-permission')" />
								</x-sidebar.sidebar-item>
				@endcanany

</x-sidebar.sidebar>
