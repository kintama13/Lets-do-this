<aside class="flex flex-col w-64 h-full bg-white border-r dark:border-darker
 dark:bg-dark transition-all duration-300 fixed z-30 md:z-10 md:relative"
 :class="{'ml-64': !isSidebarOpen}">
    {{-- header --}}
    <div class="flex items-center justify-between px-4 pt-2 pb-3 h-14 border-b
    dark:bg-dark dark:border-darker">
        <img src="{{asset('storage/setting/logo.png')}}" alt="" width="120">
        <button @click="toggleSidebarMenu" class="text-gray-500 block md:hidden">
            <x-fas-times class="h-5 w-5"/>
        </button>
    </div>

    {{-- daftar menu --}}
    <div class="flex-1 flex flex-col h-full overflow-y-auto">
        <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2">
            <x-menu link="/">
                <x-fas-tachometer-alt class="h-5 w-5"/>
                <span class="ml-2 text-sm">Dashboard</span>
            </x-menu>

            @role('owner')
            <x-menu link="/kategori">
                <x-fas-layer-group class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data Kategori</span>
            </x-menu>
            <x-menu link="/produk">
                <x-fas-burger class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data Produk</span>
            </x-menu>
            <x-menu link="/user">
                <x-fas-user-tie class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data User</span>
            </x-menu>
            @endrole

            <x-menu link="/transaksi">
                <x-fas-money-bills class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data Transaksi</span>
            </x-menu>

            @role('owner')
            <x-menu link="/laporan">
                <x-fas-print class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data Transaksi</span>
            </x-menu>
            <x-menu link="/pengaturan">
                <x-fas-cog class="h-5 w-5"/>
                <span class="ml-2 text-sm">Data Transaksi</span>
            </x-menu>
            @endrole
        </nav>
    </div>
</aside>
