let soundButton = document.querySelector('.soundbutton'),
    audioDev = document.querySelector('.devAudio'),
    audioHr = document.querySelector('.hrAudio');

function getAudioOfPage() {
  audio = '',
  nowPage = document.body.getAttribute('this-page');

  if (nowPage === 'dev') {
    audio = audioDev;
  } else {
    audio = audioHr;
  }

  audio.volume = 0.4;

  return audio;
}

soundButton.addEventListener('click', e => {
  audio = getAudioOfPage();
	soundButton.classList.toggle('paused');
	audio.paused ? audio.play() : audio.pause()
})

function clickAudio() {
  let clickAudio = document.getElementById('clickAudio');
  clickAudio.volume = 0.3;
  clickAudio.play();
}