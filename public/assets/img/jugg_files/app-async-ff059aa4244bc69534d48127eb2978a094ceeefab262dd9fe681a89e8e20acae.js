function initHotjar(){!function(e,t,n,o,a,r){e.hj=e.hj||function(){(e.hj.q=e.hj.q||[]).push(arguments)},e._hjSettings={hjid:171201,hjsv:5},a=t.getElementsByTagName("head")[0],r=t.createElement("script"),r.async=1,r.src=n+e._hjSettings.hjid+o+e._hjSettings.hjsv,a.appendChild(r)}(window,document,"//static.hotjar.com/c/hotjar-",".js?sv=")}!function(){function e(){var e=document.querySelector(".js-chrome-extension");if(e){window.chrome||UTIL.removeClass(e,"tool-overview__item--large")}}UTIL.ready(e)}(),function(){function e(){dropdown=document.querySelector(".js-click-dropdown"),dropdown&&new t(dropdown)}function t(e){function t(){a?o():n()}function n(){UTIL.addClass(e,"click-dropdown--open"),a=!0,window.setTimeout(function(){document.addEventListener("click",o)},0)}function o(){UTIL.removeClass(e,"click-dropdown--open"),a=!1,document.removeEventListener("click",o)}var a=!1;e.addEventListener("click",t)}UTIL.ready(e)}();var DownloadOverlay=function(){function e(){t();var e=document.querySelector(".photo-modal__overlay"),n=document.querySelector(".photo-modal__close");UTIL.removeClass(e,"photo-modal__overlay--hidden"),n.addEventListener("click",function(){UTIL.addClass(e,"photo-modal__overlay--hidden")})}function t(){!function(e){var t=e.getElementsByTagName("SCRIPT")[0],n=e.createElement("SCRIPT");n.type="text/javascript",n.async=!0,n.src="//assets.pinterest.com/js/pinit.js",t.parentNode.insertBefore(n,t)}(document)}return{open:e}}();Download=function(){function e(){var e=document.querySelectorAll(".js-download");e&&Array.prototype.forEach.call(e,function(e){e.addEventListener("click",t)})}function t(){n("click",this.getAttribute("data-id")),DownloadOverlay.open()}function n(e,t){ga("send","event",{eventCategory:"download",eventAction:e,eventLabel:t}),o("/photo/td/","photo_id="+t),FacebookPixel.track("Download")}function o(e,t){var n=new XMLHttpRequest;n.open("POST",e,!0),n.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8"),n.send(t)}return UTIL.ready(e),{track:n}}(),function(){function e(){var e=document.getElementsByClassName("js-download-size-btn")[0];null!=e&&(dropdown=document.querySelector(e.getAttribute("href")),(u=document.getElementsByClassName("custom-size__width")[0])&&(c=document.getElementsByClassName("custom-size__height")[0],s=document.getElementById("custom-size__value"),r(),c.addEventListener("input",o),u.addEventListener("input",a),Array.prototype.forEach.call(document.getElementsByClassName("select-list__item"),function(e){e.addEventListener("click",t)}),document.getElementsByClassName("custom-size__submit")[0].addEventListener("click",n)))}function t(){this.querySelector('input[type="radio"]').checked=!0,Array.prototype.forEach.call(document.getElementsByClassName("select-list__item"),function(e){UTIL.removeClass(e,"select-list--active")}),UTIL.addClass(this,"select-list--active")}function n(e){var t,n,o,a;if(s.checked){if(!("function"!=typeof u.checkValidity||u.checkValidity()&&c.checkValidity()))return;t=u.value,n=c.value,i(t,n),o=t+"x"+n}else{a=document.querySelector('input[name="download-size"]:checked');var r=a.value.split("x");t=r[0],n=r[1],o=a.getAttribute("data-name")}if(e.preventDefault(),a&&null!==a.getAttribute("data-alt-url")&&"download"in document.createElement("a")&&-1===navigator.userAgent.search("Firefox")){var l=document.createElement("a");l.setAttribute("href",a.getAttribute("data-alt-url")),l.setAttribute("download",""),l.click()}else{var d=this.getAttribute("data-url")+"?dl&fit=crop&w="+t+"&h="+n;window.location.href=d}Download.track(o,this.getAttribute("data-id")),DownloadOverlay.open()}function o(){var e=c.value,t=Math.round(e*c.getAttribute("data-aspect-ratio"));u.placeholder=t}function a(){var e=u.value,t=Math.round(e*u.getAttribute("data-aspect-ratio"));c.placeholder=t}function r(){var e=JSON.parse(localStorage.getItem("customDownloadSize"));e&&(e.height||e.width)&&(c.value=e.height,u.value=e.width,o(),a())}function i(e,t){var n={width:e,height:t};localStorage.setItem("customDownloadSize",JSON.stringify(n))}var u,c,s;UTIL.ready(e)}(),function(){function e(){var e=document.getElementsByClassName("js-dropdown");e.length&&Array.prototype.forEach.call(e,function(e){new t(e)})}function t(e){function t(e){r||e.preventDefault(),clearTimeout(a),n(),UTIL.addClass(u,"open")}function o(){clearTimeout(a),a=window.setTimeout(function(){UTIL.removeClass(u,"open")},400)}var a,r="true"==e.getAttribute("data-is-clickable"),i=e.getAttribute("data-dropdown-selector")||e.getAttribute("href"),u=document.querySelector(i);e.addEventListener("mouseenter",t),e.addEventListener("click",t),u.addEventListener("mousemove",t),u.addEventListener("mouseleave",o),e.addEventListener("mouseleave",o)}function n(){var e=document.querySelectorAll(".btn__dropdown.open");Array.prototype.forEach.call(e,o)}function o(e){UTIL.removeClass(e,"open")}UTIL.ready(e)}();var FacebookPixel=function(){function e(){!function(e,t,n,o,a,r,i){e.fbq||(a=e.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},e._fbq||(e._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],r=t.createElement(n),r.async=!0,r.src=o,i=t.getElementsByTagName(n)[0],i.parentNode.insertBefore(r,i))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js"),fbq("init","158995177864833"),fbq("track","PageView")}function t(e){fbq("trackCustom",e)}function n(){var e=document.querySelectorAll(".js-sponsored-photos-links");Array.prototype.forEach.call(e,function(e){e.addEventListener("click",o)})}function o(){t("ShutterstockClick")}return UTIL.ready(e),{track:t,addSponsoredPhotosEventListener:n}}();!function(){function e(){var e=document.querySelectorAll("[data-action]");Array.prototype.forEach.call(e,function(e){e.setAttribute("action",e.getAttribute("data-action"))})}UTIL.ready(e)}(),function(){function init(){if(newPhotosLink=document.querySelector(".js-new-photos-link"),(trendingPhotosLink=document.querySelector(".js-trending-photos-link"))&&newPhotosLink){newPhotosLink.addEventListener("click",loadNewPhotos),trendingPhotosLink.addEventListener("click",loadTrendingPhotos),window.addEventListener("popstate",onBack),trendingPhotosPath=trendingPhotosLink.getAttribute("href"),newPhotosPath=newPhotosLink.getAttribute("href");var e=history.state||{};UTIL.hasClass(newPhotosLink,TAB_ACTIVE_CLASS)?(e.activeHomeTab="new",window.history.replaceState(e,"New Free Photos",newPhotosPath)):(e.activeHomeTab="trending",window.history.replaceState(e,"Free stock photos",trendingPhotosPath))}}function onBack(){history.state&&history.state.activeHomeTab&&("new"===history.state.activeHomeTab?loadNewPhotos():loadTrendingPhotos())}function loadNewPhotos(e){if(clickWithoutKeyPressed(e))return!1;loadPhotos(e,newPhotosLink),UTIL.removeClass(trendingPhotosLink,TAB_ACTIVE_CLASS),e&&(window.history.pushState({activeHomeTab:"new"},"New Free Photos",newPhotosPath),ga("send","pageview",location.pathname))}function loadTrendingPhotos(e){if(clickWithoutKeyPressed(e))return!1;loadPhotos(e,trendingPhotosLink),UTIL.removeClass(newPhotosLink,TAB_ACTIVE_CLASS),e&&(window.history.pushState({activeHomeTab:"trending"},"Free stock photos",trendingPhotosPath),ga("send","pageview",location.pathname))}function loadPhotos(event,link){event&&event.preventDefault(),ENDLESS_SCROLLING.terminate(),document.querySelector(".photos").innerHTML="",document.querySelector(".js-pagination").innerHTML="",UTIL.addClass(link,TAB_ACTIVE_CLASS),history&&history.state&&(history.state.pos=window.pageYOffset);var url=link.getAttribute("data-url")+"&format=js",request=UTIL.scriptRequest(url);request.onload=function(){request.status>=200&&request.status<400&&(eval(request.responseText),ENDLESS_SCROLLING.init())},request.send()}function clickWithoutKeyPressed(e){return e&&(e.altKey||e.ctrlKey||e.shiftKey||e.metaKey)}var newPhotosLink,trendingPhotosLink,newPhotosPath,trendingPhotosPath,TAB_ACTIVE_CLASS="tabs__tab--active";UTIL.ready(init)}(),UTIL.ready(initHotjar);var LikeStore=function(){function e(){document.addEventListener("new-photos",t),t()}function t(){if(UTIL.isSignedIn())for(var e=o(),t=0;t<e.length;t++){var n=document.querySelector(".js-like-"+e[t]);n&&(UTIL.addClass(n,u),UTIL.addClass(n,c))}}function n(e,t){var n=o();if("like"==e)-1==n.indexOf(t)&&n.push(t);else if("unlike"==e){var a=n.indexOf(t);n.splice(a,1)}localStorage.likes=JSON.stringify(n)}function o(){var e=localStorage.likes,t=new Date(localStorage.likes_expire_at);return!e||t<new Date?(a(),[]):JSON.parse(e)}function a(){UTIL.getRequest("/likes/",r,i);var e=new Date;e.setHours(e.getHours()+2),localStorage.likes_expire_at=e}function r(e){JSON.parse(e).not_signedin?Logout.logout():(localStorage.likes=e,t())}function i(){}var u="btn-like--active",c="btn-like--no-animations";return UTIL.ready(e),{handleLike:n}}(),SignUpModal=function(){function e(){if(!i){var e=document.querySelector(".modal"),r=e.getAttribute("data-sign-up-path");UTIL.getRequest(r,t,n)}UTIL.addClass(document.body,"modal--open"),document.addEventListener("keydown",o),document.addEventListener("click",a)}function t(e){document.querySelector(".modal__content").innerHTML=e,i=!0}function n(){}function o(e){27==e.keyCode&&r()}function a(e){for(var t=e.target;"body"!=t.tagName.toLowerCase();){if(UTIL.hasClass(t,"modal__content"))return;t=t.parentNode}r()}function r(){document.removeEventListener("keydown",o),document.removeEventListener("click",a),UTIL.removeClass(document.body,"modal--open")}var i=!1;return{open:e}}();!function(){function e(){document.addEventListener("new-photos",t),t()}function t(){var e=document.querySelectorAll(".js-like");Array.prototype.forEach.call(e,function(e){e.getAttribute("data-initialized")||(e.setAttribute("data-initialized","true"),e.addEventListener("click",n))})}function n(e){if(e.stopPropagation(),!UTIL.isSignedIn())return r("not-signedin",c),void SignUpModal.open();for(var t=e.target;"button"!=t.tagName.toLowerCase();)t=t.parentNode;var n,c=t.getAttribute("data-photo-id");UTIL.hasClass(t,i)?(n="/photo/PHOTO_ID/unlike/",UTIL.removeClass(t,u),UTIL.removeClass(t,i),r("unlike",c)):(n="/photo/PHOTO_ID/like/",UTIL.addClass(t,i),r("like",c)),UTIL.getRequest(n.replace("PHOTO_ID",c),o,a)}function o(e){e=JSON.parse(e),e.not_signedin?(SignUpModal.open(),Logout.logout()):LikeStore.handleLike(e.action,e.photo_id)}function a(){alert("Error: Please reload the page and try to like the photo again. If it still doesn't work please contact: info@pexels.com")}function r(e,t){ga("send","event",{eventCategory:"like",eventAction:e,eventLabel:t})}var i="btn-like--active",u="btn-like--no-animations";UTIL.ready(e)}(),function(){function e(){(o=document.querySelector(".js-chart-container"))&&t(n)}function t(e){var t="download_chart",n=UTIL.scriptRequest(t);n.onload=function(){o.innerHTML=n.responseText,e()},n.send()}function n(){var e=document.querySelector(".js-chart-data");if(e){var t=e.getAttribute("data-title"),n=JSON.parse(e.getAttribute("data-labels")),o=JSON.parse(e.getAttribute("data-data")),a=document.getElementById("chart");new Chart(a,{type:"line",data:{labels:n,datasets:[{label:t,backgroundColor:"rgba(39, 174, 96, .3)",borderColor:"rgba(39, 174, 96, 1)",pointBackgroundColor:"#fff",data:o}]},options:{legend:{display:!1},tooltips:{xPadding:10,yPadding:10}}})}}var o;UTIL.ready(e)}(),function(){function e(){(n=document.querySelector(".navbar--hero"))&&(t(),window.addEventListener("scroll",t))}function t(){document.documentElement.scrollTop>100||document.body.scrollTop>100?UTIL.removeClass(n,"navbar--hero"):UTIL.addClass(n,"navbar--hero")}var n;UTIL.ready(e)}(),function(){function e(){o=document.querySelector(".navbar__toggle--search"),a=document.querySelector(".navbar__toggle--menu"),r=document.querySelector(".navbar-overlay"),null!==a&&a.addEventListener("click",t),null!==r&&r.addEventListener("click",t),null!==o&&o.addEventListener("click",n)}function t(){document.querySelector(".navbar__md-nav--menu").classList.toggle("navbar__md-nav--open"),document.querySelector(".navbar").classList.toggle("navbar--open"),document.querySelector("body").classList.toggle("navbar-open"),a.classList.toggle("navbar__toggle--active")}function n(){var e=document.querySelector(".navbar__md-nav--search").classList;e.contains("navbar__md-nav--open")?(e.remove("navbar__md-nav--open"),o.classList.remove("navbar__toggle--active")):(e.add("navbar__md-nav--open"),o.classList.add("navbar__toggle--active"),document.querySelector(".navbar__md-nav--search input").focus())}var o,a,r;UTIL.ready(e)}(),function(){function e(){var e=document.querySelectorAll(".js-paypal-btn");Array.prototype.forEach.call(e,function(e){e.addEventListener("click",t)})}function t(){document.querySelector(".js-paypal-form").submit()}UTIL.ready(e)}(),function(){function e(){var e=document.querySelector(".js-32bit-warning");e&&"Win32"===navigator.platform&&-1===navigator.userAgent.indexOf("WOW64")&&-1===navigator.userAgent.indexOf("Win64")&&-1===navigator.userAgent.indexOf(" x64")&&"x64"!==navigator.cpuClass&&UTIL.removeClass(e,"hidden")}UTIL.ready(e)}(),function(){function e(){(n=document.getElementById("user_subscribed_newsletter"))&&UTIL.getRequest("/me/newsletter-subscription-status/",t)}function t(e){if(isSubscribed="true"==e,isSubscribed){document.getElementById("user_subscribed_newsletter_before").value=!0,n.checked=!0,localStorage.setItem("newsletterSubscribed","true")}}var n;e()}(),function(){function init(){var el=document.querySelector(".js-similar-photos");if(el){var url=el.getAttribute("data-url");url=url.replace("WIDTH",el.offsetWidth);var request=UTIL.scriptRequest(url);request.onload=function(){request.status>=200&&request.status<400&&eval(request.responseText)},request.send()}}UTIL.ready(init)}(),function(){function e(){t(),n(),o()}function t(){window.twttr=function(e,t,n){var o,a,r=e.getElementsByTagName(t)[0];if(!e.getElementById(n))return a=e.createElement(t),a.id=n,a.src="https://platform.twitter.com/widgets.js",r.parentNode.insertBefore(a,r),window.twttr||(o={_e:[],ready:function(e){o._e.push(e)}})}(document,"script","twitter-wjs")}function n(){!function(e,t,n){var o,a=e.getElementsByTagName(t)[0];e.getElementById(n)||(o=e.createElement(t),o.id=n,o.async=1,o.src="//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=248395878694096",a.parentNode.insertBefore(o,a))}(document,"script","facebook-jssdk")}function o(){var e=document.querySelector(".js-weibo");if(e){var t=navigator.language||navigator.userLanguage;t=t.toLowerCase(),"zh-cn"!=t&&"zh-tw"!=t&&"zh-hk"!=t&&"zh"!=t||UTIL.removeClass(e,"hidden")}}e()}(),function(){function e(){a=document.querySelector(".switch-locale");for(var e=document.querySelectorAll(".js-show-switch-locale"),n=0;n<e.length;n++)e[n].addEventListener("click",function(e){e.preventDefault(),t(!0)});if((navigator.language||navigator.userLanguage).split("-")[0]!=document.documentElement.getAttribute("lang")){var o=new Date(localStorage.getItem("hide_switch_locale_until"));a&&(!o||o<new Date)&&t(!1)}}function t(e){UTIL.addClass(a,"switch-locale--is-visible"),e?(UTIL.removeClass(a,"switch-locale--bottom-bar"),UTIL.addClass(a,"switch-locale--modal")):(UTIL.removeClass(a,"switch-locale--modal"),UTIL.addClass(a,"switch-locale--bottom-bar")),r||(n(),r=!0)}function n(){var e=document.querySelectorAll(".js-switch-locale-btn");Array.prototype.forEach.call(e,function(e){e.addEventListener("click",function(){o(e)})})}function o(e){e.getAttribute("data-close")&&UTIL.removeClass(a,"switch-locale--is-visible");var t=new Date;t.setDate(t.getDate()+90),localStorage.setItem("hide_switch_locale_until",t)}var a,r=!1;UTIL.ready(e)}();var TagEditor=function(){function e(){var e=document.createElement("script");e.src="/assets/tag-editor-6a92f3630457f387f90f3d48cd44d03f5168a4b6ce94a06654370b204b8d5a3d.js",document.body.appendChild(e)}return{load:e}}(),AddPhotoTags=function(){function e(){(r=document.querySelector(".js-add-tags-link"))&&r.addEventListener("click",t)}function t(e){e.preventDefault(),n(),TagEditor.load(),o()}function n(){i=document.querySelector(".js-add-tags-form"),UTIL.addClass(r,"hidden"),UTIL.removeClass(i,"hidden")}function o(){i.addEventListener("submit",a)}function a(e){e.preventDefault();var t=document.querySelector(".js-add-tags-success");UTIL.addClass(i,"hidden"),UTIL.removeClass(t,"hidden");var n=$(this).attr("action");$.ajax({type:"POST",url:n,data:$(i).serialize()})}return{init:e};var r,i}();!function(){function e(){c=document.querySelector(".avatar-form"),s=document.querySelector(".js-avatar-input"),l=document.querySelector(".avatar-form__img"),d=document.querySelector(".avatar-form__progress-bar"),f=document.querySelector(".avatar-form__btn"),null!==s&&null!==c&&(f.addEventListener("click",t),l.addEventListener("click",t),s.addEventListener("change",function(){file=s.files[0],n()}))}function t(e){e.preventDefault(),s.click()}function n(){m=!1,c.classList.add("avatar-form--uploading"),window.onbeforeunload=function(){if(!m)return i18n.avatar_not_published};var e=new FileReader;e.onload=function(e){l.setAttribute("src",e.target.result)},e.readAsDataURL(file),o()}function o(){var e=function(e){var e=JSON.parse(e);a(e.fields,e.upload_url)},t=function(e){e=JSON.parse(e)||{},alert(e.error||i18n.no_upload_url)};UTIL.getRequest("/users/avatar_upload_url/?file_type="+file.type,e,t)}function a(e,t){var n=new XMLHttpRequest;n.upload.addEventListener("progress",r),n.open("POST",t),n.setRequestHeader("X-CSRF-Token",UTIL.getCsrfToken()),n.onload=function(){n.status>=200&&n.status<400&&u()},n.onerror=function(){alert(i18n.upload_error)};var o=new FormData;for(key in e)o.append(key,e[key]);o.append("file",file),n.send(o)}function r(e){if(e.lengthComputable){var t=e.loaded/e.total*30;d.style.width=t+"%"}}function i(){var e=parseFloat(d.style.width),t=e+(99-e)/50;d.style.width=t+"%",t<98.9&&!1===m&&setTimeout(i,100)}function u(){var e=function(e){m=!0,c.classList.remove("avatar-form--uploading"),e=JSON.parse(e),l.setAttribute("src",e.avatar_url)},t=function(){alert(i18n.try_again)};UTIL.getRequest("/users/avatar_upload_success/",e,t),i()}var c,s,l,d,f,m=!1;UTIL.ready(e)}();var ConfirmDialog=function(){function e(){var e=document.querySelector("[data-confirm]");e&&e.addEventListener("click",t)}function t(e){window.confirm(e.target.getAttribute("data-confirm"))||e.preventDefault()}return UTIL.ready(e),{init:e}}(),GeoAutocompleteForm=function(){function e(){a=document.querySelector(".js-show-geo-autocomplete"),a.addEventListener("click",function(e){e.preventDefault(),UTIL.addClass(a,"hidden"),t()})}function t(){var e=document.documentElement.lang,t=document.createElement("script");t.src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJ0gSv0MjwjHtRwrcoeNowjNdm3N-AWDU&signed_in=true&libraries=places&callback=GeoAutocompleteForm.isLoaded&language="+e,document.body.appendChild(t)}function n(){autocompleteInput=document.querySelector(".js-geo-autocomplete"),r=new GeoAutocomplete(a,autocompleteInput,!0);var e=document.querySelector(".js-add-location-form");UTIL.removeClass(e,"hidden"),e.addEventListener("submit",o)}function o(){document.querySelector(".js-geo-autocomplete-place-id").value=r.getPlaceId(),document.querySelector(".js-geo-autocomplete-longitude").value=r.getLongitude(),document.querySelector(".js-geo-autocomplete-latitude").value=r.getLatitude()}var a,r;return{init:e,isLoaded:n}}(),GeoAutocomplete=function(e,t,n){function o(){if(n)return void a();e.addEventListener("click",function(t){t.preventDefault(),UTIL.addClass(e,"hidden"),a()})}function a(){UTIL.removeClass(t,"hidden");var e=new google.maps.places.Autocomplete(t);e.addListener("place_changed",function(){var t=e.getPlace();u=t.place_id,r=t.geometry.location.lat(),i=t.geometry.location.lng()})}var r,i,u;return o(),{getLatitude:function(){return r},getLongitude:function(){return i},getPlaceId:function(){return u}}};!function(){function init(){var el=document.querySelector(".js-insert-details");if(el){var path=el.getAttribute("data-details-path");if(performance.navigation.type!==performance.navigation.TYPE_RELOAD&&performance.navigation.type!==performance.navigation.TYPE_BACK_FORWARD){var ref_query=getSearchQueryFromReferrer();null!==ref_query&&(path+="?ref_query="+ref_query)}var request=UTIL.scriptRequest(path);request.onload=function(){eval(request.responseText),ConfirmDialog.init()},request.send()}}function getSearchQueryFromReferrer(){var e=document.referrer;if(!e)return null;for(var t=0;t<SEARCH_PATHS.length;++t){var n=SEARCH_PATHS[t],o=e.indexOf(n);if(o>0){var a=o+n.length,r=e.indexOf("/",a);return r<0&&(r=e.indexOf("?",a))<0&&(r=e.length),e.substring(a,r)}}return null}var SEARCH_PATHS=["/search/","/de/suche/"];UTIL.ready(init)}();var Logout=function(){function e(){var e=document.querySelector(".js-logout-btn");e&&e.addEventListener("click",t)}function t(){localStorage.removeItem("likes"),localStorage.removeItem("likes_expire_at"),n("avatar_url")}function n(e){document.cookie=e+"=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/"}return UTIL.ready(e),{logout:t}}(),PhotoUpload=function(e,t){function n(){d=document.querySelector(".js-photo-upload-list"),Promise.all([o(),r()]).then(function(e){return i(e[1])}).then(function(){return c()}).then(function(){_=!0,s(w),t()})["catch"](l)}function o(){return new Promise(function(n,o){var r=document.createElement("div");r.innerHTML=document.getElementById("js-photo-upload-item").innerHTML,g=r.firstElementChild,g.querySelector("img").setAttribute("alt",e.name),d.appendChild(g),UTIL.triggerEvent("init-tag-editor");var i=g.querySelector(".js-show-geo-autocomplete"),u=g.querySelector(".js-geo-autocomplete");T=new GeoAutocomplete(i,u),h=g.querySelector(".upload-item__progress-bar"),y=g.querySelector(".upload-item__progress-text"),L=y.getAttribute("data-uploading"),b=y.getAttribute("data-error"),w=y.getAttribute("data-success"),abortBtn=g.querySelector(".upload-item__abort"),abortBtn.addEventListener("click",function(){S=!0,t(),a(g)});var c=new FileReader;c.onload=function(t){var a=g.querySelector(".upload-item__preview");a.onload=function(){m=this.naturalWidth,v=this.naturalHeight,p=e.size,m*v<2e6?o(i18n.min_resolution):n()},a.setAttribute("src",t.target.result)},c.readAsDataURL(e)})}function a(e){var t=e.offsetHeight,n=t/15;e.style.overflow="hidden";var o=function(){e.style.height=(t-=n)+"px",t>0?setTimeout(o,20):e.style.display="none"};o()}function r(){return new Promise(function(t,n){var o=function(e){var e=JSON.parse(e);f=e.photo_id,t(e)},a=function(e){e=JSON.parse(e)||{},n(e.error||i18n.no_upload_url)},r="/upload/upload_url/?file_type="+e.type+"&"+Math.floor(1e5*Math.random());UTIL.getRequest(r,o,a)})}function i(t){return new Promise(function(n,o){var a=t.fields,r=t.upload_url,i=new XMLHttpRequest;i.upload.addEventListener("progress",u),i.open("POST",r),i.setRequestHeader("X-CSRF-Token",UTIL.getCsrfToken()),i.onload=function(){i.status>=200&&i.status<400&&n()},i.onerror=function(){o(i18n.upload_error)};var c=new FormData;for(key in a)c.append(key,a[key]);c.append("file",e),i.send(c)})}function u(e){if(e.lengthComputable){var t=e.loaded/e.total*100;h.style.width=t+"%";s(L.replace("{{percent}}",Math.round(t)+"%"))}}function c(){return new Promise(function(e,t){var n=function(){t(i18n.try_again)},o="?id="+f+"&width="+m+"&height="+v+"&filesize="+p;UTIL.getRequest("/upload/success/"+o,e,n)})}function s(e){y.innerHTML=e}function l(e){S=!0,s(e||b),t(),UTIL.addClass(g,"upload-item--error")}var d,f,m,v,p,g,h,y,L,b,w,T,S=!1,_=!1;return n(),{isSuccessful:function(){return _},isAborted:function(){return S},getPhotoId:function(){return f},getPhotoTags:function(){return g.querySelector(".js-tag-editor").value},getPhotoLatitude:function(){return T.getLatitude()},getPhotoLongitude:function(){return T.getLongitude()},getPhotoPlaceId:function(){return T.getPlaceId()}}};!function(){function e(){if(c=document.querySelector(".js-file-input"),s=document.querySelector(".dragover-overlay"),l=document.querySelector(".js-submit-btn"),d=document.querySelector(".js-submit-btn-tooltip"),f=document.querySelector(".js-submit-form"),m=document.querySelector(".js-submit-photos"),null!==c&&null!==s&&null!==l&&null!==f){if(!t())return void alert("Houston, we have a problem. Please use a modern browser to upload photos.");if("undefined"==typeof Promise){var e=document.createElement("script");e.src="/assets/es6-promise-f580db3f27dc187729743dca7ba6cf538fc60bf93e65375d3651955d0fcc9b9f.js",document.body.appendChild(e)}TagEditor.load(),c.addEventListener("change",function(){r(c.files)}),document.addEventListener("dragover",n),document.addEventListener("dragleave",n),document.addEventListener("drop",a),f.addEventListener("submit",u)}}function t(){var e=new XMLHttpRequest;return!!(e&&"upload"in e&&"onprogress"in e.upload&&window.FileList)}function n(e){if(e.stopPropagation(),e.preventDefault(),!o(e))return void(e.dataTransfer.dropEffect="none");e.dataTransfer.dropEffect="copy","dragover"==e.type?s.style.display="block":e.target==s&&(s.style.display="none")}function o(e){if(e.dataTransfer.types)for(var t=0;t<e.dataTransfer.types.length;t++)if("Files"==e.dataTransfer.types[t])return!0;return!1}function a(e){n(e),r(e.target.files||e.dataTransfer.files)}function r(e){if(0!=e.length){d.removeAttribute("data-tooltip-disabled"),l.setAttribute("disabled","disabled"),window.onbeforeunload=function(){if(!v)return i18n.photos_not_published};for(var t=0;t<e.length;t++){var n=new PhotoUpload(e[t],i);p.push(n)}}}function i(){for(var e=0;e<p.length;e++)if(!p[e].isSuccessful()&&!p[e].isAborted())return;d.setAttribute("data-tooltip-disabled","disabled"),l.removeAttribute("disabled")}function u(){v=!0;for(var e=[],t=0;t<p.length;t++)p[t].isSuccessful()&&!p[t].isAborted()&&e.push({id:p[t].getPhotoId(),tags:p[t].getPhotoTags(),latitude:p[t].getPhotoLatitude(),longitude:p[t].getPhotoLongitude(),google_place_id:p[t].getPhotoPlaceId()});m.value=JSON.stringify(e)}var c,s,l,d,f,m,v=!1,p=[];UTIL.ready(e)}();