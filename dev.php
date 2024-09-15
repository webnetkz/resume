  
<div id="dev" style="display: none;">
  <link rel="stylesheet" href="./public/css/dev.css" disabled id="devCSS" media="all">

  <div class="dev-container">
    <span id="element"></span>

    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
      function startTypedContent() {

        setTimeout(() => {
          let typed = new Typed('#element', {
            strings: ['a second sentence.'],
            typeSpeed: 33,
          });
        }, 1000);
      }

    </script>
  </div>
</div>


