<button class="primary-btn 
               bg-stone-900 
               hover:bg-stone-700 
               transition-colors 
               duration-200 
               ease-in-out 
               text-stone-100 
               hover:text-stone-50 
               text-base
               font-medium 
               h-12 px-6 
               rounded-full 
               border 
               border-stone-900 
               hover:border-stone-700">
    <slot />
</button>
<style>
    button{
        box-shadow: 0px 1px 0px 0px theme('colors.stone.500') inset,
                    0px 2px 4px 0px theme('colors.stone.300');
    }
</style>