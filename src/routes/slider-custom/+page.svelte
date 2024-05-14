<div class="glide">
    <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
            <li class="glide__slide"><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
            <li class="glide__slide"><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        </ul>
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
        height: 640px;
        object-fit: cover;
    }
</style>
<script>
    import { onMount } from "svelte";
    import Glide from '@glidejs/glide';
    import "@glidejs/glide/dist/css/glide.core.min.css";

    onMount(() => {
        new Glide('.glide', {
            type: 'carousel',
            perView: 4,
            gap: 16,
            focusAt: 'center',
            animationDuration: 200
        }).mount();
    });
</script>