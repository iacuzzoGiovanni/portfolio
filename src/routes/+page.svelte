<svelte:head>
	<title>Giovanni Iacuzzo's portfolio</title>
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
  import Hero from "../lib/components/Hero.svelte";
  import Work from "../lib/components/Work.svelte";
  import Separator from "../lib/components/Separator.svelte";
  import Footer from "../lib/components/Footer.Svelte";
</script>

<main class="bg-gradient-to-b from-stone-100 to-white text-stone-900 font-geist">
  <SocialLinks />
  <Hero />
  <Separator />
  <Work />
  <Separator />
  <Footer />
</main>