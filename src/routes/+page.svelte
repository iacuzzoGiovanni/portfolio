<svelte:head>
	<title>Giovanni Iacuzzo | Product Designer helping businesses create user-friendly digital products</title>
	<meta name="description" content="Giovanni Iacuzzo, Product Designer with over a decade of experience in designing websites, mobile apps, software interfaces, icons, and more. Creating beautiful, user-friendly digital products." />
  <!-- Person Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Giovanni Iacuzzo",
    "jobTitle": "Product Designer",
    "url": "https://www.iacuzzogiovanni.com",
    "image": "https://www.iacuzzogiovanni.com/avatar.jpg",
    "sameAs": [
      "https://twitter.com/IacuzzoG",
      "https://dribbble.com/iacuzzogiovanni",
      "https://linkedin.com/in/giovanni-iacuzzo-15163959"
    ]
  }
  </script>
  <!-- SiteNavigationElement Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://www.iacuzzogiovanni.com",
    "name": "Giovanni Iacuzzo | Product Designer helping businesses create user-friendly digital products."
  }
  </script>
  <meta name="keywords" content="Product Designer, UX/UI Designer, Digital Product Design, Web Design, Mobile App Design, Software Interface Design, Icon Design, User-Friendly Design, Digital Products, Giovanni Iacuzzo, Experienced Designer, Design Portfolio, Freelance Designer, Visual Designer, Creative Designer">
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