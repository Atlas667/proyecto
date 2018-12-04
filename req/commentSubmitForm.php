<!-- Form de comentarios -->

<div id="hacerComentarios" class=" pb-2 container">
  <form class="p-2 mb-3 border rounded" action="req/commentSubmitScript.php">

  	<label for="estrellas">Estrellas</label>
    <input type="hidden" id="estrellas" name="estrellas" value="1" required>
    <div id="stars" class="pb-0">
      <span class="fa fa-star checked" id="star1" onclick="add(this,1)"></span>
      <span class="fa fa-star" id="star2" onclick="add(this,2)"></span>
      <span class="fa fa-star" id="star3" onclick="add(this,3)"></span>
      <span class="fa fa-star" id="star4" onclick="add(this,4)"></span>
      <span class="fa fa-star" id="star5" onclick="add(this,5)"></span>
      <script>
        function add(ths,sno){

          for (var i=1;i<=5;i++){
            var cur=document.getElementById("star"+i)
            cur.className="fa fa-star"}

          for (var i=1;i<=sno;i++){
            var cur=document.getElementById("star"+i)
            if(cur.className=="fa fa-star"){
              cur.className="fa fa-star checked"
            }
          }

          document.getElementById("estrellas").setAttribute("value",sno);

        }
      </script>
    </div>

      <br />

    <label for="comment" class="mt-0">Comentario</label>
    <textarea name="comment" class="form-control" id="comment" placeholder="..." required="" type="text"></textarea>
    <div class="invalid-feedback">
      Por favor escribir un comentario.
    </div>
    <br />
    <button type="submit" class=" btn btn-primary">Submit</button>
  </form>

</div>