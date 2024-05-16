<svelte:head>
	<title>Giovanni Iacuzzo's portfolio — Error page</title>
	<meta name="description" content="I help businesses create beautiful and easy-to-use digital products ツ" />
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./site.webmanifest">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</svelte:head>

<script>
    import SocialLinks from "../lib/components/SocialLinks.svelte";
    import Button from "../lib/components/Button.svelte";
  </script>

<main class="bg-gradient-to-b from-stone-100 to-white text-stone-900 font-geist h-screen flex flex-col justify-center">
    <div>
        <header class="max-w-screen-sm mx-auto flex flex-col items-center py-8 px-4">
            <img src="./avatar.jpg" alt="Giovanni Iacuzzo avatar" width="40" height="40" class="rounded-full mb-4">
        </header>
        <section class="max-w-screen-sm mx-auto tagline flex flex-col items-center px-4">
            <h2 class="md:text-5xl text-[2.65rem] text-center mb-4 tracking-tighter font-regular leading-big-title md:leading-big-title text-balance">
                Oops! Lost in design space
            </h2>
            <p class="text-lg text-center mb-8 tracking-tight text-stone-600 text-balance">Looks like this page is off the grid. Navigate back to the home.</p>
            <Button link="/">Go Back Home</Button>
        </section>
    </div>
    <SocialLinks />
</main>