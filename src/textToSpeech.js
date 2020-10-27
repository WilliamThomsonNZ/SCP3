

const readParagraph = () => {
  const speech = new SpeechSynthesisUtterance();
  let voices = speechSynthesis.getVoices();
  let convert = document.getElementById("read").textContent;
  speech.text = convert;
  speech.volume = 1;
  speech.rate = 1;
  speech.pitch = 15;
  speech.voice = voices[1];
  window.speechSynthesis.speak(speech);
};

document.getElementById("playBtn").addEventListener('click', readParagraph)