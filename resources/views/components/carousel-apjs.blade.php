<div x-data="carousel()" class="carousel relative bg-indigo-500" id="{{isset($id) && $id ? $id : 'myCarousel'}}">
    <div class="carousel-wrapper lg:overflow-hidden overflow-auto">
        <ul class="carousel-grid list-none flex flex-nowrap" style="transition: transform 0.5s 0s, opacity 0s; opacity: 1;">
            <template x-for="(item, index) in items" :key="index">
                <li class="carousel-item w-full flex-shrink-0" x-show.transition.opacity.duration.600ms="target === (index+1)">
                    <img class="w-full" :src="item.name" alt="Image 1">
                </li>
            </template>
        </ul>
    </div>

    <button x-spread="prev" x-show="target > 1" type="button" class="carousel-control-prev absolute h-full top-0 m-0 text-white hover:text-indigo-400 border-0 focus:border-0 focus:outline-none">
        <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button  x-spread="next" x-show="target < items.length" type="button" class="carousel-control-next absolute h-full top-0 m-0 text-white hover:text-indigo-400 border-0 focus:border-0 focus:outline-none">
        <svg width="40" height="40" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>

<script>
    function carousel(){
        return{
            target: 1,
            items: [
                {'name' : 'http://placeimg.com/1000/420/nature'},
                {'name' : 'http://placeimg.com/1000/420/tech'},
                {'name' : 'http://placeimg.com/1000/420/arch'},
                {'name' : 'http://placeimg.com/1000/420/animals'}
            ],
            prev:{
                ['@click'](){
                    if (this.target > 1) {
                        return this.target--;
                    }
                }
            },
            next:{
                ['@click'](){
                    if (this.target < 4) {
                        return this.target++; 
                    }
                }
            },
        }
    }
</script>
