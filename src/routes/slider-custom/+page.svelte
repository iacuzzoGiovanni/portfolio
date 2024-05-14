<ul>
    <li><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./profile.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./Smart_home.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./crypto.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
    <li><img src="./appicon.webp" alt="" loading="lazy" width="2048" height="1536"></li>
</ul>
<button on:click={prev}>prev</button>
<button on:click={next}>next</button>
<style>
    ul{
        width: 100%;
        overflow: clip;
        overflow-x: scroll;
        font-size: 0;
        text-wrap: nowrap;
        scroll-snap-type: x mandatory;
        scroll-behavior: smooth;
    }

    li{
        display: inline-block;
        width: calc((100% - 32px)/3);
        scroll-snap-align: center;
        scroll-snap-stop: always;
        margin-right: 16px;
        /*transition: transform .1s ease-in-out;*/
    }

    li:not(.selected){
        transform: scale(0.9);
    }

    li:last-child{
        margin-right: 0;
    }
</style>
<script>
    import { onMount } from "svelte";

    let slider;
    let sliderWidth;
    let sliderItems;
    let sliderContainerWidth;
    let sliderItemWidth;
    let scrollPosition = 0;
    let selectedItem;

    onMount(() => {
        slider = document.querySelector('ul');
        sliderItems = slider.querySelectorAll('li');
        sliderWidth = slider.scrollWidth;
        sliderContainerWidth = slider.clientWidth;
        sliderItemWidth = slider.querySelector('li').offsetWidth;
        selectedItem = 1;
        sliderItems[selectedItem].classList.add('selected');
    });

    function setSelected(el){
        sliderItems[selectedItem].classList.remove('selected');
        selectedItem = selectedItem + Number(el);
        sliderItems[selectedItem].classList.add('selected');
    }

    // Function to scroll to a specific position
    function scrollToPosition(position) {
        slider.scrollLeft = position;
        scrollPosition = position;
    }

    // Event listener for previous button
    function prev() {
        if (scrollPosition > 0) {
            scrollToPosition(scrollPosition - sliderItemWidth);
            setSelected('-1');
        }
    };

    // Event listener for next button
    function next() {
        if (scrollPosition < sliderWidth - sliderContainerWidth) {
            scrollToPosition(scrollPosition + sliderItemWidth);
            setSelected('+1');
        }
    };
</script>