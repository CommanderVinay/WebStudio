const video = document.querySelector('.video');

document.querySelector('.video1').addEventListener('mouseover', () => {
  video.play(); // Play the video on hover
});

document.querySelector('.video1').addEventListener('mouseout', () => {
  video.pause(); // Pause the video when hover ends
});