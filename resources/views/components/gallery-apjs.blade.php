<div x-data="gallery()" class="gallerys py-4">
  <div class="container">
    <div class="gallery">
      
      <div class="gallery-inner relative mx-2" style="transition: transform 0.5s 0s, opacity 0s; opacity: 1; height:538px;">
        <template x-for="(item, index) in items" :key="index">
          <div class="gallery-item absolute w-full" x-show.transition.opacity.duration.600ms="target === (index)">
            <img class="w-full rounded" :src="item.name">
          </div>
        </template>
      </div>
    
      <div class="grid grid-cols-3 md:grid-cols-5 lg:grid-cols-6 py-4">
        <template x-for="(item, index) in items" :key="index">
          <div @click="target=index" class="column mx-2">
            <img :class="{'opacity-100' : target === index}" class="cursor img-thumb w-full h-22 object-cover rounded opacity-60" :src="item.name" alt="...">
          </div>
        </template>
      </div>
  </div>
</div>

<script>
  function gallery(){
      return{
          target: 0,
          items: [
              {'name' : 'https://placeimg.com/950/420/tech'},
              {'name' : 'https://placeimg.com/950/420/arch'},
              {'name' : 'https://placeimg.com/950/420/animals'}
          ],
      }
  }
</script>