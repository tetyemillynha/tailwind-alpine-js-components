<div x-data="{ tab: 'pane1' }" class="tabs">
    <div id="content-tab-cantores" class="section-tabs rounded-md bg-white p-1">
        {{-- tab list --}}
        <ul class="nav nav-tabs" data-tab="tablist" id="myTab">
            <li class="nav-item">
                <button @click="tab = 'pane1'" :class="{ 'border-b text-indigo-500': tab === 'pane1' }" class="nav-link focus:outline-none text-black hover:text-indigo-500 border-indigo-500" id="pane1-tab">Júlio Nascimento</a>
            </li>
            <li class="nav-item">
                <button @click="tab = 'pane2'" :class="{ 'border-b text-indigo-500': tab === 'pane2' }" class="nav-link focus:outline-none text-black hover:text-indigo-500 border-indigo-500" id="pane2-tab">Frankito Lopes</a>
            </li>
            <li class="nav-item">
                <button @click="tab = 'pane3'" :class="{ 'border-b text-indigo-500': tab === 'pane3' }" class="nav-link focus:outline-none text-black hover:text-indigo-500 border-indigo-500" id="pane3-tab">Sandro Lúcio</a>
            </li>
        </ul>

        {{-- tab content --}}
        <div class="tab-content p-2 relative" id="myTabContent">
            {{-- tab panes --}}
            <div x-show.transition.in.origin.left.right.duration.600ms="tab === 'pane1'" class="tab-pane py-3 relative w-100" id="pane1" aria-labelledby="pane1-tab">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <img src="https://direct.rhapsody.com/imageserver/images/alb.243314815/600x600.jpg" alt="Júlio Nascimento">
                    </div>
                    <div class="col-span-2">
                        <h2 class="text-3xl font-bold">Pane 1 - Júlio Nascimento</h2>
                        <p class="my-3">Dalziza - Júlio Nascimento</p>
                        <a target="_blank" rel="noreferer" class="btn btn-outline text-black border-black hover:border-indigo-700 hover:text-indigo-700" href="https://www.ouvirmusica.com.br/julio-nascimento/1006481/">
                            <i class="fas fa-music mr-2"></i>Ouvir músicas
                        </a>
                    </div>
                </div>
            </div>
            <div x-show.transition.in.origin.left.right.duration.600ms="tab === 'pane2'" class="tab-pane py-3 relative w-100" id="pane2" aria-labelledby="pane2-tab">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <img src="http://1.bp.blogspot.com/-SQPaOJHG0VM/ULGNm6YoGdI/AAAAAAAACJ0/DqrGRRbPpXc/s1600/(1989)+Bar+da+Boemia+(Vol.+7).jpg" alt="Frankito Lopes">
                    </div>
                    <div class="col-span-2">
                        <h2 class="text-3xl font-bold">Pane 2 - Frankito Lopes</h2>
                        <p class="my-3">Text 1</p>
                        <a target="_blank" rel="noreferer" class="btn btn-outline text-black border-black hover:border-indigo-700 hover:text-indigo-700" href="https://www.suamusica.com.br/sneijdercds/frankito-lopes-o-indio-apaixonado-as-melhores">
                            <i class="fas fa-music mr-2"></i>Ouvir músicas
                        </a>
                    </div>
                </div>
            </div>
            <div x-show.transition.in.origin.left.right.duration.600ms="tab === 'pane3'" class="tab-pane py-3 relative w-100" id="pane3" aria-labelledby="pane3-tab">
                <div class="grid grid-cols-3 gap-4">
                    <div class="col-span-1">
                        <img src="https://images-shoptime.b2w.io/produtos/01/00/sku/44311/3/44311311_1GG.jpg" alt="Sandro Lúcio">
                    </div>
                    <div class="col-span-2">
                        <h2 class="text-3xl font-bold">Pane 3 - Sandro Lúcio</h2>
                        <p class="my-3">Laço Aberto - Sandro Lúcio</p>
                        <a target="_blank" rel="noreferer" class="btn btn-outline text-black border-black hover:border-indigo-700 hover:text-indigo-700" href="https://www.ouvirmusica.com.br/sandro-lucio/">
                            <i class="fas fa-music mr-2"></i>Ouvir músicas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>