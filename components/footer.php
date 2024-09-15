    <img class="soundbutton" src="./public/imgs/sound.webp" alt="sound play">

    <script>
      window.onload = function()
      {
        // document.querySelectorAll('link').forEach(el => {
        //   if (el.rel == 'stylesheet' && el.id != 'devCSS') {
        //     el.disabled = false;
        //   }
        // });
      };
    </script>

    <script src="./public/js/script.js"></script>
    <script src="./public/js/audio.js"></script>

		<script>
			if('serviceWorker' in navigator)
			{
				window.addEventListener('load', function()
        {
					navigator.serviceWorker.register('./sw.js')
					.then(function(registration) {})
					.catch(function(error) {});
				});
			}
		</script>
	</body>
</html>