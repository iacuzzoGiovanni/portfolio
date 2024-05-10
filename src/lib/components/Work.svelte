<section class="max-w-screen-sm mx-auto selected-work py-8 px-4">
    <h3 class="text-3xl text-center mb-2 tracking-tight">Selected work</h3>
    <p class="text-lg text-center text-stone-600 tracking-tight text-balance">I wish I could share real work, NDAs prevent it. Here are concepts showcasing my craft instead.</p>
</section>

<div class="mb-8">
    <ul>
        <li><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
        <li><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    </ul>
</div>

<style>
    @keyframes carousel {
        0% { transform: translate3d(0,0,0); }
        100% { transform: translate3d(-50%,0,0);}
    }

    div{
        overflow:hidden;
	    position: relative;
	    width: 100%;
    }

    ul{
        display: inline-flex;
        width: calc(100vw/3*8);
        animation: carousel 40s linear infinite;
    }    

    li{
        margin-left: 16px;
    }

    img{
        border-radius: 16px;
    }

    @media screen and (max-width: 1280px){
        ul{
            width: calc(100vw/2*8);
        }
    }

    @media screen and (max-width: 768px){
        ul{
            width: calc((100vw)*8);
        }
    }
</style>
