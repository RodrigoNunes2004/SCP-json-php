function Read(toRead)
{
    const speech = new SpeechSynthesisUtterance();
    let voices = speechSynthesis.getVoices();
    
    speech.text = toRead;
    speech.volume = 1;
    speech.rate = 1;
    speech.pitch = 1;
    speech.voices = voices[2];
    
    window.speechSynthesis.speak(speech);
}

let buttonTextSkyline = document.getElementById('1').innerText;
document.getElementById('1(1)').onclick = () => Read(buttonTextScp-002);

let buttonTextMarch = document.getElementById('2').innerText;
document.getElementById('2(1)').onclick = () => Read(buttonTextScp-003);

let buttonTextBluebird = document.getElementById('3').innerText;
document.getElementById('3(1)').onclick = () => Read(buttonTextScp-004);

let buttonTextCamry = document.getElementById('4').innerText;
document.getElementById('4(1)').onclick = () => Read(buttonTextScp-005);

let buttonTextCorolla = document.getElementById('5').innerText;
document.getElementById('5(1)').onclick = () => Read(buttonTextScp-006);

