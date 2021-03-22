<nav x-data="menuMobile()" class="flex items-center justify-between flex-wrap py-6">
    <div class="flex items-center flex-shrink-0 text-indigo-800 mr-6 xl:pl-0 lg:pl-4 md:pl-4 xs:pl-4 pl-4">
        <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span>
    </div>

    <div class="block xl:hidden xl:pr-0 lg:pr-4 md:pr-4 xs:pr-4 pr-4">
        <button x-spread="trigger" class="flex items-center px-3 py-2 border rounded text-teal-200 border-indigo-700 hover:text-indigo-900 hover:border-indigo-700">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
        </button>
    </div>

    <div x-spread="dialogue" class="w-full xl:block flex-grow xl:flex xl:items-center xl:w-auto">
        <ul class="text-sm xl:flex-grow">
            <li class="block mt-4 xl:inline-block xl:mt-0 xl:mr-4 mr-0">
                <a class="py-2 px-4 {!! isset($menu['link_class']) && $menu['link_class'] ? $menu['link_class'] : 'text-blue-200 hover:text-white'!!} font-semibold" href="#">Menu 1</a>
            </li>

            <li x-data="dropdown()" class="block mt-4 xl:inline-block xl:mt-0 xl:mr-4 mr-0 relative">
                <button x-spread="toggle" class="py-2 px-4 {!! isset($menu['link_class']) && $menu['link_class'] ? $menu['link_class'] : 'text-blue-200 hover:text-white'!!} font-semibold">Menu 2</button>
                <ul x-spread="show" class="dropdown-menu {!! isset($menu['dropdown']['class']) && $menu['dropdown']['class'] ? $menu['dropdown']['class'] : 'bg-white'!!} xl:absolute lg:relative md:relative sm:relative relative xl:w-auto lg:w-full md:w-full sm:w-full w-full xl:float-left float-none" style="display: none;">
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">A Empresa</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Equipe</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Sócios</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Investidores</a></li>
                </ul>
            </li>

            <li x-data="dropdown()" class="block mt-4 xl:inline-block xl:mt-0 xl:mr-4 mr-0 relative">
                <button x-spread="toggle" class="py-2 px-4 {!! isset($menu['link_class']) && $menu['link_class'] ? $menu['link_class'] : 'text-blue-200 hover:text-white'!!} font-semibold">Menu 2</button>
                <ul x-spread="show" class="dropdown-menu {!! isset($menu['dropdown']['class']) && $menu['dropdown']['class'] ? $menu['dropdown']['class'] : 'bg-white'!!} xl:absolute lg:relative md:relative sm:relative relative xl:w-auto lg:w-full md:w-full sm:w-full w-full xl:float-left float-none" style="display: none;">
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">A Empresa</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Equipe</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Sócios</a></li>
                    <li class="px-3 py-1"><a class="block p-1 {!! isset($menu['dropdown']['link_class']) && $menu['dropdown']['link_class'] ? $menu['dropdown']['link_class'] : 'hover:text-blue-900'!!}" href="#">Investidores</a></li>
                </ul>
            </li>

            <li class="block mt-4 xl:inline-block xl:mt-0 xl:mr-4 mr-0">
                <a class="py-2 px-4 {!! isset($menu['link_class']) && $menu['link_class'] ? $menu['link_class'] : 'text-blue-200 hover:text-white'!!} font-semibold" href="#">Menu 3</a>
            </li>
            <li class="block mt-4 xl:inline-block xl:mt-0 xl:mr-4 mr-0">
                <a class="py-2 px-4 {!! isset($menu['link_class']) && $menu['link_class'] ? $menu['link_class'] : 'text-blue-200 hover:text-white'!!} font-semibold" href="#">Menu 4</a>
            </li>
        </ul>
      
      <div class="ml-auto">
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-blue-500 hover:bg-white mt-4 xl:mt-0">Download</a>
      </div>
    </div>
</nav>

<script>
    function dropdown() {
        return {
            open: false,
            toggle: {
                ['@mouseover']() {
                    this.open = true;
                },
            },
            show: {
                ['x-show.transition.in.duration.300ms.origin.bottom.top.opacity.scale.85.out.duration.100ms.origin.top.bottom.opacity.scale.95']() {
                    return this.open;
                },
                ['@mouseover.away']() {
                    this.open = false;
                },
            },
        };
    }
    function menuMobile() {
        return {
            open: false,
            color: 'lg:hidden md:hidden sm:hidden hidden',
            trigger: {
                ['@click']() {
                    if (this.open == true) {
                        this.open = false;
                    }else{
                        this.open = true;
                    }
                    
                },
            },
            dialogue: {
                [':class']() {
                    if (this.open == true) {
                        this.color = 'lg:block md:block sm:block block animate-show-up';
                    }else{
                        this.color = 'lg:hidden md:hidden sm:hidden hidden';
                    }
                    return this.color;
                },
            },
        };
    }
</script>