<?php require_once './components/header.php';?>

		<div id="hrBlock">
      <p>HR</p>
    </div>
    <div id="devBlock">
      <p>DEV</p>
    </div>

    <script>
      devBlock.addEventListener('click', () => {
        hideStartBlocks();
        dev.style.display = 'block';
        devCSS.removeAttribute('disabled');
        startTypedContent();
      });

      hrBlock.addEventListener('click', () => {
        hideStartBlocks();
        iframeContainer.style.display = 'block';
      });

      function hideStartBlocks() {
        hrBlock.classList.add('goToleft');
        devBlock.classList.add('goToRight');
        setTimeout(() => {
          hrBlock.remove();
          devBlock.remove();
          document.querySelector('#dev').style.display = 'block';
        }, 490);
      }
    </script>

<?php require_once './dev.php';?>
<?php require_once './hr.php';?>
<?php require_once './components/footer.php';?>