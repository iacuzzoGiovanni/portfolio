<svelte:head>
	<title>Giovanni Iacuzzo's portfolio</title>
	<meta name="description" content="I help businesses create beautiful and easy-to-use digital products ツ" />
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