<div class="carousel relative" id="{{isset($id) && $id ? $id : 'myCarousel'}}">
    <div class="carousel-wrapper lg:overflow-hidden overflow-auto">
        <ul class="carousel-grid list-none flex flex-nowrap" data-size="5" style="transition: transform 0.5s 0s, opacity 0s; opacity: 1;">
            <li class="carousel-item w-full flex-shrink-0">
                <img class="w-full lg:block hidden" src="http://placeimg.com/1000/420/people" alt="Image 1">
                <img class="w-full lg:hidden block" src="http://placeimg.com/640/520/people" alt="Image 1">
            </li>
            
            <li class="carousel-item w-full flex-shrink-0">
                <img class="w-full lg:block hidden" src="http://placeimg.com/1000/420/nature" alt="Image 1">
                <img class="w-full lg:hidden block" src="http://placeimg.com/640/520/nature" alt="Image 1">
            <li class="carousel-item w-full flex-shrink-0">
                <img class="w-full lg:block hidden" src="http://placeimg.com/1000/420/tech" alt="Image 1">
                <img class="w-full lg:hidden block" src="http://placeimg.com/640/520/tech" alt="Image 1">
            </li>
            <li class="carousel-item w-full flex-shrink-0">
                <img class="w-full lg:block hidden" src="http://placeimg.com/1000/420/arch" alt="Image 1">
                <img class="w-full lg:hidden block" src="http://placeimg.com/640/520/arch" alt="Image 1">
            </li>
            <li class="carousel-item w-full flex-shrink-0">
                <img class="w-full lg:block hidden" src="http://placeimg.com/1000/420/animals" alt="Image 1">
                <img class="w-full lg:hidden block" src="http://placeimg.com/640/520/animals" alt="Image 1">
            </li>
        </ul>
    </div>
    <button data-carousel="{{isset($id) && $id ? $id : 'myCarousel'}}" data-slide="prev" data-slide-to="0" data-slide-position="0" type="button" id="btn-prev" class="carousel-control-prev absolute h-full top-0 m-0 text-white hover:text-red-900 border-0 focus:border-0 focus:outline-none">
        <svg class="h-15 w-15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button data-carousel="{{isset($id) && $id ? $id : 'myCarousel'}}" data-slide="next" data-slide-to="0" data-slide-position="0" type="button" id="btn-next"  class="carousel-control-next absolute h-full top-0 m-0 text-white hover:text-red-900 border-0 focus:border-0 focus:outline-none">
        <svg class="h-15 w-15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div>