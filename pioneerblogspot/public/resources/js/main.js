var main=document.getElementsByTagName("main");
let myArray = Array.from(main);
main=myArray[0];

var section=`
<section>
   <style>
    .desktop-ad{ display:block;position: absolute;width: 160px;height: 600px;left: 20px;margin-top: 153px;}
    @media (max-width:1080px){.desktop-ad{display: none;}}
   </style>
   <section class="desktop-ad">
   <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2705647526062186"
     crossorigin="anonymous"></script>
<!-- vertical -->
<ins class="adsbygoogle"
     style="display:inline-block;width:160px;height:600px"
     data-ad-client="ca-pub-2705647526062186"
     data-ad-slot="1710327054"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </section>`;
    main.append(section);