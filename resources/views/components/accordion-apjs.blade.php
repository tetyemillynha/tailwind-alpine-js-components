<div x-data="{accordion:'accordion1'}" class="accordion">
    <div class="accordion-pane mb-2">
        <div class="accordion-button">
            <button @click="accordion!=='accordion1'?accordion='accordion1':accordion=null" :class="{ 'bg-pink-700': accordion ==='accordion1' }" class="bg-pink-500 w-full rounded focus:outline-none text-white font-semibold p-4 flex items-center" type="button">
                <svg :class="{ 'hidden': accordion ==='accordion1' }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
                <svg :class="{ 'hidden': accordion !=='accordion1' }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
                Accordion 1
            </button>
        </div>
        <div x-show.transition.in.duration.600ms.origin.top.bottom.opacity.out.duration.300ms.origin.bottom.top.opacity="accordion === 'accordion1'" class="accordion-content p-3 bg-gray-200">
            Cras laoreet neque ut mauris hendrerit auctor. Donec rutrum varius sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sit amet justo nulla. Morbi ac massa velit. Praesent malesuada arcu ac finibus tristique. Etiam imperdiet, lectus id malesuada vulputate, ante diam elementum velit, vitae lacinia erat nunc ac nisl. Aliquam dui lectus, porta ut vulputate eget, cursus vitae augue. Donec volutpat eros massa, ut maximus metus imperdiet quis.
        </div>
    </div>

    <div class="accordion-pane mb-2">
        <div class="accordion-button">
            <button @click="accordion!=='accordion2'?accordion='accordion2':accordion=null" :class="{ 'bg-pink-700': accordion ==='accordion2' }" class="bg-pink-500 w-full rounded focus:outline-none text-white font-semibold p-4 flex items-center" type="button">
                <svg :class="{ 'hidden': accordion ==='accordion2' }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659l4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
                </svg>
                <svg :class="{ 'hidden': accordion !=='accordion2' }" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up mr-2" viewBox="0 0 16 16">
                    <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659l4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
                </svg>
                Accordion 2
            </button>
        </div>
        <div x-show.transition.in.duration.600ms.origin.top.bottom.opacity.out.duration.300ms.origin.bottom.top.opacity="accordion === 'accordion2'" class="accordion-content p-3 bg-gray-200">
            Nulla facilisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque porttitor, ligula eget rhoncus vulputate, libero lacus tincidunt felis, sed vulputate nulla erat quis odio. Etiam et auctor tortor, id porttitor quam. Phasellus ac leo sit amet enim lacinia fringilla. Ut volutpat vulputate finibus. Morbi consequat eleifend eleifend. Sed at turpis nisl. Duis sed eros metus. Praesent a elementum nunc. Phasellus at placerat nunc. Vestibulum ipsum orci, eleifend nec massa vel, gravida tempor quam. Nam lobortis non diam at condimentum.
        </div>
    </div>
</div>