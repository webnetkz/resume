<?php require_once './components/header.php';?>

    <div class="main-container">
      <div id="hrBlock">
        <audio id="clickAudio" src="./public/audios/click.mp3" volume="0.3" preload="none"></audio>
        <p>HR</p>
      </div>
      <div id="devBlock">
        <p>DEV</p>
      </div>
    </div>

    <script>
      devBlock.addEventListener('click', () => {
        document.body.innerHTML += `<audio class="devAudio" src="./public/audios/dev.mp3" loop></audio>`;
        document.body.setAttribute('this-page', 'dev');
        hideStartBlocks();
        dev.style.display = 'block';
        devCSS.removeAttribute('disabled');
        startTypedContent();
      });

      hrBlock.addEventListener('click', () => {
        document.body.setAttribute('this-page', 'hr');
        hideStartBlocks();
        iframeContainer.style.display = 'block';
      });
      
      function hideStartBlocks() {
        clickAudio();
        soundButton.click();

        if(document.body.clientWidth < 1200) {
          hrBlock.classList.add('goToTop');
          devBlock.classList.add('goToBottom');
        } else {
          hrBlock.classList.add('goToLeft');
          devBlock.classList.add('goToRight');
        }
        
        document.querySelector('.soundbutton').style.bottom = '1rem';

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