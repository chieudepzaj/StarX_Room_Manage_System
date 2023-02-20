<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/*" href="<?php echo base_url() . 'uploads/website/' . $this->db->get_where('setting', array('name' => 'favicon'))->row()->content;?>">
    <title>Loading</title>
</head>
<body>
<header>
  <h1>Thông tin liên hệ đã được gửi. Xin cám ơn!</h1>
</header>

<!-- 
  Our Dice's Faces
-->
<div class="dice">
  
  <div class="face first-face">
    <div class="dot"></div>  
  </div>
  
  <div class="face second-face">
    <div class="dot"></div>  
    <div class="dot"></div>  
  </div>
  
  <div class="face third-face">
    <div class="dot"></div>  
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
  
  <div class="face fourth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>    
  </div>
  
  <div class="face fifth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>
    <div class="column">
      <div class="dot"></div>
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
    </div>    
  </div>
  
  <div class="face sixth-face">
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
    <div class="column">
      <div class="dot"></div>  
      <div class="dot"></div>  
      <div class="dot"></div>
    </div>    
  </div>
  
</div>

<p><a href="/starx/lienhe">Click here to redirect page now.</a></p>
<p>Wait, page will redirect in <span id="count-time">5</span></p>
<script>
    timeLeft = 5;

function countdown() {
	timeLeft--;
	document.getElementById("count-time").innerHTML = String( timeLeft );
	if (timeLeft > 0) {
		setTimeout(countdown, 1000);
	}
    else {
        location.replace("<?php echo base_url(); ?>lienhe");
    }
};

setTimeout(countdown, 1000);
</script>
<style>
    body {
  font-family: 'Crafty Girls', cursive;
  font-size: 16px; }
header{
    margin-top: 50px;
}
h1 {
  padding: 3rem 1rem 0;
  text-align: center;
  line-height: 1.3;
  letter-spacing: 4px;
  font-size: 2em; }

p {
  padding: 3rem 1rem 0;
  text-align: center;
  line-height: 1.3;
  letter-spacing: 4px;
  font-size: 1.125em; }

/******************************
 FLEXBOX STYLES
 ******************************/
.dice {
  display: flex;
  margin-top: 4rem;
  justify-content: center; }

.face {
  display: flex;
  width: 3rem;
  height: 3rem;
  margin: 0 .7rem;
  padding: .5rem;
  border-radius: 5px;
  opacity: 0; }
  .face .dot {
    width: .8rem;
    height: .8rem;
    background: #F44336;
    border-radius: 50%; }
  .face:nth-child(1) {
    border: 2px solid #F44336;
    animation: waves 5s linear infinite; }
    .face:nth-child(1) .dot {
      background: #F44336; }
  .face:nth-child(2) {
    border: 2px solid #E91E63;
    animation: waves 5s .2s linear infinite; }
    .face:nth-child(2) .dot {
      background: #E91E63; }
  .face:nth-child(3) {
    border: 2px solid #9C27B0;
    animation: waves 5s .4s linear infinite; }
    .face:nth-child(3) .dot {
      background: #9C27B0; }
  .face:nth-child(4) {
    border: 2px solid #673AB7;
    animation: waves 5s .6s linear infinite; }
    .face:nth-child(4) .dot {
      background: #673AB7; }
  .face:nth-child(5) {
    border: 2px solid #3F51B5;
    animation: waves 5s .8s linear infinite; }
    .face:nth-child(5) .dot {
      background: #3F51B5; }
  .face:nth-child(6) {
    border: 2px solid #2196F3;
    animation: waves 5s 1s linear infinite; }
    .face:nth-child(6) .dot {
      background: #2196F3; }

.first-face {
  justify-content: center;
  align-items: center; }

.second-face {
  justify-content: space-between; }
  .second-face .dot:last-of-type {
    align-self: flex-end; }

.third-face {
  justify-content: space-between; }
  .third-face .dot:nth-child(2) {
    align-self: center; }
  .third-face .dot:last-of-type {
    align-self: flex-end; }

.fourth-face {
  justify-content: space-between; }
  .fourth-face .column {
    display: flex;
    flex-direction: column;
    justify-content: space-between; }

.fifth-face {
  justify-content: space-between; }
  .fifth-face .column {
    display: flex;
    flex-direction: column;
    justify-content: space-between; }
    .fifth-face .column:nth-child(2) {
      justify-content: center; }

.sixth-face {
  justify-content: space-between; }
  .sixth-face .column {
    display: flex;
    flex-direction: column;
    justify-content: space-between; }

/*******************************************************/
@keyframes waves {
  0% {
    transform: translateY(0);
    opacity: 0; }
  4% {
    transform: translateY(-25px);
    opacity: 1; }
  8% {
    transform: translateY(0);
    opacity: 1; }
  70% {
    opacity: 0; } }

</style>
</body>
</html>