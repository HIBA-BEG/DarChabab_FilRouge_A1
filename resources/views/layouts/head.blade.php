<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Hay Al Oumali</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/motion-tailwind.css"
    rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<script
    src="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/motion-tailwind/scripts/plugins/countup.min.js">
</script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<link href="/dist/tailwind.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />

@vite(['resources/css/app.css', 'resources/js/app.js'])

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    'orange-color': '#E64C3D',
                    'lightorange-color': '#F29D12',
                    'yellow-color': '#F5B041',
                    'lightyellow-color': '#F6DC6E',
                    'purple-color': '#5A2D6F',
                    'offwhite-color': '#FEFFFE',
                },
            },
        },
    }
</script>
<script type="text/javascript">
    function dropdown() {
      document.querySelector("#submenu").classList.toggle("hidden");
      document.querySelector("#arrow").classList.toggle("rotate-0");
    }
    dropdown();

    function openSidebar() {
      document.querySelector(".sidebar").classList.toggle("hidden");
    }
  </script>
<style>
    #menu-toggle:checked+#menu {
        display: block;
    }
</style>
