
<div x-data="slider()" x-init="init()" x-on:resize.window="init" x-ref="slider" data-size="5" id="slider1" class="slider">
    <div class="xl:overflow-hidden lg:overflow-hidden md:overflow-x-scroll sm:overflow-x-scroll overflow-x-scroll">
        <div x-ref="sliderContainer" x-spread="translate3d" class="slider-container flex flex-nowrap" style="transition: transform 0.5s 0s, opacity 0s; opacity: 1;">
            <div x-ref="sliderItem" class="slider-item xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full w-full px-3 flex-none">
                <img class="w-full" src="http://placeimg.com/1000/420/nature" alt="Image 1">
            </div>
            <div class="slider-item xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full w-full px-3 flex-none">
                <img class="w-full" src="http://placeimg.com/1000/420/arch" alt="Image 1">
            </div>
            <div class="slider-item xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full w-full px-3 flex-none">
                <img class="w-full" src="http://placeimg.com/1000/420/animals" alt="Image 1">
            </div>
            <div class="slider-item xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full w-full px-3 flex-none">
                <img class="w-full" src="http://placeimg.com/1000/420/tech" alt="Image 1">
            </div>
            <div class="slider-item xl:w-1/3 lg:w-1/2 md:w-1/2 sm:w-full w-full px-3 flex-none">
                <img class="w-full" src="http://placeimg.com/1000/420/nature" alt="Image 1">
            </div>
        </div>
    </div>
    <div class="xl:flex lg:flex md:hidden xs:hidden hidden items-center justify-center my-3">
      <button type="button" class="btn-control bg-gray-500 text-white p-3 mx-2 rounded" x-bind:disabled="xtranslate <= 0" x-spread="prev">
          Anterior
      </button>

      <button type="button" class="btn-control bg-gray-500 text-white p-3 mx-2 rounded" x-bind:disabled="xclicks >= xdisplay" x-spread="next">
          Próximo
      </button>
    </div>
</div>

<script>
  function slider(){
    return{
        xtranslate: 0,
        xstyle: '',
        xdisplay : 0,
        xclicks : 0,
        xsize : 0,
        xitems: 0,
        id: '',
        translate3d: {
            [':style']() {
                if (this.xtranslate > 0) {
                    this.xstyle = 'transform: translate3d(-'+ this.xtranslate +'px, 0px, 0px);';
                }else{
                    this.xstyle = 'transform: translate3d(0px, 0px, 0px);';
                }
                return this.xstyle;
            },
        },
        prev:{
            ['@click'](){
                this.xclicks--;
                this.xtranslate -= this.xsize;
                return this.xtranslate;
            }
        },
        next:{
            ['@click'](){ 
              if (this.xclicks < this.xdisplay) {
                this.xclicks++;
                this.xtranslate += this.xsize;
                return this.xtranslate;
              }
            }
        },
        init(){
            this.id       = '#' + this.$refs.slider.id;
            this.xsize    = this.$refs.sliderItem.offsetWidth;
            
            let items     = this.$refs.slider.dataset.size;
            let container = this.$refs.sliderContainer.offsetWidth;
            let show      = container/this.xsize;

            this.xdisplay = items/show;
            this.xdisplay = Math.round(this.xdisplay);

            this.xtranslate = 0;
            this.xclicks = 0;

            return this.translate3d;
        }
    }
  }
</script>