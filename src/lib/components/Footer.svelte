<script>
    import Button from "./Button.svelte";
</script>
<footer class="max-w-screen-sm mx-auto selected-work pt-8">
    <h3 class="text-3xl text-center mb-2 tracking-tight mb-8">Made with ❤️</h3>
    <div class="mb-8 text-center sm:flex sm:justify-center">
        <Button link="mailto:iacuzzogiovanni@gmail.com">Get in touch</Button>
        <ul class="w-full sm:w-auto inline-flex gap-x-8 justify-center sm:items-center sm:ml-8 mt-8 sm:mt-0">
            <li><a href="https://twitter.com/IacuzzoG" target="_blank" class="text-base underline underline-offset-4 font-regular hover:text-stone-700">Twitter</a></li>
            <li><a href="https://dribbble.com/iacuzzogiovanni" target="_blank" class="text-base underline underline-offset-4 font-regular hover:text-stone-700">Dribbble</a></li>
            <li><a href="https://linkedin.com/in/giovanni-iacuzzo-15163959" target="_blank" class="text-base underline underline-offset-4 font-regular hover:text-stone-700">Linkedin</a></li>
        </ul>
    </div>
    <p class="text-center tracking-tighter overflow-hidden"><span class="relative sm:top-11">Giovanni Iacuzzo</span></p>
</footer>
<style>
    p{
        font-size: calc(4px + 11.5vw);
    }

    p span{
        top: 0.55em;
    }
    
    @media (min-width: 640px){
        p{
            font-size: 79px;
        }
    }
</style>