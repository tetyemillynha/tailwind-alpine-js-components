<div class="collapse">
    <div x-data="collapse()" class="collapse-pane mb-2">
        <div class="collapse-button">
            <button x-ref="collapse1" x-spread="toggle" :class="{ 'bg-indigo-700': open === true }" class="bg-indigo-500 w-full rounded focus:outline-none text-white font-semibold p-4 flex items-center" type="button">
                <svg :class="{ 'hidden': open === true }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
                <svg :class="{ 'hidden': open === false }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
                Collapse 1
            </button>
        </div>
        <div x-spread="show" class="collapse-content p-3 bg-gray-200">
            Cras laoreet neque ut mauris hendrerit auctor. Donec rutrum varius sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet justo nulla. Morbi ac massa velit. Praesent malesuada arcu ac finibus tristique. Etiam imperdiet, lectus id malesuada vulputate, ante diam elementum velit, vitae lacinia erat nunc ac nisl. Aliquam dui lectus, porta ut vulputate eget, cursus vitae augue. Donec volutpat eros massa, ut maximus metus imperdiet quis.
        </div>
    </div>

    <div x-data="collapse()" class="collapse-pane mb-2">
        <div class="collapse-button">
            <button x-ref="collapse2" x-spread="toggle" :class="{ 'bg-indigo-700': open === true }" class="bg-indigo-500 w-full rounded focus:outline-none text-white font-semibold p-4 flex items-center" type="button">
                <svg :class="{ 'hidden': open === true }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
                <svg :class="{ 'hidden': open === false }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
                Collapse 2
            </button>
        </div>
        <div x-spread="show" class="collapse-content p-3 bg-gray-200">
            Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque porttitor, ligula eget rhoncus vulputate, libero lacus tincidunt felis, sed vulputate nulla erat quis odio. Etiam et auctor tortor, id porttitor quam. Phasellus ac leo sit amet enim lacinia fringilla. Ut volutpat vulputate finibus. Morbi consequat eleifend eleifend. Sed at turpis nisl. Duis sed eros metus. Praesent a elementum nunc. Phasellus at placerat nunc. Vestibulum ipsum orci, eleifend nec massa vel, gravida tempor quam. Nam lobortis non diam at condimentum.
        </div>
    </div>
</div>

<script>
    function collapse(){
        return {
            open: false,
            toggle: {
                ['@click']() {
                    if (this.open == true) {
                        this.open = false;
                    }else{
                        this.open = true;
                    }
                },
            },
            show: {
                ['x-show.transition.in.duration.600ms.origin.top.bottom.opacity.out.duration.300ms.origin.bottom.top.opacity']() {
                    return this.open;
                }
            },
        }
    }
</script>