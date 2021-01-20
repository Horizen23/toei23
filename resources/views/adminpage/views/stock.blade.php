<style>
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400);
button{
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.center {
  position: absolute;
  width: 500px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #fff;
  box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
  border-radius: 3px;
}

.title {
  position: relative;
  font-size: 16px;
  color: #676767;
  line-height: 50px;
  height: 80px;
  display: flex;
  justify-content: center;
  border-bottom: 1px solid #D8D8D8;
  text-align: center;
}

.dropzone {
  position: absolute;
  z-index: 1;
  box-sizing: border-box;
  display: table;
  table-layout: fixed;
  width: 300px;
  height: 180px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border: 1px dashed #65bbec;
  border-radius: 3px;
  text-align: center;
  overflow: hidden;
}
.imglod{
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 90px;

}

.file {
  opacity: 0;
  width: 0.1px;
  height: 0.1px;
  position: absolute;
}
.f_head{
  margin-top: 30px;
  position: relative;
  height: 180px;
}
.file-input label {
  display: flex;
    flex-direction: column;
  position: relative;
  width: 300px;
  height: 180px;
  border-radius: 25px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #b9b5b5;
  font-weight: bold;
  cursor: pointer;
}

.file-name {
  position: absolute;
  bottom: -35px;
  left: 10px;
  font-size: 0.85rem;
  color: #555;
}

.swo{
 padding: 0px 40px;
 font-size: 16px;
 color: #676767;
 line-height: 50px;
}



li:hover {
  --edit-opacity: 1;
}
@media (hover: none) {
  li {
    --edit-opacity: 1;
  }
}
.headerlist{
  font-size: 18px;
  margin: 30px 30px 10px 30px;
  padding: 0 16px;
  color: #566191;
}

.listldimg {
  font-size: 14px;
  margin: 10px 40px 30px;
  padding: 0 16px;
  list-style: none;
  width: 400px;
  max-width: 400px;
  overflow: auto;
    max-height: 300px;
}
.listldimg li {
  padding: 12px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.listldimg li:not(:last-child) {
  border-bottom: 1px solid #D1D6EE;
}
.listldimg li span {
  display: block;
  width: 300px;
  word-wrap: break-word;
}
.listldimg li button.selectimg {
  -webkit-appearance: none;
  background: var(--background, #ECEFFC);
  color: #646B8C;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
  padding: 4px 12px;
  margin: 0;
  line-height: 17px;
  font-family: inherit;
  font-size: 12px;
  font-weight: 500;
  opacity: var(--edit-opacity, 0);
}

.listldimg li button.delertimg {
  -webkit-appearance: none;
  background: #f75d59;
  color: #ECEFFC;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 8px;
  padding: 4px 12px;
  margin: 0;
  line-height: 17px;
  font-family: inherit;
  font-size: 12px;
  font-weight: 500;
  opacity: var(--edit-opacity, 0);
}


.listldimg li button:hover {
  --background: #E1E6F9;
}



.none{
  display: none;
}
.true{
  display: block;
}

.pre{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
}
.pre{
  height: 180px;
  width: auto;
}

.btnsave{
  
  transform: translate(0%, -50%);
  height: 40px;
  border-radius: 15px;
  width: 109px;
  align-items: center;
  position: absolute;
  right: 15px;
  top: 50%;
  background: linear-gradient(40deg,#1da1f2,#7873f5);
  color: #ffff;
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;

}

.btnsave:hover{
  cursor: pointer;
}
.title>p{
  font-size: 20px;
  user-select: none;
}
.title>h1{
  user-select: none;
 cursor: pointer;
}











.loader {
  border: 3px solid #5a5a5a;
  border-radius: 50%;
  border-top: 3px solid #b4b4b4;
  width: 20px;
  height: 20px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}




.laa {
content:url(http://127.0.0.1:8000/image/check.svg) ;
 width: 20px;
 height: 20px;
}
.mainshirt {
content:url(http://127.0.0.1:8000/image/shirt.svg) ;
 width: 20px;
 height: 20px;
}

.close {
content:url(http://127.0.0.1:8000/image/close.svg) ;
height: 17px;
 transform: translate(0%, -50%);
 align-items: center;
 position: absolute;
 left:  25px;
 opacity: 0.7;
 top: 50%;
 -moz-user-select: none;
 -webkit-user-select: none;
 -ms-user-select: none;
 user-select: none;

}

.btnoneven{
  opacity: 0.4;
    pointer-events: none;
}











/* width */
::-webkit-scrollbar {
  width: 3px;
}

/* Track */
::-webkit-scrollbar-track {
  background: repeat; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
</style>
<p> stock</p>

 <div class="center">
    <div class="title">
       <div class="close"></div>
        <p>อัพโหลดรูปสินค้า</p>
        <div class="btnsave">บันทึก  </div>
    </div>
    <div class="f_head">
    <div class="dropzone">
        <div class="file-input">
            <input type="file" id="file" class="file" multiple>
            <label for="file">
                <img class="imglod" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxsaW5lYXJHcmFkaWVudCBpZD0iU1ZHSURfMV8iIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMjU2IiB4Mj0iMjU2IiB5MT0iNDgxIiB5Mj0iMzEiPjxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iIzU1NThmZiIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iIzAwYzBmZiIvPjwvbGluZWFyR3JhZGllbnQ+PGxpbmVhckdyYWRpZW50IGlkPSJTVkdJRF8yXyIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiIHgxPSIyNTYiIHgyPSIyNTYiIHkxPSI0NzguNiIgeTI9IjI0MSI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjYWRkY2ZmIi8+PHN0b3Agb2Zmc2V0PSIuNTAyOCIgc3RvcC1jb2xvcj0iI2VhZjZmZiIvPjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI2VhZjZmZiIvPjwvbGluZWFyR3JhZGllbnQ+PGc+PGc+PGc+PHBhdGggZD0ibTMwNi40NzcgMzM4LjA5NWM1Ljg4Ni01LjQ0NCA5LjUyMy0xMy4yNjcgOS41MjMtMjIuMDk1IDAtMTYuODE2LTEzLjE4NC0zMC0zMC0zMHMtMzAgMTMuMTg0LTMwIDMwYzAgNC41Ljk1MiA4LjczNSAyLjY1NiAxMi41MzFsLTYyLjY1Ni0xMi41MzEtNjkgMTYxLjk5OWMyLjQwMSAxLjggNS43IDMuMDAxIDkgMy4wMDFoMjQwYzIuOTk5IDAgNi0uOTAxIDguNDAxLTIuNDAxbC0zOC40MDEtMTMyLjU5OXptMTE0LjUyMy0xODcuMDk1YzAtNjYuMTY3LTUzLjgxOC0xMjAtMTIwLTEyMC0zMS42NyAwLTYxLjkzNCAxMi43ODgtODQuNDkyIDM1LjQwNS02OC4yNjItMjAuNzcxLTEzNy44MTMgMjMuMDg2LTE1Mi4xMSA4OC44NDMtMzcuMjk0IDExLjM5Ny02NC4zOTggNDUuOTA4LTY0LjM5OCA4NS43NTIgMCA0OS42MjkgNDEuMzcxIDkwIDkxIDkwaDQ1YzguMjkxIDAgMTUtNi43MDkgMTUtMTV2LTQ1aDIxMHY0NWMwIDguMjkxIDYuNzA5IDE1IDE1IDE1aDQ1YzQ5LjYyOSAwIDkxLTQwLjM3MSA5MS05MHMtNDEuMzcxLTkwLTkxLTkweiIgZmlsbD0idXJsKCNTVkdJRF8xXykiLz48L2c+PC9nPjxnPjxnPjxwYXRoIGQ9Im0zNzYgMjQxaC0yNDBjLTguMjg0IDAtMTUgNi43MTYtMTUgMTV2MjEwYzAgNS4wOTkgMi40MDEgOS4zIDYgMTEuOTk5bDg3LjkwNC0xMTcuMjA1YzUuNzE4LTcuNjI0IDE3LjAwMi04LjA1MiAyMy4yODItLjg4NWwzNC4xMjUgMzguOTVjNS44NzEgNi43MDEgMTYuMjU1IDYuODM4IDIyLjMwMS4yOTNsOC40NTgtOS4xNTZjNi41ODgtNy4xMzIgMTguMTEzLTYuMjIxIDIzLjQ5OSAxLjg1OGw1Ny44MzEgODYuNzQ1YzMuODk5LTIuNyA2LjYtNy4xOTkgNi42LTEyLjU5OXYtMjEwYzAtOC4yODQtNi43MTYtMTUtMTUtMTV6bS05MCA5MGMtOC40MDEgMC0xNS02LjYwMS0xNS0xNSAwLTguMTk2IDYuODE0LTE1LjAwNiAxNS4wMS0xNSA4LjM5Ni4wMDUgMTQuOTkgNi42MDIgMTQuOTkgMTUgMCA4LjE5My02LjgwNyAxNS0xNSAxNXoiIGZpbGw9InVybCgjU1ZHSURfMl8pIi8+PC9nPjwvZz48L2c+PC9zdmc+" />
                <p>เลือกรูปภาพ</p>
            </label>
        </div>
        <img class="none pre"src="#" alt="">
    </div>
    </div>
    <div class="headerlist">รูปทั้งหมด</div>
    <ul class="listldimg">
        </ul>
        
</div>

<script>

$(document).ready(function() {
    alerts= [];
  
    $( ".file" ).on( "change", function(event) {
        $(".listldimg>li").remove();
        const aa = event.target.files;
            for(i = 0; i < aa.length; i++){
                alerts.push(aa[i]);
            }
        for (i = 0; i < alerts.length; i++) {
            if(alerts[i]){
            const { name: fileName, size } = alerts[i];
            const fileSize = (size / 1024).toFixed(2);
            const sixx = fileSize < 1000 ? fileSize+"kb" :(fileSize / 1024).toFixed(2)+"mb";
            const fileNameAndSize =  `ชื่อไฟล์ : ${fileName} ขนาด : ${sixx}`;
            $(".listldimg").append(`<li class="a ${i}"><span>${fileNameAndSize}</span><button class="selectimg" id="${i}">ดู</button><button class="delertimg" id="${i}">ลบ</button></li>`);
        }
    }
        $(".file").val("")
    } );


    $('.listldimg').delegate('li>button.selectimg','mousedown',function() {
        var file_data = alerts[this.id]; 
        var reader = new FileReader();
        reader.readAsDataURL(file_data);
        reader.onload = function(e) {
            $('.pre').attr('src', e.target.result);
            $(".file-input").addClass("none");
            $("img.none").addClass("true");
          }
                
    });
    $('.listldimg').delegate('li>button.selectimg','mouseleave',function() {
        $(".file-input").removeClass("none");
        $("img.none").removeClass("true");
   
    });

      $('.listldimg').delegate('li>button.delertimg','click',function() {
        delete alerts[this.id]
        $(".listldimg>li").remove();
        var i;
        for (i = 0; i < alerts.length; i++) {
            if(alerts[i]){
            const { name: fileName, size } = alerts[i];
            const fileSize = (size / 1024).toFixed(2);
            const sixx = fileSize < 1000 ? fileSize+"kb" :(fileSize / 1024).toFixed(2)+"mb";
            const fileNameAndSize =  `ชื่อไฟล์ : ${fileName} ขนาด : ${sixx}`;
            $(".listldimg").append(`<li class="a ${i}"><span>${fileNameAndSize}</span><button class="selectimg" id="${i}">ดู</button><button class="delertimg" id="${i}">ลบ</button></li>`);

        }
        }
        console.log(alerts)
    });


    $('.btnsave').on('click', function() {
        var i;
        if(alerts.length){
            $(".listldimg>li").remove();
            var i;
            for (i = 0; i < alerts.length; i++) {
                if(alerts[i]){
                const { name: fileName, size } = alerts[i];
                const fileSize = (size / 1024).toFixed(2);
                const sixx = fileSize < 1000 ? fileSize+"kb" :(fileSize / 1024).toFixed(2)+"mb";
                const fileNameAndSize =  `ชื่อไฟล์ : ${fileName} ขนาด : ${sixx}`;
                $(".listldimg").append(`<li class="a ${i}"><span>${fileNameAndSize}</span></li>`);
    
            }}
            $('.btnsave').addClass("btnoneven")
            $('.listldimg>li').append(`<div class="loader"></div>`)
        }
        var ld = 0;
    
        
        for (i = 0; i < alerts.length; i++) {
           
            if(alerts[i]){
            var form_data = new FormData();                  
            form_data.append('file', alerts[i]);
        $.ajax({
            url: 'http://localhost/form%20upload/upload.php', // point to server-side PHP script 
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,                         
            type: 'post',
            headers: {
               aa:i
            },
            success: function(ss){
                ld+=1
                var aa = $(`.listldimg>li.${ss}>div`);
                aa.removeClass("loader")
                aa.addClass("laa")
                if(ld==alerts.length){
                    setTimeout(
                        function() 
                        {   
                            alerts= [];
                            $('.btnsave').removeClass("btnoneven")
                        }, 2000);
                        ld = 0;
                     }
                    }
                });
            }
            else{
                if(ld==alerts.length-1){
                            $('.btnsave').removeClass("btnoneven")
                        ld = 0;
                     }
                    ld+=1
            }

        }
    });


});



</script>