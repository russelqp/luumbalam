<?php include('inc/header.php'); ?>




<article>
<div id="mainContener2">
<div id="welcome">
<h1>Galeria de Imagenes</h1>
<div id="gallery">
  <div id="imagearea">
    <div id="image">
      <a href="javascript:slideShow.nav(-1)" class="imgnav " id="previmg"></a>
      <a href="javascript:slideShow.nav(1)" class="imgnav " id="nextimg"></a>
    </div>
  </div>
  <div id="thumbwrapper">
    <div id="thumbarea">
      <ul id="thumbs">
        <li value="1"><img src="thumbs/1.jpg" width="179" height="100" alt="" /></li>
        <li value="2"><img src="thumbs/2.jpg" width="179" height="100" alt="" /></li>
        <li value="3"><img src="thumbs/3.jpg" width="179" height="100" alt="" /></li>
        <li value="4"><img src="thumbs/4.jpg" width="179" height="100" alt="" /></li>
        <li value="5"><img src="thumbs/5.jpg" width="179" height="100" alt="" /></li>
        <li value="6"><img src="thumbs/6.jpg" width="179" height="100" alt="" /></li>
        <li value="7"><img src="thumbs/7.jpg" width="179" height="100" alt="" /></li>
        <li value="8"><img src="thumbs/8.jpg" width="179" height="100" alt="" /></li>
        <li value="9"><img src="thumbs/9.jpg" width="179" height="100" alt="" /></li>
        <li value="10"><img src="thumbs/10.jpg" width="179" height="100" alt="" /></li>
        <li value="11"><img src="thumbs/11.jpg" width="179" height="100" alt="" /></li>
        <li value="12"><img src="thumbs/12.jpg" width="179" height="100" alt="" /></li>
      </ul>
    </div>
  </div>
</div>

<script type="text/javascript">
var imgid = 'image';
var imgdir = 'fullsize';
var imgext = '.jpg';
var thumbid = 'thumbs';
var auto = true;
var autodelay = 5;
</script>
<script type="text/javascript" src="js/slide.js"></script>
</div>
<br />

</div>
</article>

<?php include('inc/footer.php'); ?>


