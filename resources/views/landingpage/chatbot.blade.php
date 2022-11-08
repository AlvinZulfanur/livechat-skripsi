{{-- <!-- chatbox -->
    <input type="checkbox" id="click">
      <label for="click">
      <i class="bi-chat-fill"></i>
      <i class="fas fa-times"></i>
      </label>
      <div class="wrapper">
         <div class="head-text">
            Let's chat? - Online
         </div>
         <div class="chat-box">
            <div class="desc-text">
               Silahkan isi form dibawah ini
            </div>
            <form action="/home" method="post">
               @csrf
               <div class="field">
                  <input type="text" placeholder="Username" required>
               </div>
               <div class="field start-chat">
                  <button type="submit">Start Chat</button>
               </div>
            </form>
         </div>
      </div>
   </body>
    <!-- End chatbox --> --}}