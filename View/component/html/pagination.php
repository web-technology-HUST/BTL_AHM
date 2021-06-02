<style>
    <?php
        include '../css/pagination.css';
        $pageCurrent = 1;
    ?>
</style>
<div class="pagination">
    <a id="prevPage" style="cursor:pointer;" class="" onclick="previous()">
        ❮
    </a>
    <a id="pageNumber" class="active"><?php echo $pageCurrent ?></a>
    <a id="nextPage" class="" style="cursor:pointer;" onclick="next()">
        ❯
    </a>
</div>
<script>
    var totalPage = 10;
    var pageNumberId = document.getElementById("pageNumber");
    var prevPage = document.getElementById("prevPage");
    var nextPage = document.getElementById("nextPage");
    checkPage(parseInt(pageNumberId.innerHTML));
    function checkPage(page) {
        prevPage.classList.remove("disable");
        nextPage.classList.remove("disable");
        if (page == 1) {
            prevPage.classList.add("disable");
            prevPage.onclick = null;
            nextPage.classList.add("enable");
        } else if (page == 10) {
            nextPage.classList.add("disable");
            nextPage.onclick = null;
            prevPage.classList.add("enable");
        } else {
            nextPage.classList.add("enable");
            prevPage.classList.add("enable");
        }
    }
    function previous() {
        var pageNumber = parseInt(pageNumberId.innerHTML);
        pageNumberId.innerHTML = --pageNumber;
        checkPage(pageNumber);
        paginate(pageNumber);
    }
    function next() {
        var pageNumber = parseInt(pageNumberId.innerHTML);
        pageNumberId.innerHTML = ++pageNumber;
        checkPage(pageNumber);
        paginate(pageNumber);
    }
    function paginate(val) {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET", "paginate.php?page=" + val, true);
      xmlhttp.send();
    }
  </script>