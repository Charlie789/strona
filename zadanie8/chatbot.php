<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Appel</title>
	<link href="/css/mainstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<?php
		include($_SERVER['DOCUMENT_ROOT'].'/navigation.php');
		include($_SERVER['DOCUMENT_ROOT'].'/db_connect.php');
	?>
	<script src="/js/cookie.js"></script>
<div class="content">
<div class="chat">      <div class="messages"></div>
      <div id="edge"></div>      <form class="actions">
        <input type="text" placeholder="press 'Enter' to send...">
      </form>     </div>
 
    <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
	<script type="text/javascript">
	let bot = new RiveScript();

const brains = [
   '/brain.rive'
// './another-category-sample.rive
];
bot.loadFile(brains).then(botReady).catch(botNotReady);

const message_container = document.querySelector('.messages');
const form = document.querySelector('form');
const input_box = document.querySelector('input');

function botOferta(){
   var oferta = <?php echo "oferta"; ?>;
   botReply(oferta);
}

form.addEventListener('submit', (e) => {
   e.preventDefault();
   selfReply(input_box.value);
   input_box.value = '';
});

function botReply(message){
   message_container.innerHTML += `<div class='bot'>${message}</div>`;
   location.href = '#edge';
}

function selfReply(message){
   message_container.innerHTML += `<div class="self">${message}</div>`;
   location.href = '#edge';

   if (message == "oferta"){
      botOferta();
   } else {
      bot.reply("local-user", message).then(function(reply) {
         botReply(reply);
      });
   }
   
   
}

function botReady(){
   bot.sortReplies();
   botReply('Hello');
}

function botNotReady(err){
   console.log("An error has occurred.", err);
}</script>
		
</div>
</body>

</html>
