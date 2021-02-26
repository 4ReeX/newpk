<style>
   .right-panel header.header {
      width: 100%;
      position: fixed;
      top: 0;
      z-index: 999;
      background: #fff;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      flex-wrap: nowrap;
      height: 40px;
      padding: 5px;
      box-sizing: border-box;
   }
   .header-left, .header-right {display: flex;}
   .balance {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      font-family: "Roboto", "Helvetica", "Arial", sans-serif;
      font-size: 12px;
      font-weight: bolder;
      
      box-sizing: border-box;
   }
   .balance-icon {
      height: 24px;
      width: 16px;
      margin: 0 5px;
   }
   .balance-icon svg.icon {
      height: 16px;
      width: 16px;
   }
   .logo {position: relative; width: 28px; height: 28px; display: flex; flex-direction: row; justify-content: center; align-items: center; margin: 0 15px 0 0; padding: 0;}
   .logo img {width: 28px;}
   form.search-container {
    position: relative;
    left: 5px;
    display: block;
    height: 30px;

   }
   .search-box {
   transition: width 0.6s, border-radius 0.6s, background 0.6s, box-shadow 0.6s;
   width: 28px;
   height: 28px;
   border-radius: 65px;
   border: none;
   cursor: pointer;
   background: #ebebeb;
   }
   .search-box + label .search-icon {
   color: black;
   }
   label.searchlabel {
   position: relative;
    left: -27px;
    top: 3px;
   }
   .search-box:hover {
   color: white;
   background: #c8c8c8;

   }
   .search-box:hover + label .search-icon {
   color: white;
   }
   .search-box:focus {
   transition: width 0.6s border-radius 0.6s, background 0.6s;
   border: none;
   outline: none;
   box-shadow: none;
   padding-left: 15px;
   cursor: text;
   width: 85%;
   border-radius: auto;
   background: #ebebeb;
   color: black;
   }
   .search-box:focus + label .search-icon {
   color: black;
   }
   .search-box:not(:focus) {
   text-indent: -5000px;
   }

   #search-submit {
   position: relative;
   left: -5000px;
   }

   .search-icon {
   position: relative;
   left: 0px;
   color: white;
   cursor: pointer;
   }


</style>
<header id="header" class="header">
   <div class="header-left">
      <div class="logo"><img src="images/new-logo.svg" alt=""></div>

      <form class="search-container" action="//llamaswill.tumblr.com/search">
      <input id="search-box" type="text" class="search-box" name="q" />
      <label for="search-box" class="searchlabel"><i class="ti ti-search search-icon"></i></label>
      <input type="submit" id="search-submit" />
      </form>
   </div>
   <div class="header-right" id="header-right">
      <div class="balance" onclick="payform();">
         <div class="balance-icon">
            <svg viewBox="0 0 24 24" class="icon">
            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 15.75 0.75 C 11.75 0.75 7.5 2.0625 7.5 4.5 L 7.5 7.5 C 7.5 7.914062 7.835938 8.25 8.25 8.25 C 8.664062 8.25 9 7.914062 9 7.5 L 9 6.71875 C 10.589844 7.722656 13.21875 8.25 15.75 8.25 C 18.28125 8.25 20.910156 7.722656 22.5 6.71875 L 22.5 7.5 C 22.5 8.234375 20.65625 9.402344 17.1875 9.691406 C 16.777344 9.726562 16.46875 10.089844 16.503906 10.503906 C 16.535156 10.894531 16.863281 11.191406 17.25 11.191406 C 17.269531 11.191406 17.289062 11.1875 17.3125 11.1875 C 19.265625 11.023438 21.210938 10.519531 22.5 9.699219 L 22.5 10.5 C 22.5 11.140625 21.140625 12.0625 18.621094 12.507812 C 18.214844 12.578125 17.941406 12.96875 18.011719 13.375 C 18.078125 13.738281 18.394531 13.996094 18.75 13.996094 C 18.792969 13.996094 18.835938 13.992188 18.878906 13.984375 C 20.40625 13.714844 21.628906 13.273438 22.5 12.71875 L 22.5 13.5 C 22.5 14.140625 21.140625 15.0625 18.621094 15.507812 C 18.214844 15.578125 17.941406 15.96875 18.011719 16.375 C 18.078125 16.738281 18.394531 16.996094 18.75 16.996094 C 18.792969 16.996094 18.835938 16.992188 18.878906 16.984375 C 20.40625 16.714844 21.628906 16.273438 22.5 15.71875 L 22.5 16.5 C 22.5 17.140625 21.140625 18.0625 18.621094 18.507812 C 18.214844 18.578125 17.941406 18.96875 18.011719 19.375 C 18.078125 19.738281 18.394531 19.996094 18.75 19.996094 C 18.792969 19.996094 18.835938 19.992188 18.878906 19.984375 C 20.40625 19.714844 21.628906 19.273438 22.5 18.71875 L 22.5 19.5 C 22.5 20.234375 20.65625 21.402344 17.1875 21.691406 C 16.777344 21.726562 16.46875 22.089844 16.503906 22.503906 C 16.535156 22.894531 16.863281 23.191406 17.25 23.191406 C 17.269531 23.191406 17.289062 23.1875 17.3125 23.1875 C 20.640625 22.90625 24 21.660156 24 19.5 L 24 4.5 C 24 2.0625 19.75 0.75 15.75 0.75 Z M 15.75 6.75 C 11.628906 6.75 9 5.417969 9 4.5 C 9 3.582031 11.628906 2.25 15.75 2.25 C 19.871094 2.25 22.5 3.582031 22.5 4.5 C 22.5 5.417969 19.871094 6.75 15.75 6.75 Z M 15.75 6.75 "/>
            <path style=" stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;" d="M 8.25 9.75 C 4.25 9.75 0 11.0625 0 13.5 L 0 19.5 C 0 21.9375 4.25 23.25 8.25 23.25 C 12.25 23.25 16.5 21.9375 16.5 19.5 L 16.5 13.5 C 16.5 11.0625 12.25 9.75 8.25 9.75 Z M 15 19.5 C 15 20.417969 12.371094 21.75 8.25 21.75 C 4.128906 21.75 1.5 20.417969 1.5 19.5 L 1.5 18.71875 C 3.089844 19.722656 5.71875 20.25 8.25 20.25 C 10.78125 20.25 13.410156 19.722656 15 18.71875 Z M 15 16.5 C 15 17.417969 12.371094 18.75 8.25 18.75 C 4.128906 18.75 1.5 17.417969 1.5 16.5 L 1.5 15.71875 C 3.089844 16.722656 5.71875 17.25 8.25 17.25 C 10.78125 17.25 13.410156 16.722656 15 15.71875 Z M 8.25 15.75 C 4.128906 15.75 1.5 14.417969 1.5 13.5 C 1.5 12.582031 4.128906 11.25 8.25 11.25 C 12.371094 11.25 15 12.582031 15 13.5 C 15 14.417969 12.371094 15.75 8.25 15.75 Z M 8.25 15.75 "/>
         </svg>
         </div>
         <div class="balance-summ">105.656.65</div>

      </div>
   </div>
</header>
<script>

</script>
 <?php include 'chat.php'; ?>