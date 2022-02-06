$(function () {
    const ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {
        // スマートフォン
          window.location.href = 'titosesmart';
    } else {
        // PC
      // alert('PCやで');
    }
})
