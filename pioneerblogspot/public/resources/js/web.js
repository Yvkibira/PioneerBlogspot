function menuToggler(toggleElements){toggleElements.forEach(element => {element.classList.toggle('hidden');});}
function addLink(event) {var selection = window.getSelection();var pagelink = ". Read more at: " + document.location.href;var copytext = selection.toString() + pagelink;if (event.clipboardData) {event.clipboardData.setData('text/plain', copytext);event.preventDefault();}else if (window.clipboardData) {window.clipboardData.setData('Text', copytext);event.preventDefault();}}
function wasThisHelpful(){var div=document.createElement('div');div.className="wth";div.id="wth";div.innerHTML=`<h5>Was this article helpful ?</h5><div id="tu"><i class="material-icons"onclick="sendResponse('1')">thumb_up</i></div><div id="td"><i class="material-icons"onclick="sendResponse('0')">thumb_down</i></div>`;document.getElementsByTagName("main")[0].appendChild(div);}
function sendResponse(button){const Data={"button":button,"page":window.location.pathname};const formdata=JSON.stringify(Data);fetch("https://blogspot.sicklywall.com/api/", {method: "POST",body:formdata}).then(document.getElementById('wth').style.display="none")}
function makeFooter(){
    var footer= document.getElementById("footer-section");
    var elementToAdd=document.createElement("div");
    elementToAdd.innerHTML=`
  <section class="responsive-footer" id="r-f-ad">
  <!-- responsive footer -->
  <ins class="adsbygoogle"
   style="display:block"
   data-ad-client="ca-pub-2705647526062186"
   data-ad-slot="4279863659"
   data-ad-format="auto"
   data-full-width-responsive="true"></ins>
  <script>
   (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
  </section>
<footer id="footer" class="footer"><p><a href="https://pioneerblogspot.co.ke">PIONEERBLOGSPOT.CO.KE</a></p></footer>
   <style>
     .r-footer-a{display: flex;justify-content: space-around;}
    .flink-ads{width:45%;height: 10vh;}
  </style>
  <div class="flinks">
  <div class="r-footer-a ">
    <section class="l-footer flink-ads" id="l-footer">
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2705647526062186"
   crossorigin="anonymous"></script>
  <!-- responsive footer -->
  <ins class="adsbygoogle"
   style="display:block"
   data-ad-client="ca-pub-2705647526062186"
   data-ad-slot="4279863659"
   data-ad-format="auto"
   data-full-width-responsive="true"></ins>
  <script>
   (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
    </section>
    <section class="r-footer flink-ads" id="r-footer">
       <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2705647526062186"
   crossorigin="anonymous"></script>
  <!-- responsive footer -->
  <ins class="adsbygoogle"
   style="display:block"
   data-ad-client="ca-pub-2705647526062186"
   data-ad-slot="4279863659"
   data-ad-format="auto"
   data-full-width-responsive="true"></ins>
  <script>
   (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
    </section>
  </div>
  <div class="one"><a href="https://www.pioneerblogspot.co.ke/fashionblogs.html">Fashion Blog</a><a href="https://www.pioneerblogspot.co.ke/farming.html">Farming Blog</a></div>
  <div class="two"><a href="https://www.pioneerblogspot.co.ke/opinions.html">Opinion Blog</a><a href="https://www.pioneerblogspot.co.ke/finance.html">Finance Blog</a></div>
  <div class="three"><a href="https://www.pioneerblogspot.co.ke/tic.html">TicTacToe Game</a></div>
  </div>
  <div class="links"><a href="mailto:info@pioneerblogspot.co.ke">contact us| </a><a href="https://www.pioneerblogspot.co.ke/disclaimer.html">Disclaimer</a></div>
  `;
  footer.appendChild(elementToAdd);
  (adsbygoogle = window.adsbygoogle || []).push({});
  (adsbygoogle = window.adsbygoogle || []).push({});
  (adsbygoogle = window.adsbygoogle || []).push({});
  }

  window.addEventListener("DOMContentLoaded",makeFooter);




  window.onload=function(){const toggleButton =document.getElementById('toggle-button');const toggleElements=document.querySelectorAll('.toggle-element');toggleButton.addEventListener('click',menuToggler(toggleElements));document.addEventListener('copy', addLink);wasThisHelpful();};
  
