<section class="max-w-screen-sm mx-auto selected-work py-8 px-4">
    <h3 class="text-3xl text-center mb-2 tracking-tight">Selected work</h3>
    <p class="text-lg text-center text-stone-600 tracking-tight text-balance">
        Dive into a mix of concepts and real-world projects that highlight my creative flair and expertise.
    </p>
</section>

<div class="mb-8">
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <li class="glide__slide px-4 lg:px-0"><img src="./work/404.webp" alt="" loading="lazy" width="2048" height="1536"></li>
                <li class="glide__slide px-4 lg:px-0"><img src="./work/profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
                <li class="glide__slide px-4 lg:px-0"><img src="./work/Messaging.webp" alt="" loading="lazy" width="2048" height="1536"></li>
                <li class="glide__slide px-4 lg:px-0"><img src="./work/timer.webp" alt="" loading="lazy" width="2048" height="1536"></li>
                <li class="glide__slide px-4 lg:px-0"><img src="./work/Music-player.webp" alt="" loading="lazy" width="2048" height="1536"></li>
                <li class="glide__slide px-4 lg:px-0"><img src="./work/subscribe.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            </ul>
        </div>
        <div data-glide-el="controls" class="flex justify-center gap-x-4 mt-8">
            <button data-glide-dir="<" class="size-11 border border-zinc-300 hover:border-zinc-400 hover:bg-zinc-100 transition-colors duration-200 ease-in-out rounded-full active:scale-90 text-zinc-900 inline-flex justify-center items-center"><ChevronLeft /></button>
            <button data-glide-dir=">" class="size-11 border border-zinc-300 hover:border-zinc-400 hover:bg-zinc-100 transition-colors duration-200 ease-in-out rounded-full active:scale-90 text-zinc-900 inline-flex justify-center items-center"><ChevronRight /></button>
        </div>
    </div>
</div>

<style>
    .glide__slide{
        transition: transform .2s ease-in-out;
    }
    .glide__slide:not(.glide__slide--active){
        transform: scale(.8);
    }
    img{
        border-radius: 32px;
        width: auto;
        object-fit: cover;
    }
</style>

<script>
    import { onMount } from "svelte";
    import Glide from '@glidejs/glide';
    import "@glidejs/glide/dist/css/glide.core.min.css";
    import { ChevronRight, ChevronLeft } from 'lucide-svelte';   

    onMount(() => {
        new Glide('.glide', {
            type: 'slider',
            rewind: false,
            perView: 2,
            breakpoints:{
                1024: {
                    perView: 1,
                    gap: 32
                }
            },
            gap: 8,
            focusAt: 'center',
            startAt: 1,
            animationDuration: 200
        }).mount();
    });
</script>
